import tensorflow as tf
import numpy as np
import matplotlib.pyplot as plt

tf.compat.v1.disable_eager_execution()
sess = tf.compat.v1.Session()  # Create a session.
np.random.seed(101)
tf.random.set_seed(101)

# We want to achieve wx + b = z
# w = variable
# b = variable/bias term
# x = placeholder

features = 10
dense_neurons = 3

# 1. Variable - Placeholders
x = tf.compat.v1.placeholder(tf.float32, (None, features))
w = tf.Variable(tf.random.normal([features, dense_neurons]))
b = tf.Variable(tf.ones([dense_neurons]))

# 2. Operations
wx = tf.matmul(x, w)
z = tf.add(wx, b)

# 3. Activation function
a = tf.sigmoid(z)

# 4. Run on session
init = tf.compat.v1.global_variables_initializer()
sess.run(init)
layer_output = sess.run(a, {x: np.random.random([1, features])})

print(layer_output)

# 5. Apply Regression and Feed Data Based on cost function
x_data = np.linspace(0, 10, 10) + np.random.uniform(-1.5, 1.5, 10)
y_label = np.linspace(0, 10, 10) + np.random.uniform(-1.5, 1.5, 10)

plt.plot(x_data, y_label, '*')

m = tf.Variable(0.44)
b = tf.Variable(0.87)

error = 0
for x, y in zip(x_data, y_label):
    y_hat = m * x + b
    error += (y - y_hat) ** 2

optimizer = tf.compat.v1.train.GradientDescentOptimizer(0.001)
train = optimizer.minimize(error)

init = tf.compat.v1.global_variables_initializer()
sess.run(init)

training_steps = 100
for i in range(training_steps):
    sess.run(train)

final_slope, final_intercept = sess.run([m, b])

x_test = np.linspace(-1, 11, 10)
y_pred_plot = final_slope * x_test + final_intercept

plt.plot(x_test, y_pred_plot, 'red')
plt.show()