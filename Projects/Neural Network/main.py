from Graph import Graph
from Variables import Variables
from Placeholder import Placeholder

_default_graph = None

g = Graph()
_default_graph = g.set_as_default()


# Example : z = ax + b
a = Variables(10, _default_graph)
b = Variables(1, _default_graph)

x = Placeholder(_default_graph)

print(_default_graph.variables)
print(_default_graph.placeholders)