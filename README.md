# examples
Выбор только русских слов из списка в котором не только русские слова https://ru.stackoverflow.com/questions/477161/%D0%9A%D0%B0%D0%BA-%D0%B2%D1%8B%D0%B1%D1%80%D0%B0%D1%82%D1%8C-%D1%82%D0%BE%D0%BB%D1%8C%D0%BA%D0%BE-%D1%80%D1%83%D1%81%D1%81%D0%BA%D0%B8%D0%B5-%D1%81%D0%BB%D0%BE%D0%B2%D0%B0-%D0%B8%D0%B7-%D1%81%D0%BF%D0%B8%D1%81%D0%BA%D0%B0-%D0%B2-python

rus_1.py лучше чем rus_2.py т.к. быстрее "если первая буква русская - все слово русское"!

# ping.py 
# https://stackoverflow.com/questions/2018606/using-python-expect-to-run-openvpn
скрипт проверяет наличие интернета и если есть то, запускает OpenVPN 
а) Изменить в /etc/sudoers, чтобы команда openvpn могла выполняться без указания пароля.
yourusername ALL=(all) NOPASSWD: /path/to/openvpn
б) И в python сделайте что-то вроде: 
import subprocess
exitcode = subprocess.call(["sudo","openvpn","--cd /etc/openvpn --config openvpn.conf"])

ping2 
Cкрипт пингует Arduino mega-110 и если он на в сети то, ставит значение свойства объекта цифру "1" (A_110.value = 1)
если Arduino mega-110 не в сети то, ставит значение свойства объекта цифру "0" (A_110.value = 0) 
Для запуска скрипта Python из PHP пишем скрипт для PHP с кодом:

$test = exec('/usr/bin/python3  /home/pi/scripts/ping.py');
echo $test;

class_ping.py
Мой первый ООП код! 28.06.19
