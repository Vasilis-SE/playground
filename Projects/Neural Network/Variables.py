class Variables:
    value = None
    onodes = []

    def __init__(self, initValue=None, defgraph=None):
        self.value = initValue
        self.onodes = []
        defgraph.variables.append(self)

    def get_variable_value(self):
        return self.value

    def set_variable_value(self, val):
        self.value = val

    def get_output_nodes(self):
        return self.onodes

    def set_output_nodes(self, ons):
        self.onodes = ons