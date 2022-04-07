<?php
/*
    
    90점 이상 A (3점 이하, '-', 7점 이상 or 100점 '+')
    => 93: A-, 95:A, 98:A+

    80점 이상 B (3점 이하, '-', 7점 이상 '+')
    70점 이상 C (3점 이하, '-', 7점 이상 '+')
    60점 이상 D (3점 이하, '-', 7점 이상 '+')
    60점 미만 F
    0~100 점수가 아니면 "잘못된 값" 출력
    
    
*/

    $score = rand(0, 120);
    print "점수 : $score <br>";

    switch ($score)
    {
        case (100 >= $score && $score >= 97):
            print "A+";
            break;
            
        case (97> $score && $score >= 93):
            print "A-";
            break;

        case (93> $score && $score >= 90):
            print "A";
            break;

        case (90 > $score && $score >= 87):
            print "B+";
            break;

        case (87 > $score && $score >= 83):
            print "B-";
            break;

        case (83 > $score && $score >= 80):
            print "B";
            break;

        case (80 > $score && $score >= 87):
            print "C+";
            break;

        case (87 > $score && $score >= 83):
            print "C-";
            break;

        case (83 > $score && $score >= 70):
            print "C";
            break;

        case (70 > $score && $score >= 67):
            print "D+";
            break;

        case (67 > $score && $score >= 63):
            print "D-";
            break;

        case (63 > $score && $score >= 60):
            print "D";
            break;

        case (60 > $score):
            print "F";
            break;

        default:
        print "잘못된 값";
        break;

    }
?>