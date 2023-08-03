<?php
$a = 5;
$b = 7;
echo "a = $a et b = $b<br>";
$c = $a;
$a = $b;
$b = $c;
echo "a = $a et b = $b<br>";

for($i = 0;$i<10;$i++){
    echo 'Hello world : '.$i.'<br>';
}
echo '<br>';
for($i = 0;$i<10;$i++){
    if($i%2 != 0){
        echo 'Hello world : '.$i.'<br>';
    }
}

?>
