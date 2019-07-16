<style type="text/css">
body {
    margin: 0 25% 0 25%;
}
</style>
<?php
echo "<pre> <h2>Задание 1:</h2>";
do {
    $b = random_int(1, 100);
    $a = rand(10, 100);
    echo 'a = '."$a </br>";
    echo 'b = ',"$b </br>";
} while ($b > $a);
echo 'summ a + b = '.($a+$b);

echo '<pre> <h2>Задание 2:</h2>';
$integer_array = [];
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "$i <br />";
        $integer_array[] = $i;
    };
};
print_r($integer_array);
?>
