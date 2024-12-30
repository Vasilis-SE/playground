import sys
sys.path.append("../")
from monorail import Monorail

monorail = Monorail(5, ("Black", "Silver"), "USA", "New York", 7, 1, 4, 2)

def test_SetWagonsNumber():
    assert monorail.SetWagonsNumber(2) == True
    assert monorail.SetWagonsNumber("This is a value") == False