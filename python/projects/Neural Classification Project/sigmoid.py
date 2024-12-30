import numpy as np
from operation import Operation


class Sigmoid(Operation):

    def __init__(self, z, graph=None):
        super().__init__([z], graph)

    def compute(self, z):
        return 1 / (1 + np.exp(-z))