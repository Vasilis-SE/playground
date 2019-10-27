class Variables():
    def __init__(self, initValue=None):
        self.value = initValue
        self.onodes = []
        
        _default_graph.variables.append(self)