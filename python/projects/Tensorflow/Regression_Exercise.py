import tensorflow as tf
import numpy as np
import matplotlib.pyplot as plt
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import MinMaxScaler
from sklearn.metrics import mean_squared_error

tf.compat.v1.disable_eager_execution()
sess = tf.compat.v1.Session()  # Create a session.

housingDB = pd.read_csv('datasets/cal_housing_clean.csv') # import dataset
y_val = housingDB["medianHouseValue"]  # what we want to calculate
x_data = housingDB.drop("medianHouseValue", axis=1)  # our features are the rest of the data.

X_train, x_test, y_train, y_test = train_test_split(x_data, y_val, test_size=0.3, random_state=101)

scaler = MinMaxScaler()
scaler.fit(X_train)
X_train = pd.DataFrame(data=scaler.transform(X_train),
                       columns=X_train.columns,
                       index=X_train.index)
X_test = pd.DataFrame(data=scaler.transform(x_test),
                       columns=x_test.columns,
                       index=x_test.index)

feature_columns = []
for xcol in x_data.columns:
    feature_columns.append(tf.feature_column.numeric_column(xcol))

input_function = tf.compat.v1.estimator.inputs.pandas_input_fn(x=X_train, y=y_train,
                                                              batch_size=10,
                                                              num_epochs=1000,
                                                              shuffle=True)

model = tf.compat.v1.estimator.DNNRegressor(hidden_units=[3, 3, 3], feature_columns=feature_columns)
model.train(input_fn=input_function, steps=40000)

input_function_predictions = tf.compat.v1.estimator.inputs.pandas_input_fn(x=X_train, y=y_train,
                                                              batch_size=10,
                                                              num_epochs=1000,
                                                              shuffle=False)

input_function_predictions = tf.compat.v1.estimator.inputs.pandas_input_fn(
                                                              x=X_test,
                                                              batch_size=10,
                                                              num_epochs=1,
                                                              shuffle=False)
predictions = list(model.predict(input_fn=input_function_predictions))

final_preds = []
for pred in predictions:
    final_preds.append(pred["predictions"])

msr = mean_squared_error(y_test, final_preds) ** 0.5

print("==> " + str(msr))