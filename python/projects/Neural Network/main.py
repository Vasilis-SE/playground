from Graph import Graph
from Session import Session
from Variables import Variables
from Placeholder import Placeholder
from Multiplication import Multiplication
from Addition import Addition
from MatrixMultiplication import MatrixMultiplication
from Activation import Activation
import numpy as np
import matplotlib.pyplot as plt


# Example : z = ax + b
g = Graph()
dGraph = g.set_as_default()

a = Variables(10, dGraph)
b = Variables(1, dGraph)
x = Placeholder(dGraph)

y = Multiplication(a, x, dGraph)
z = Addition(y, b, dGraph)

sess = Session()
result = sess.run(z, {x:12})

print("z = ax + b = 10*12 + 1 = ", result)


# Matrix multiplication process
g2 = Graph()
dGraph2 = g2.set_as_default()

a = Variables([[10,23], [23,1], [20,56]], dGraph2)
b = Variables([1,2], dGraph2)
x = Placeholder(dGraph2)

y = MatrixMultiplication(a, x, dGraph2)
z = Addition(y, b, dGraph2)

result = sess.run(z, {x:10})
print(result)

# Classification
activationObj = Activation()
samplesZ = np.linspace(-10, 10, 100)
samplesA = activationObj.sigmoid_function(samplesZ)
plt.plot(samplesZ, samplesA)
plt.show()