import tensorflow as tf
import numpy as np
import matplotlib.pyplot as plt
import pandas as pd
from sklearn.model_selection import train_test_split
tf.compat.v1.disable_eager_execution()
sess = tf.compat.v1.Session()  # Create a session.


diabetes = pd.read_csv('datasets/pima-indians-diabetes.csv')

# ===== 1st thing normalize / clean data. =======
cols_to_normalize = ['Number_pregnant', 'Glucose_concentration', 'Blood_pressure', 'Triceps',
                     'Insulin', 'BMI', 'Pedigree']

# Normalize data with pandas
diabetes[cols_to_normalize] = diabetes[cols_to_normalize].apply(lambda x: (x - x.min()) / (x.max() - x.min()))

# ===== 2nd thing create continues columns  =======
feature_columns = {}
for i in range(len(cols_to_normalize)):
    feature_columns.update({cols_to_normalize[i]: tf.feature_column.numeric_column(cols_to_normalize[i])})

age = tf.feature_column.numeric_column('Age');

# ===== 3rd create categorical features =======
# There are two ways either using a hash bucket or a vocabulary list.

assigned_group = tf.feature_column.categorical_column_with_vocabulary_list('Group', ['A', 'B', 'C', 'D'])
# assigned_group = tf.feature_column.categorical_column_with_hash_bucket('Group', hash_bucket_size=10)

# We can make a continues column into a categorical column
age_bucket = tf.feature_column.bucketized_column(age, boundaries=[20, 30, 40, 50, 60, 70, 80])
feature_columns.update({'age_bucket': age_bucket})

# ====== 4th step Train - Test - Split ======
x_data = diabetes.drop('Class', axis=1) # Remove class from dataset
labels = diabetes['Class']

X_train, X_test, y_train, y_test = train_test_split(x_data, labels, test_size=0.3, random_state=101)

# ====== 5th create model  ======
input_func = tf.compat.v1.estimator.inputs.pandas_input_fn(x=X_train, y=y_train, batch_size=10,
                                                           num_epochs=1000, shuffle=True)
temp_feat_col = []
for fcol in feature_columns:
    temp_feat_col.append(feature_columns[fcol])

model = tf.compat.v1.estimator.LinearClassifier(feature_columns=temp_feat_col, n_classes=2)

# ====== 6th Train & Evaluate Model  ======
model.train(input_func, steps=1000)
eval_input_func = tf.compat.v1.estimator.inputs.pandas_input_fn(x=X_test, y=y_test, batch_size=10,
                                                                num_epochs=1, shuffle=False)
results = model.evaluate(eval_input_func)

# ====== 7th Get Predictions  ======
pred_input_func = tf.compat.v1.estimator.inputs.pandas_input_fn(x=X_test, batch_size=10,
                                                                num_epochs=1, shuffle=False)
predictions = model.predict(pred_input_func)
myPredictions = list(predictions)

# ============= Dense Neural Network ============
# hidden_units attribute defines the number of layers on the dense neural network
# and the number of neurons that each layer has. For this we have 3 layers of 10
# neurons each layer.
dnn_model = tf.compat.v1.estimator.DNNClassifier(hidden_units=[10, 10, 10],
                                                 feature_columns=temp_feat_col,
                                                 n_classes=2)
dnn_model.train(input_fn=input_func, steps=1000)
embedded_group_columns = tf.compat.v1.feature_column.embedding_column(assigned_group, dimension=4)
temp_feat_col.append(embedded_group_columns)
input_func = tf.compat.v1.estimator.inputs.pandas_input_fn(X_train, y_train, batch_size=10, num_epochs=1000, shuffle=True)

dnn_model = tf.compat.v1.estimator.DNNClassifier(hidden_units=[10, 20, 20, 10, 10],
                                                 feature_columns=temp_feat_col,
                                                 n_classes=2)
dnn_model.train(input_fn=input_func, steps=1000)
eval_input_func = tf.compat.v1.estimator.inputs.pandas_input_fn(x=X_test, y=y_test, batch_size=10, num_epochs=1, shuffle=False)
results = dnn_model.evaluate(eval_input_func)

print(results)





