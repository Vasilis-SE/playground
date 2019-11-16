import tensorflow as tf
import numpy as np

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