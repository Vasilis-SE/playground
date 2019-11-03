class Graph:
    operations = []
    placeholders = []
    variables = []

    def __init__(self):
        self.operations = []
        self.placeholders = []
        self.variables = []

    def set_as_default(self):
        return self
