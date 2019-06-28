 import os
 import urllib.request
 
 hostname = "192.168.18.110" # IP серврера.
 response = os.system("ping -c 1 " + hostname) # где цифра "3" количество попыток соединения!
 
 if response == 0:
     link_1="http://127.0.0.1/objects/?op=set&object=A_110&p=value&v=" + str(1)
     f=urllib.request.urlopen(link_1)
     print ('"Mega-110" на связи!')
 else:
     link_2="http://127.0.0.1/objects/?op=set&object=A_110&p=value&v=" + str(0)
     f=urllib.request.urlopen(link_2)
     print ('Нет связи с "Mega-110"!')
