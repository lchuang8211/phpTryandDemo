<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP DEMO 2</title>
    </head>
    <body>
        <?php 
            /* 運算子 */
            $a=10;
            $b=15 ;
            $c=3;
            $d=54.153 ;
            $e=15.01 ;

            echo "<br>--- 運算子 ---<br>";
            echo $a*$b."<br>";
            echo $a/$b."<br>";
            echo $a-$b."<br>";
            echo '$a**$c 次方 ' . $a**$c."<br>";  // ** : 次方
            
            echo "<br>--- 比較運算子 ---<br>";
            $m = 150; $n="150"; $o='150';
            var_dump($m==$n);  //弱型別
            var_dump($o===$n);
            var_dump($m===$o); //強比較 
            var_dump($m!=$n);
            var_dump($m!==$n);
            var_dump($m<>$n);  //比較有沒有=
            var_dump($m <=> $n); // <=> space ship 特殊符號 回傳(1, 0, -1): 左->(大中小)->右
            var_dump($m>200 and $n<=100); //and = && 通用
            var_dump($m >=$n or $n<200 ); // or = || 通用
            var_dump(!($m>100));  // not = !

        ?>
    </body>

</html>
