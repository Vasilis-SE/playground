import tensorflow as tf
tf.compat.v1.disable_eager_execution()
sess = tf.compat.v1.Session()  # Create a session.

tensor1 = tf.random.uniform((4, 4), 0, 1)

# ======== Variables ===========
variable1 = tf.Variable(tensor1)

# All variables must be initialized
initializer = tf.compat.v1.global_variables_initializer()

sess.run(initializer)
print(sess.run(variable1))


# ======== Placeholders ===========

# All placeholders must assign the type of the data.
# the second parameter of a place holder is the shape.
# the shape can be whatever we want but it is best to use None as the
# first value because it get the number of samples in the data which
# we are feeding in with batch and we don`t know before hand.
placeholder = tf.compat.v1.placeholder(tf.float32, (None, 5))

