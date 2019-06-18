lst = ['apple', 'cat', 'яблоко', 'кот', 'building', 'машина', 'status',]

russian = [word for word in lst if 1039 < ord(word[0])]
print (russian)
