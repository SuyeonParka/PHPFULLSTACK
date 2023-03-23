<?php
    // $score = 77;

    // switch ($score) {
    //     case ($score===100):
    //         echo '당신의 성적은 A+입니다.';
    //         break;
    //     case ($score>=90):
    //         echo '당신의 성적은 A입니다.';
    //         break;
    //     case ($score>=80):
    //         echo '당신의 성적은 B입니다.';
    //         break;
    //     case ($score>=70):
    //         echo '당신의 성적은 C입니다.';
    //         break;
    //     case ($score>=60):
    //         echo '당신의 성적은 D입니다.';
    //         break;   
    //     default:
    //         echo '당신의 성적은 F입니다.';
    //         break;
    // }


    $score = 77;
    $grade = "";

    if ($score < 0 || $score >100)
    {   
        echo '잘못된 값을 입력했습니다.';
    }
    else
        {
            switch ($score) {
                case 100:
                    echo '당신의 성적은 A+입니다.';
                    break;
                case 90:
                    echo '당신의 성적은 A입니다.';
                    break;
                case 80:
                    echo '당신의 성적은 B입니다.';
                    break;
                case 70:
                    echo '당신의 성적은 C입니다.';
                    break;
                case 60:
                    echo '당신의 성적은 D입니다.';
                    break;   
                default:
                    echo '당신의 성적은 F입니다.';
                    break;
            }
            echo '당신의 성적은 '.$score.'점 입니다.<'.$grade.'>';
        }
    

    // $score = 100;
    // $grade ="";

    // switch ($score) {
        
    //     case 100:
    //         $grade = 'A+';
    //         echo '당신의 성적은'.$score.'점 입니다.<'.$grade.'>';
    //         break;
    //     case ($score>=90):
    //         $grade = 'A';
    //         echo '당신의 성적은'.$score.'점 입니다.<'.$grade.'>';
    //         break;
    //     case ($score>=80):
    //         $grade = 'B';
    //         echo '당신의 성적은'.$score.'점 입니다.<'.$grade.'>';
    //         break;
    //     case ($score>=70):
    //         $grade = 'C';
    //         echo '당신의 성적은'.$score.'점 입니다.<'.$grade.'>';
    //         break;
    //     case ($score>=60):
    //         $grade = 'D';
    //         echo '당신의 성적은'.$score.'점 입니다.<'.$grade.'>';
    //         break;   
    //     case ($score<60):
    //         $grade = 'F';
    //         echo '당신의 성적은'.$score.'점 입니다.<'.$grade.'>';
    //         break;
    //     default:
    //         echo '잘못된 값을 입력했습니다.';
    //         break;
    //     default:
    //         echo '당신의 성적은'.$score.'점 입니다.<'.$grade.'>';
    //         break;
    //     if ($score <0 || $score >100)
    //     {
    //         echo '잘못된 값을 입력했습니다.';
    //     }
    //         break;
    // }

    // $score = -101;
    // $grade ="";

    // switch ($score) 
    // {
    //     case ($score <0 || $score >100):
    //         echo '값을 잘못입력했습니다.';
    //     break;
    //     default:
    //     case ($score===100):
    //         $grade = 'A+';
    //         echo '당신의 성적은'.$score.'점 입니다.<'.$grade.'>';
    //         break;
    //     case ($score>=90):
    //         $grade = 'A';
    //         echo '당신의 성적은'.$score.'점 입니다.<'.$grade.'>';
    //         break;
    //     case ($score>=80):
    //         $grade = 'B';
    //         echo '당신의 성적은'.$score.'점 입니다.<'.$grade.'>';
    //         break;
    //     case ($score>=70):
    //         $grade = 'C';
    //         echo '당신의 성적은'.$score.'점 입니다.<'.$grade.'>';
    //         break;
    //     case ($score>=60):
    //         $grade = 'D';
    //         echo '당신의 성적은'.$score.'점 입니다.<'.$grade.'>';
    //         break;   
    //     case ($score<60):
    //         $grade = 'F';
    //         echo '당신의 성적은'.$score.'점 입니다.<'.$grade.'>';
    //         break;
    // }
    
?>
