
class Operation:
    def __init__(self, inodes=[]):
        global _default_graph
        self.inodes = inodes
        self.onodes = []

        for node in inodes:
            node.onode.append(self)

        _default_graph.operations(self)

    def compute(self):
        pass