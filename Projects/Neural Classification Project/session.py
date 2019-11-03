import numpy as np
from operation import Operation
from placeholder import Placeholder
from variables import Variables


class Session:
    def traverse_postorder(self, operation):
        nodes_postorder = []

        def recurse(node):
            if isinstance(node, Operation):
                for input_node in node.input_nodes:
                    recurse(input_node)
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