class Placeholder:
    onodes = []

    def __init__(self, defgraph):
        self.onodes = []
        defgraph.placeholders.append(self)

    def get_output_nodes(self):
        return self.onodes

    def set_output_nodes(self, ons):
        self.onodes = ons