<?php
echo '<pre>';
print_r('Hello World!' . PHP_EOL . PHP_EOL);

$array = ['php', 'python', 'go'];

foreach ($array as $elem) {
    print_r($elem . PHP_EOL);
}
