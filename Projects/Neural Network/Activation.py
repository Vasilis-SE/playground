import numpy as np
import matplotlib.pyplot as plt


class Activation:

    def sigmoid_function(self, z):
        return 1 / (1 + np.exp(-z))