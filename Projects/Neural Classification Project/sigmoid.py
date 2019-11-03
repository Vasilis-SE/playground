import numpy as np
from operation import Operation


class Sigmoid(Operation):

    def __init__(self, z):
        super().__init__([z])

    def compute(self, z):
        return 1 / (1 + np.exp(-z))
