import tensorflow as tf

tf.compat.v1.disable_eager_execution()
sess = tf.compat.v1.Session()  # Create a session.

n1 = tf.constant(1)
n2 = tf.constant(2)
n3 = n1 + n2

print(sess.run(n3))

# Tensorflow when created generates a default graph on its own
# you can create additional graphs manually.

default_graph = tf.compat.v1.get_default_graph()
print(default_graph)

manual_graph = tf.Graph()
print(manual_graph)

# Set manual graph as the default graph
with manual_graph.as_default():
    manual_graph is tf.compat.v1.get_default_graph()
    print(manual_graph)
