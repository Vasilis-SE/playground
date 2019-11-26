import tensorflow as tf
import numpy as np
import matplotlib.pyplot as plt
import pandas as pd

tf.compat.v1.disable_eager_execution()
sess = tf.compat.v1.Session()  # Create a session.

# My model will be: y = mx + b

x_data = np.linspace(0.0, 10.0, 1000000)
noise = np.random.randn(len(x_data))

y = (0.5 * x_data) + 5 + noise  # y = mx + b

x_df = pd.DataFrame(x_data, columns=["X Data"])
y_df = pd.DataFrame(y, columns=["Y Data"])
noise_df = pd.DataFrame(noise)

data = pd.concat([x_df, y_df], axis=1)
data_sample = data.sample(250)

batch_size = 8
m = tf.Variable(0.81)
b = tf.Variable(0.17)

x_placeholder = tf.compat.v1.placeholder(tf.float32, [batch_size])
y_placeholder = tf.compat.v1.placeholder(tf.float32, [batch_size])

y_model = m * x_placeholder + b
error = tf.reduce_sum(tf.square(y_placeholder - y_model))
optimizer = tf.compat.v1.train.GradientDescentOptimizer(0.001)
train = optimizer.minimize(error)

init = tf.compat.v1.global_variables_initializer()
sess.run(init)

batches = 1000
for i in range(batches):
    rand_ind = np.random.randint(len(x_data), size=batch_size)
    feed_dictionary = {x_placeholder: x_data[rand_ind], y_placeholder: y[rand_ind]}

    print(rand_ind)
    print(feed_dictionary)
    print("----------------------------")

    sess.run(train, feed_dictionary)

model_m, model_b = sess.run([m, b])
y_hat = x_data * model_m + model_b

# plot all the scatter points with noise and se fit
plt.scatter(data_sample["X Data"], data_sample["Y Data"])
plt.plot(x_data, y_hat, 'r')
plt.show()

