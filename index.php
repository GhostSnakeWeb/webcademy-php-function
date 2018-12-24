<?php
	echo "<h2>Функция приветствия пользователя:</h2>";
	
	function greeting($name, $dayOfWeek)
	{
		switch ($dayOfWeek) {
			case 1:
			case 2:
			case 3:
			case 4:
			case 5:
				echo "Привет, $name! Хорошего и продуктивного рабочего дня!";
				break;
			case 6:
			case 7:
				echo "Привет, $name! Желаю вам хорошо отдохнуть в этот день!";
				break;
			default:
				echo "По-моему на вашей планете время идет не так, как у нас¯\_(ツ)_/¯.";
				break;
		}
	}

	greeting("Владислав", 8);
?>