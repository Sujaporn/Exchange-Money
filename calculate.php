<?php
if (isset($_POST['USD'])){
    $sum = $_POST['USD'];
    $sum = $sum/35;
    echo $sum;
}elseif (isset($_POST['EUR'])) {
	$sum = $_POST['EUR'];
    $sum = $sum/37;
    echo $sum;
}elseif (isset($_POST['JPY'])) {
	$sum = $_POST['JPY'];
    $sum = $sum*3.22;
    echo $sum;
}
?>