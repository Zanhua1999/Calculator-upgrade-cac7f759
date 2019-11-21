<?php
echo "Welke operatie wil je uitvoeren? (+, -, %)";
echo "\n";
$operator = readline();
$num1 = AskNumber('Wat is het eerste getal?'); 
$num2 = AskNumber('Wat is het tweede getal?'); 

function AskNumber($question){
    echo($question);
    $anwser = readline();
    if(!is_numeric($anwser)){
        exit('Ongeldig getal');
        return;
    }
    return $anwser;
}
if($operator == '+'){
$result = $num1 + $num2;
}else if($operator =='-'){
    $result = $num1 - $num2;
    }else if($operator == '%'){
$result = $num1 % $num2;
    }
    echo "Uw resultaat is:" .  $result;
?>