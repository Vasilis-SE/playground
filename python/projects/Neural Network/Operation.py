class Operation:
    def __init__(self, inodes=[], defgraph=None):
        self.inodes = inodes
        self.onodes = []

        for node in inodes:
            node.onodes.append(self)

        defgraph.operations.append(self)

    def compute(self):
        pass