<?php
//do-while문
// do {
//     반복 할 처리
// }
// while(조건);


// $i = 0;
// do {
//     echo $i, " do while";
// }
// while ($i === 1);

// while ($i === 1)
// {
//     echo $i, "while";
// }

//for문
// for ($i=2; $i <= 9 ; $i++) 
// { 
//     echo $i, "단\n";
// };

//for문 구구단


// for ($i=2; $i <= 9; $i++)
// {   
//     echo $i."단입니다.\n";
//     for ($j=1; $j <= 9; $j++)
//     {
//         $result = $i."*".$j."=".$i*$j."\n";
//         echo $result;
//     }
// };

for ($i=2; $i <= 9 ; $i++) { 

    echo $i."단입니다.\n";

    for ($j=1; $j <= 9 ; $j++) 
    { 
        $result = $i."*".$j."=".$i*$j."\n";
        echo $result;
    };
}
?>
