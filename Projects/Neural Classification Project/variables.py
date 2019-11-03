class Variables:
    value = None
    output_nodes = []

    def __init__(self, value=None):
        self.value = value
        self.output_nodes = []

    def get_variable_value(self):
        return self.value

    def set_variable_value(self, val):
        self.value = val

    def get_output_nodes(self):
        return self.output_nodes

    def set_output_nodes(self, ons):
        self.output_nodes = ons