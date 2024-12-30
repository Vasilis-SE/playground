from operation import Operation


class Addition(Operation):
    input_nodes = None

    def __init__(self, x, y, graph=None):
        super().__init__([x, y], graph)

    def compute(self, x, y):
        self.input_nodes = [x, y]
        return x + y