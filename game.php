<?php
echo "Welcome to my game/n";
echo "===== game tebak angka =====";
echo "tebak sebuah angka antera 1 dan 9!/n";
$computer = rand(1,9);
echo "masukan tebakanmu: ";
$player = trim(fgets(STDIN));
echo "$player";