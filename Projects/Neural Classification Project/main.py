import matplotlib.pyplot as plt
import numpy as np
from sklearn.datasets import make_blobs
from sigmoid import Sigmoid
from graph import Graph
from placeholder import Placeholder
from variables import Variables
from addition import Addition
from matrix_multiplication import MatrixMultiplication

data = make_blobs(n_samples=50, n_features=2, centers=2, random_state=75)
features = data[0]
labels = data[1]

plt.scatter(features[:, 0], features[:, 1], c=labels, cmap='coolwarm')

# Manual Separation of Classes.
x = np.linspace(0, 11, 10)
y = -x + 5

plt.plot(x, y)
plt.show()

g = Graph()
graphObject = g.set_as_default()

# Initialize function wx - b | [1,1] * x - 5
graphObject.placeholders.append(Placeholder()) # placeholder x
graphObject.variables.append(Variables([1, 1])) # variable w
graphObject.variables.append(Variables(-5)) # variable b

z =