import numpy as np

from Operation import Operation
from Placeholder import Placeholder
from Variables import Variables


class Session:

    def traverse_postorder(self, operation):
        nodes_postorder = []

        print(" ----------- ")
        print("Started : " + str(operation))

        def recurse(node):
            print("Loop Node : " + str(node))
            if isinstance(node, Operation):
                for inpnode in node.inodes:
                    print("==> " + str(vars(inpnode)))
                    recurse(inpnode)
            nodes_postorder.append(node)

        recurse(operation)
        return nodes_postorder

    def run(self, operation, feedDict={}):
        nodes_postorder = self.traverse_postorder(operation)

        for node in nodes_postorder:
            if type(node) == Placeholder:
                node.output = feedDict[node]
            elif type(node) == Variables:
                node.output = node.value
            else:
                node.inputs = [inode.output for inode in node.inodes]
                node.output = node.compute(*node.inputs)

            if type(node.output) == list:
                node.output = np.array(node.output)

        return operation.output