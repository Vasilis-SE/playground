class Placeholder:
    output_nodes = []

    def __init__(self):
        self.output_nodes = []

    def get_output_nodes(self):
        return self.output_nodes

    def set_output_nodes(self, ons):
        self.output_nodes = ons