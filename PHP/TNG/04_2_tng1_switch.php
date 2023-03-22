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

    if ($score < 0 && $score >100)
    {   echo '잘못된 값을 입력했습니다.';
        else
        {
            switch ($score) {
                case ($score===100):
                    echo '당신의 성적은 A+입니다.';
                    break;
                case ($score>=90):
                    echo '당신의 성적은 A입니다.';
                    break;
                case ($score>=80):
                    echo '당신의 성적은 B입니다.';
                    break;
                case ($score>=70):
                    echo '당신의 성적은 C입니다.';
                    break;
                case ($score>=60):
                    echo '당신의 성적은 D입니다.';
                    break;   
                default:
                    echo '당신의 성적은 F입니다.';
                    break;
            }

        }
    }


    $score = 77;

    switch ($score) {
        case ($score===100):
            echo '당신의 성적은 A+입니다.';
            break;
        case ($score>=90):
            echo '당신의 성적은 A입니다.';
            break;
        case ($score>=80):
            echo '당신의 성적은 B입니다.';
            break;
        case ($score>=70):
            echo '당신의 성적은 C입니다.';
            break;
        case ($score>=60):
            echo '당신의 성적은 D입니다.';
            break;   
        case ($score<0 && $score ):
            echo '당신의 성적은 D입니다.';
            break;   
        default:
            echo '당신의 성적은 F입니다.';
            break;
    }
?>
