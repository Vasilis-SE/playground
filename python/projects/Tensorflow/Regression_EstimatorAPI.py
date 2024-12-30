import tensorflow as tf
from sklearn.model_selection import train_test_split
import numpy as np
import matplotlib.pyplot as plt
import pandas as pd

tf.compat.v1.disable_eager_execution()
sess = tf.compat.v1.Session()  # Create a session.

x_data = np.linspace(0.0, 10.0, 1000000)
noise = np.random.randn(len(x_data))
y = (0.5 * x_data) + 5 + noise  # y = mx + b
x_df = pd.DataFrame(x_data, columns=["X Data"])
y_df = pd.DataFrame(y, columns=["Y Data"])
y_true = (0.5 * x_data) + 5 + noise
data = pd.concat([x_df, y_df], axis=1)
data_sample = data.sample(250)

feature_columns = [ tf.feature_column.numeric_column('x', shape=[1]) ]
estimator = tf.estimator.LinearRegressor(feature_columns=feature_columns)
x_train, x_eval, y_train, y_eval = train_test_split(x_data, y_true, test_size=0.3, random_state=101)

input_function = tf.compat.v1.estimator.inputs.numpy_input_fn({'x': x_train}, y_train, batch_size=8, num_epochs=None, shuffle=True)
# Predefined number of epochs...
train_input_function = tf.compat.v1.estimator.inputs.numpy_input_fn({'x': x_train}, y_train, batch_size=8, num_epochs=1000, shuffle=False)
eval_input_function = tf.compat.v1.estimator.inputs.numpy_input_fn({'x': x_eval}, y_eval, batch_size=8, num_epochs=1000, shuffle=False)

# Use the 3 functions `train`, `evaluate` & `predict` of the estimator API
estimator.train(input_fn=input_function, steps=1000)
train_metrics = estimator.evaluate(input_fn=train_input_function, steps=1000)
print("========= Train Metrics ========")
print(train_metrics)

eval_metrics = estimator.evaluate(input_fn=eval_input_function, steps=1000)
print("========= Evaluation Metrics ========")
print(eval_metrics)

brand_new_data = np.linspace(0, 10, 10)
input_function_predict = tf.compat.v1.estimator.inputs.numpy_input_fn({'x': brand_new_data}, shuffle=False)
new_data_predictions = list(estimator.predict(input_fn=input_function_predict))

# Predict function is a generator function that we can display it by either casting to a list or iterating it.
print(new_data_predictions, sep="\n")

predictions = []
for pred in estimator.predict(input_fn=input_function_predict):
    predictions.append(pred["predictions"])

plt.scatter(data_sample["X Data"], data_sample["Y Data"])
plt.plot(brand_new_data, predictions, 'r')
plt.show()
