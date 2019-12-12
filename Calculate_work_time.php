//https://www.geeksforgeeks.org/how-to-calculate-the-difference-between-two-dates-in-php/	

	$start_date = "11.12.2000 11:30:05"; // Время включения 
	#echo "Время включения = " . $start_date. "<br />\n";
	#$now_date = date("d-m-Y H:i:s"); // Текущая дата
	$stop_date = "12.12.2019 11:30:00"; // Время выключения
	#echo "Время отключения = " . $stop_date. "<br />\n";
	$start_date_unix = strtotime($start_date);
	#echo "Время включения в секундах = " . $start_date_unix. "<br />\n";
	$stop_date_unix = strtotime($stop_date);
	#echo "Время отключения в секундах = " . $stop_date_unix. "<br />\n";
	echo "<br />\n";


$result_1 = ($stop_date_unix-$start_date_unix); // Общее количество секунд работы
#echo "Общее количество секунд работы = " . $result_1. "<br />\n";

	// Declare and define two dates 
#$date1 = strtotime("1978-04-25 22:45:00");  
#$date2 = strtotime("2019-12-11 10:44:01");  
  
// Formulate the Difference between two dates 
#$diff = abs($date2 - $date1);  
$diff = $result_1;
  
// To get the year divide the resultant date into 
// total seconds in a year (365*60*60*24) 
$years = floor($diff / (365*60*60*24));  
  
  
// To get the month, subtract it with years and 
// divide the resultant date into 
// total seconds in a month (30*60*60*24) 
$months = floor(($diff - $years * 365*60*60*24) 
                               / (30*60*60*24));  
  
  
// To get the day, subtract it with years and  
// months and divide the resultant date into 
// total seconds in a days (60*60*24) 
$days = floor(($diff - $years * 365*60*60*24 -  
             $months*30*60*60*24)/ (60*60*24)); 
  
  
// To get the hour, subtract it with years,  
// months & seconds and divide the resultant 
// date into total seconds in a hours (60*60) 
$hours = floor(($diff - $years * 365*60*60*24  
       - $months*30*60*60*24 - $days*60*60*24) 
                                   / (60*60));  
  
  
// To get the minutes, subtract it with years, 
// months, seconds and hours and divide the  
// resultant date into total seconds i.e. 60 
$minutes = floor(($diff - $years * 365*60*60*24  
         - $months*30*60*60*24 - $days*60*60*24  
                          - $hours*60*60)/ 60);  
  
  
// To get the minutes, subtract it with years, 
// months, seconds, hours and minutes  
$seconds = floor(($diff - $years * 365*60*60*24  
         - $months*30*60*60*24 - $days*60*60*24 
                - $hours*60*60 - $minutes*60));  
  
// Print the result 
#printf("%d years, %d months, %d days, %d hours, "
#     . "%d minutes, %d seconds", $years, $months, 
#             $days, $hours, $minutes, $seconds); 
#setGlobal('2E_Hall_r51.total_time ',("лет/год(а) = $years. месяц(ев) = $months. день(дней) = $days. час(ов) = $hours. минут(ы) = $minutes. секунд(а) = $seconds"));
setGlobal('2E_Hall_r51.total_time ',("$years.-лет/год(а) $months.-месяц(ев) $days.-день(дня/дней) $hours.-час(ов) $minutes.-минут(ы) $seconds-секунд(а)"));
