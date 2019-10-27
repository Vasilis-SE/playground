class Operation():
    def __init__(self, inodes=[]):
        self.inodes = inodes
        self.onodes = []

        for node in inodes:
            node.onode.append(self)

    def compute(self):
        pass