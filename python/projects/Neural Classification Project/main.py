import matplotlib.pyplot as plt
import numpy as np
from sklearn.datasets import make_blobs
from graph import Graph
from placeholder import Placeholder
from variables import Variables
from addition import Addition
from matrix_multiplication import MatrixMultiplication
from sigmoid import Sigmoid
from session import Session


data = make_blobs(n_samples=50, n_features=2, centers=2, random_state=75)
features = data[0]
labels = data[1]

plt.scatter(features[:, 0], features[:, 1], c=labels, cmap='coolwarm')

x = np.linspace(0, 11, 10)
y = -x + 5

plt.plot(x, y)


g = Graph()
graphObject = g.set_as_default()

# Initialize function wx - b | [1,1] * x - 5
x = Placeholder()
graphObject.placeholders.append(x) # append placeholder x
w = Variables([1, 1])
graphObject.variables.append(w) # append variable w
b = Variables(-5)
graphObject.variables.append(b) # append variable b

z = Addition(MatrixMultiplication(w, x, graphObject), b, graphObject)

# Apply activation function
a = Sigmoid(z, graphObject)

# Execute neural network
sess = Session()
print(sess.run(a, {x: [0, -10]}))
plt.show()
