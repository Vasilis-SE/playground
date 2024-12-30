from Operation import Operation


class Multiplication(Operation):
    inputs = None

    def __init__(self, x, y, defgraph=None):
        inputNode = [x, y]
        super().__init__(inputNode, defgraph)

    def compute(self, x, y):
        self.inputs = [x, y]
        return x * y
