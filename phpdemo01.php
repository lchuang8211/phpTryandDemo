<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <title>DEMO PHP 01</title>
    </head>
    <body>

        <?php 
            print "welcome to PHP !";
            echo "<h2>PHP Application</h2>";

            $strWord1 = "";
            $a = 10;
            $object = null;
            echo "$a"+"$a";  //弱型別
            echo "<hr>";
            echo "---數值探討---";
            echo "$a 整數: " . is_int($a);
            //-- 變數的範圍 --//
            echo "<hr>";
            $global_x = 5; // global;
            $global_y = 8;
            function testOne(){
                global $global_x;   //1.在內部定義使用的全域名稱 global
                echo "$global_x";
                echo "<br>";
                echo "keyword globals:".$GLOBALS["global_y"]; // 2.gloals 使用KEY存取
                echo "<br>";
            }
            testOne();
            function testTwo(){
                $local_x = 20;
                echo "local_x:".$local_x;
                echo "<hr>";                
            }
            testTwo();

            function testThree(){
                static $static_x = 15;
                $static_x += 1;
                echo "static_x : " . $static_x . " ";                
            }
            testThree();
            testThree();
            testThree();
            testThree();
            echo "<hr>";

            echo "特殊符號 : '\" \ &$";


        ?>

    </body>

</html>












