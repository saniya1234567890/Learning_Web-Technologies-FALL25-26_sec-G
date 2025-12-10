<?php
$length = 5;
$width = 3;
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "Area for the rectangle  = $area<br>";
echo "Perimeter = $perimeter";
?>


<?php
$amount = 1000;
$vat_rate = 15 ;
echo " calculated VAT =( $amount*vat_rate)/100";
?>


<?php
$num = 7;
if ($num % 2 == 0) {
    echo "Even";
} else {
    echo "Odd";
}
?>


<?php
$a = 10;
$b = 25;
$c = 15;
if ($a > $b && $a > $c) {
    echo $a." is largest";
} elseif ($b > $c) {
    echo $b." is largest";
} else {
    echo $c." is largest";
}
?>


<?php
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
?>

<?php
$arr = array(5, 10, 15, 20);
$search = 15;
$found = false;

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "Found";
} else {
    echo "Not Found";
}
?>


