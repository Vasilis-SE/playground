import Operation

class Addition(Operation):

    def __init__(self,x,y):
        super.__init__([x,y])

    def compute(self, x, y):
        self.inputs = [x,y]
        return x+y