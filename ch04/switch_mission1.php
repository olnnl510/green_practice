<?php
    //범위 지정이 안된다는 가정하에 switch 미션
        $mon = rand(1, 15);
        print "{$mon}월은 ";
    
        switch($mon)
        {
            case 3: case 4: case 5:
                print "봄";
                break;
    
            case 6: case 7: case 8:
                print "여름";
                break;
    
            case 9: case 10: case 11:
                print "가을";
                break;
    
            case 12: case 1: case 2:
                print "겨울";
                break;
    
            default:
                print "계절없음";
                break;
        }
?>