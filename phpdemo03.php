<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP DEMO 3 </title>
    </head>
    <body>
        <?php 
            echo "-- 條件判斷式 --"."<br>";
            $x=20;
            $y=30;
            if($x > $y) {
                echo "x > y"."<br>";
            }else if($x == $y){
                echo "x = y"."<br>";
            }else{
                echo "x < y"."<br>";
            }
            $teaCode = 3;
            switch($teaCode){
                case 1: 
                    echo "red"."<br>";
                    break;
                case 2: 
                    echo "milk"."<br>";
                    break;
                case 3: 
                    echo "green"."<br>";
                    break;
                default:
                echo "none"."<br>";
            }

            echo "<br>";
            echo "--- while loop ---"."<br>";
            $a=0;
            while($a<5){
                echo $a."<br>";
                $a++;
            }
            echo "<br>";
            echo "--- do while loop ---"."<br>";
            echo $a."<br>";
            do {               
                $a++;
                echo $a."<br>";
            } while ($a < 1);
            echo "<br>";

            echo "--- for loop ---"."<br>";
            for($i=0 ; $i<20 ; $i+=2){
                echo $i."<br>";
            }

        ?>
    </body>

</html>
