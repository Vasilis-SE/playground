handler = open("demo.txt", 'r')
content = handler.read()
handler.close()

print("------------------------")
print("Content of text file : ")
print("\t", content)

handler = open("demo.txt", 'w')
userinput = input("Enter your text: ")
handler.write(userinput)
handler.close()

handler = open("demo.txt", 'r')
content = handler.read()
handler.close()

print("------------------------")
print("Content of text file : ")
print("\t", content)

handler = open("demo.txt", 'a')
userinput = input("Enter your text to append: ")
handler.write("\n"+userinput)
handler.close()

handler = open("demo.txt", 'r')
content = handler.read()
handler.close()

print("------------------------")
print("Content of text file : ")
print("\t", content)