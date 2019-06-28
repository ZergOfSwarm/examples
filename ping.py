import os
import subprocess
hostname = "192.168.18.12" # IP серврера.
response = os.system("ping -c 3 " + hostname) # где цифра "3" количество попыток соединения!
run_ovpn = subprocess.call(["sudo","openvpn","--cd /home/denis/.ovpn/Rasberry --config Raspberry_v2_D.conf"]) # https://stackoverflow.com/questions/2018606/using-python-expect-to-run-openvpn

if response == 0:
    print ('Сервер на связи, запускаю vpn!')
    run_ovpn
else:
    print ('Нет связи с сервером!')
