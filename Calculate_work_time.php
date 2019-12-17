//https://www.geeksforgeeks.org/how-to-calculate-the-difference-between-two-dates-in-php/	
// Действующий метод "setRelayState2"

$objects=getObjectsByClass("MegaLight2");
foreach($objects as $obj) {
 if(gg($obj['TITLE'].".ID") == $params["id"])
 {
    sg($obj['TITLE'].".status", $params["on"]);
    sg($obj['TITLE'].".value", $params["v"]);

$now_date = date("d-m-Y H:i:s");

    if(gg($obj['TITLE'].".status") == '1')
    {
    sg($obj['TITLE'].".time_ON", $now_date);
    sg($obj['TITLE'].".on_off_auto", 'Вкл.');
    #runScript('Economy_mode_for_past_time');
    #runScript('Desable_EconomeMode');
    say('Свет включили  '.gg($obj['TITLE'].".info").' с настенного выключателя!',1);
    }
    else
    {
    sg($obj['TITLE'].".time_OFF", $now_date);
    sg($obj['TITLE'].".on_off_auto", 'Откл.');
    say('Свет отключили  '.gg($obj['TITLE'].".info").' с настенного выключателя!',1);
    
$time_ON=gg($obj['TITLE'].".time_ON");        // Время предыдущего включения света
$time_OFF=gg($obj['TITLE'].".time_OFF");     // Время предыдущего отключения света
$total_unix_time =gg($obj['TITLE'].".total_unix_time");  // Общее время работы лампы
$A = strtotime($time_OFF) - strtotime($time_ON); // Расчитываем предыдущее количество секунд работы лампы
sg($obj['TITLE'].".previous_unix_time",$A); // Записываем предыдущее время работы в свойство объекта
$B = $total_unix_time  + $A; // Расчитываем общее количество секунд работы лампы
sg($obj['TITLE'].".total_unix_time",$B); // Устанавливаем общее время работы
     
    #callMethod($obj['TITLE']. ".Test_time_metod");

$diff = $B;
$years = floor($diff / (365*60*60*24)); 
if ($years > 0) 
  $years = $years."-год(а/лет/)";
else 
  $years = FALSE;
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
if ($months > 0) 
  $months = $months."-месяц(а/ев)";
else 
  $months = FALSE;
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24)); 
if ($days > 0) 
  $days = $days."-день(я/ей)";
else 
  $days = FALSE;
$hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));
if ($hours > 0) 
  $hours = $hours."-час(а/ов)";
else 
  $hours = FALSE;
$minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60); 
if ($minutes > 0) 
  $minutes = $minutes."-минут(а/ы)";
else 
  $minutes = FALSE;
$seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60));
if ($seconds > 0) 
  $seconds = $seconds."-секунд";
else 
  $seconds = FALSE;
setGlobal($obj['TITLE'].".total_time",("$years$months$days$hours$minutes$seconds"));
    }
   break;
 }
}
