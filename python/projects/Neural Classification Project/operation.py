class Operation:
    output_nodes = None
    input_nodes = None

    def __init__(self, inodes=[], graph=None):
        self.input_nodes = inodes
        self.output_nodes = []

        for node in inodes:
            node.output_nodes.append(self)

        graph.operations.append(self)

    def compute(self):
        pass