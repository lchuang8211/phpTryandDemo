<?php //設定header 
    header("Content-type:text/html; charset=utf-8");  //Content-type:text/json
    mb_internal_encoding('UTF-8');
    mb_http_input('UTF-8');
    mb_http_output('UTF-8');
?>
<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <title>php demo 6</title>
    </head>
    <body>
        <?php
            //-- 字串 --//
            echo "<br>---字串處理---<hr>";
            echo "This is \"PHP\" world.<br>";
            echo 'The "number one" web server.<br>';

            $websvr = "Wamp64";
            echo "install the $websvr server.<br>";
            echo "pas\$word<br>";
            echo 'pas$word<br>'; // '  ' 不處理特殊符號

            $strInput = "       高雄市前金 區中 正路1234號  "; 
            $str = trim($strInput);
            echo $strInput."<br>";
            echo $str."<br>";
            echo "字串長度: ".strlen($strInput)."<br>";
            echo "字串長度: ".strlen($str)."<br>";
            //--- mb 系列---//
            echo "mb字串長度: ".mb_strlen($str)."<br>";
            $findex = mb_strpos($str,"前",0);  //從0開始算 前 在第幾個位址
            echo "get index position: ". $findex ."<br>";            
            echo mb_substr($str, (mb_strpos($str,"路",0)+1),-mb_strlen("號"))."<br>";
            $tel = "0912345678";
            echo substr_replace($tel, "+886", 0, 1)."<br>";
            $email = "jhon1888@godstore.com.tw";
            $name = mb_strstr($email, "@", true);
            $domain = mb_strstr($email, "@", false);
            echo "user : ".$name."<br>domain : ".substr($domain,1,mb_strlen($domain));

            $strOne = "I will be back 我會回來";
            $arrayStrOne = explode(" ",$strOne);
            var_dump($arrayStrOne);
            $strTwo = "I|will|be|back|我會回來";
            $arrayStrTwo = explode("|",$strTwo);
            var_dump($arrayStrTwo);


        ?>
    </body>

</html>
