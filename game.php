<?php
echo "Welcome to my game/n";
while (true) {
echo "===== game tebak angka =====";
echo "tebak sebuah angka antera 1 dan 9!/n";
$computer = rand(1,9);
echo "masukan tebakanmu: ";
$player = trim(fgets(STDIN));
if($player == $computer){
    echo "menang. angka komputer adalah $computer. \n";
    exit;
}else{
    echo "kalah. angka komputer adalah $computer. \n";
}
}
