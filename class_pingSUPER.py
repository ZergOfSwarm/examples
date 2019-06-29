import os
import urllib.request

class Mega_ping():

    def __init__(self, hostname): # Создаем конструктор для будущих объектов.
        self.hostname = hostname

    def ping(self): # Создаем метод который будет пинговать объекты
        for iplist in self.hostname:
            response = os.system("ping -c 1 " + iplist[0]) # где цифра "3" количество попыток соединения!
            if response == 0:
                link_1="http://127.0.0.1/objects/?op=set&object=A_"+ iplist[1] +"&p=value&v=1"
                f=urllib.request.urlopen(link_1)
                #print (iplist[0] + 'на связи!')
            else:
                link_2="http://127.0.0.1/objects/?op=set&object=A_"+ iplist[1] + "&p=value&v=0"
                f=urllib.request.urlopen(link_2)
                #print (iplist[0] + 'Нет связи')

A = [
  ['192.168.18.100', '100'],
  ['192.168.18.110', '110'],
  ['192.168.18.12', '12']
]
arduino = Mega_ping(A)
arduino.ping()
