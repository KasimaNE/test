<!DOCTYPE html>
<html>

<head>
<title>Анонс</title>
</head>

<body>
<?php


$err = 3;//фат err
$w = 3;// warning
$k = 0;// kommit


for ($i = 0; $i < $err; $i++ ){ //создаём бесконечный цикл

//if($w % 2 === 0){
//	break;
//}

$w = $w - 1;//исправлено 1 ворнинг
$w = $w + 2;//появилось 2 новых 
$k = $k + 1;//за 1 коммит

}

for ($i = 0; true; $i++ ){ //создаём бесконечный цикл

if($w <= 0){// если Петины варнинги исправлены то брейкаемся из цикла
	break;
}

$w = $w - 2;//петя исправляет 2 ворнинга
$k = $k + 1;//за 1 коммит
$err = $err + 1;// но с фаталочкой

}
echo $k.' kommit<br/>';
echo $err.' ashipka<br/>';
echo $w.' warning<br/>';
echo '------------------------<br/>';






for($e = 1; true; $e++){
if($err <= 0){// если Петины варнинги исправлены то брейкаемся из цикла
break;
}

if($err % 2 === 0){	
	$err = $err - 2;
	$k = $k + 1;	
	}
}



echo $k.' kommit<br/>';
echo $err.' ashipka<br/>';
echo $w.' warning<br/>';



?>



</body>

</html>