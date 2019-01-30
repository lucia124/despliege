<?php
// funciones 
function suma($a,$b){
	return$a+$b;
	
}
function resta($a,$b){
	return$a-$b;
	
}function division($a,$b){
	return$a/$b;
	
}function multiplicacion($a,$b){
	return$a*$b;
	
}
function resto($a,$b){
	return$a%$b;
	
}
?>
<?php
$a=$_POST['nume'];
$b=$_REQUEST['numero'];
$c=$_REQUEST['operacion'];
if($c=="+"){
$resultado=suma($a,$b);
print"el resultado de la suma de a y b es ".$resultado."<br>";
}
else if($c=="-"){
print"el resultado de la resta de a".$a ."y b ".$b."es ".resta($a,$b)."<br>";
}
else if($c=="*"){
print"el resultado de la multiplicacion de a".$a ."y b ".$b."es ".multiplicacion($a,$b)."<br>";
	
}else if($c=="/"){
print"el resultado de la division de a".$a ."y b ".$b."es ".division($a,$b)."<br>";
}else if($c=="%"){
print"el resultado de la resto de a".$a ."y b ".$b."es ".resto($a,$b)."<br>";
}
?>