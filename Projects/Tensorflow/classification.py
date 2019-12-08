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

# ===== 3rd create categorical features =======
# There are two ways either using a hash bucket or a vocabulary list.

assigned_group = tf.feature_column.categorical_column_with_vocabulary_list('Group', ['A', 'B', 'C', 'D'])
# assigned_group = tf.feature_column.categorical_column_with_hash_bucket('Group', hash_bucket_size=10)

# We can make a continues column into a categorical column
age_bucket = tf.feature_column.bucketized_column(feature_columns.age, boundaries=[20, 30, 40, 50, 60, 70, 80])
feature_columns.update({'age_bucket': age_bucket})

# ====== 4th step Train - Test - Split ======
x_data = diabetes.drop('Class', axis=1) # Remove class from dataset
labels = diabetes['Class']

X_train, X_test, y_train, y_test = train_test_split(x_data, labels, test_size=0.3, random_state=101)