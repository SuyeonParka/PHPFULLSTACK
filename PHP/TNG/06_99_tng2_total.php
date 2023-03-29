<?php

//별찍기 함수
function star($moon)
{
    for ($i=0; $i < $moon; $i++) { 
        echo "*";
    }
    echo "\n";
}

// echo star(3);
echo "\n";

// 직사각형
// function fnc_star($coffee)
// {
//     for ($i=0; $i < $coffee; $i++) { 
//         star($coffee);
//     }
//     echo "\n";
// }
// echo fnc_star(5);


// function fnc_tng($hard)
// {
//     for ($i=1; $i <= $hard; $i++) { 
//         star($i);
//     }
// }
// echo fnc_tng(5);

function fnc_tng2($easy)
{
    for ($i=10; $i >= 1 ; $i--) { 
        star($i);
    }
}
echo fnc_tng2(5);
?>