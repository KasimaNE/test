<!DOCTYPE html>
<html>

<head>
<title>Анонс</title>
</head>

<body>
<?php
//код не работает должным образом, кол во коммитов при 3 и 3 равно 6

$err = 3;//фат err
$w = 3;// warning
$k = 0;// kommit


for ($i = 1; true; $i++ ){ //создаём бесконечный цикл

	if($w <= 0){// если Петины варнинги исправлены то брейкаемся из цикла
	break;
	}

	if($w % 2 === 0){//определяем чётное или нечётное число, если ворнингов чётное число то

	$w = $w - 2;//петя исправляет 2 ворнинга
	$k = $k + 1;//за 1 коммит
	$err = $err + 1;// но с фаталочкой

}else{
// если варнингов нечётное число то исправляем 1 варнинг(приводим к чётному) и накидывем 1 коммит и 2 ворнинга

	$w = $w - 1;//исправлено 1 ворнинг
	$w = $w + 2;//появилось 2 новых 
	$k = $k + 1;//за 1 коммит

	}

}

if($err % 2 === 0){//добавляет 1 фаталку пете так как код ниже не падает в беск цикл, не совсем понял логику исправления ошибок

}else{
$err = $err +1;
}



for($e = 1; true; $e++){//вываливается в бесконечный цикл
	if($err <= 0){
	break;
	}

if($err % 2 === 0){
	$err = $err - 2;
	$k = $k + 1;	
	}
}


echo $k.' kommit<br/>';
echo $err.' err<br/>';
echo $w.' warning<br/>';
echo '------------------------<br/>';

?>



</body>

</html>
