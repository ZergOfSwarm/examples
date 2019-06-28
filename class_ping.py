import os
import urllib.request

class Mega_ping():
    species = "arduino" # вид класса

    def __init__(self, value, hostname): # Атрибут экземпляра
       self.value = value
       self.hostname = hostname

    def ping(): # Создаем метод который будет пинговать объекты
        response = os.system("ping -c 1 " + self.hostname) # где цифра "3" количество     попыток соединения!
        if response == 0:
            link_1="http://127.0.0.1/objects/?op=set&object=A_110&p=value&v=" + str(1)
            f=urllib.request.urlopen(link_1)
            print ('"Mega-110" на связи!')
        else:
            link_2="http://127.0.0.1/objects/?op=set&object=A_110&p=value&v=" + str(0)
            f=urllib.request.urlopen(link_2)
            print ('Нет связи с "Mega-110"!')

arduino_100 = Mega_100("value", 192.168.18.100) # Создаем 1-й класс
arduino_110 = Mega_110("value", 192.168.18.110) # Создаем 1-й класс

arduino_100.ping()
arduino_110.ping()
