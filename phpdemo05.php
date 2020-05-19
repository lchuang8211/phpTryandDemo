<?php 
    declare(strict_types=0);  //function 型態定義
?>
<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP DEMO 5</title>
    </head>
    <body>
        <?php 
            function func_welcome(){
                echo "welcome"."<br>";
            }
            func_welcome();
            function func_order($name, $price){
                echo "訂購 :".$name." 價格 :".$price."<br>";
            }
            func_order("apple",50);
            func_order("banana","30");
            func_order("peach",30.5);

            function func_returnSum($a,$b,$c){
                $sum = $a + $b + $c;
                return $sum;
            }
            echo "5+1+7= " .func_returnSum(5,1,7)."<br>";            

            // strict types 嚴謹資料型態
            function func_strictSum(int $a, int $b, int $c):int{ //:int return的型態
                $sum = $a + $b + $c;
                return $sum;
            }
            echo "5+1+7= " .func_returnSum(5,1,7)."<br>";
            echo "5+1+7= " .func_strictSum(5,1,"7")."<br>";

            
        ?>
    </body>

</html>
