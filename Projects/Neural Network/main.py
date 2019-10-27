from Graph import Graph
from Session import Session
from Variables import Variables
from Placeholder import Placeholder
from Multiplication import Multiplication
from Addition import Addition

_default_graph = None

g = Graph()
_default_graph = g.set_as_default()


# Example : z = ax + b
a = Variables(10, _default_graph)
b = Variables(1, _default_graph)
x = Placeholder(_default_graph)

y = Multiplication(a, x, _default_graph)
z = Addition(y, b, _default_graph)

sess = Session()
result = sess.run(z, {x:12})
print(result)