import tensorflow as tf
tf.compat.v1.disable_eager_execution()
sess = tf.compat.v1.Session() # Create a session.

# Messages
hello = tf.constant('Hello, TensorFlow!')
message = tf.constant('Iam here !')
print(hello)
print(hello + ' ' + message)

print("==================================================")

# Numbers
a = tf.constant(50)
b = tf.constant(20)

print(a + b) # Tensor("add_2:0", shape=(), dtype=int32)
print(a + b) # Tensor("add_3:0", shape=(), dtype=int32)
print(sess.run(a+b))

print("==================================================")

const = tf.constant(10)
fill_mat = tf.fill((4,4), 10) # A 4x4 array with all cells the value of 10
zeros = tf.zeros((4,4)) # A 4x4 array with all cells the value of 0
ones = tf.ones((4,4))  # A 4x4 array with all cells the value of 1

# A 4x4 array with all cells assign random numbers
myrandnum = tf.random.normal((4,4), 0, 1.0)

# A 4x4 array with all cells assign random numbers between max and min values
myranduniform = tf.random.uniform((4,4), 0, 1)

options = [const, fill_mat, zeros, ones, myrandnum, myranduniform]

for op in options:
    print(sess.run(op))
    print('\n')

print("==================================================")
# Matrix multiplication
a = tf.constant([ [1,2],
                  [3,4] ])
b = tf.constant([[10], [100]])

result = tf.matmul(a, b)
print(sess.run(result)) 