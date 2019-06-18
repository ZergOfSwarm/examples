import re

r = re.compile("[а-яА-Я]+")
words = ['apple', 'cat', 'яблоко', 'кот', 'building', 'машина', 'status',]
russian = [w for w in filter(r.match, words)]
print (russian)
