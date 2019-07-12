#!/bin/bash
#
# Скрипт в бесконечном цикле пингует удалённый хост в инете с интервалом 5 сек
# при первой удачной или неудачной попытке пинга пишется соответствующее сообщение в лог и на экран
# следующая запись в лог делается только при изменении состояния связи

# Узел опроса
ip="192.168.18.110"
# Указываем кол-во попыток соединения.
count=1
# инициализация переменной результата, по умолчанию считается, что связь уже есть
status=connected
# Файл логов
#logfile=/ping.log
logfile=/home/denis/.scripts/ping.log

echo `date +%Y.%m.%d__%H:%M:%S`' Cкрипт запущен,пингуем ArduinoMega-110!' >> ${logfile}
# бесконечный цикл
while [ true ]; do
    # пинг с последующей проверкой на ошибки
    result=$(ping -c ${count} ${ip} 2<&1| grep -icE 'unknown|expired|unreachable|time out')

    # если ни один не прошел, то
    if [ "$status" = connected -a "$result" != 0 ]; then
	# Меняем статус, чтоб сообщение не повторялось до смены переменной result
	status=disconnected
	# Записываем в лог результат
	echo `date +%Y.%m.%d__%H:%M:%S`' Internet соединение с ArduinoMega отсутствует' >> ${logfile}
	# Вывод результата на экран
	echo `date +%Y.%m.%d__%H:%M:%S`' Internet соединение с ArduinoMega отсутствует'
    fi
    # если все пинги прошли, то
    if [ "$status" = disconnected -a "$result" -eq 0 ]; then
	# Меняем статус, чтоб сообщение не повторялось до смены переменной result
	status=connected
	# Пишем в лог время установки соединения
	echo `date +%Y.%m.%d__%H:%M:%S`' ArduinoMega снова в сети!' >> ${logfile}
	# Вывод результата на экран
	echo `date +%Y.%m.%d__%H:%M:%S`' ArduinoMega снова в сети!'
    fi
    # 5 сек задержка
    sleep 5
done