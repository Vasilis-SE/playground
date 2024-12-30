print("---------------------------")
print("A set is a data type that can only have unique values...")
print("---------------------------")

set = {1,4,5,7,2,8,"test", (1,3,4)}
print("Set values: ", set)
print("Set length: ", len(set))
print("---------------------------")
set.add(10)
print("Added Set values: ", set)
print("Added Set length: ", len(set))
print("---------------------------")
set.update({12,645,1234,6547})
print("Updated Set values: ", set)
print("Updated Set length: ", len(set))
print("---------------------------")
set.remove(1234)
set.remove(12)
set.remove((1,3,4))
print("Removed Set values: ", set)
print("Removed Set length: ", len(set))
print("---------------------------")
set.discard("7000")
print("Discarded Set values: ", set)
print("Discarded Set length: ", len(set))
print("Nothing changed cause discard doesnt trigger error if no value is found on set.")
print("---------------------------")

set.clear() # Clear all values of the set.

setA = {1,2,3,4,5}
setB = {4,5,6,7,8,9}
print("\n\n=====================================")
print("#### Set Mathematical Functions #####")
print("=====================================")

print("Set A: ", setA)
print("Set B: ", setB)
print("---------------------------")
print("Union: ", setA.union(setB))
print("Intersection: ", setA.intersection(setB))
print("Difference of A to B: ", setA.difference(setB))
print("Difference of B to A: ", setB.difference(setA))
print("Symmetric Difference: ", setA.symmetric_difference(setB))

del set # Permanantly remove the whole set.