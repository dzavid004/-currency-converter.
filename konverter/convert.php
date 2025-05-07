<?php
	$backs = [
		'USD' => 1,
		'RUB' => 82.27,
		'TG' => 514.89,
		'EU' => 0.88,
	];
	

	// Функция конвертации валют
	function konverter($anyaIsTheBest, $value1, $value2){
		global $backs;
		
		$result = '';
		
		if($anyaIsTheBest and $value1 and $value2){
			$result = ($anyaIsTheBest / $backs[$value1]) * $backs[$value2];

		}else{
			$result = '<span class="text-warning">Ошибка: вы не указали данные</span>';
			return $result; 
		}

		return '<b text-light>Ваш результат:</b> <span class="text-info"> '.number_format(round($result, 3), 0, '', '.').' '.$value2.'</span>';

	
	}
	
	include 'form.php';
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){	
		// Принимаем данные из POST
		$anyaIsTheBest = $_POST['summa']; 
		$value1 = $_POST['value1']; 
		$value2 = $_POST['value2']; 

	}
	
	
	
?>