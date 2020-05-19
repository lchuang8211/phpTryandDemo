<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP demo 4</title>
    </head>
    <body>
        <?php 
            echo "<br>";
            //--- Constants 常數 ---//
            define("Pig",31564);  //定義 ("key", value)
            echo Pig."<br>";

            define("BRAND_ARRAY", ["Apple","Banana","Peach"]); //定義常數陣列 ("array name",[array value])
            define("Fruit", ["Apple","Banana","Peach"]);
            echo BRAND_ARRAY[2]."<br>";
            echo Fruit[1]."<br>";
            //常數沒有$符號

            //--- Array 陣列 ---//
            $corp = array("Apple","Banana","Peach");
            echo $corp[0]."<br>";
            $corp[2]="update";
            echo $corp[2]."<br>";
            echo "長度".count($corp)."<br>";
            
            foreach($corp as $corpName){
                echo $corpName."<br>";
            }
            var_dump($corp);

            $corp[3]="new 4 element";
            $corp[7]="new 8 element";
            $corp[5]="new 6 element";
            // var_dump($corp[6]);  //空心
            var_dump($corp);  //空心陣列

            array_push($corp,"HTC","push 2", "push muti");  //從最後一個element填入
            var_dump($corp);

            unset($corp[2]);  //刪除不重整  ==>> 會造成空心陣列
            var_dump($corp);

            echo "copr";
            $corp = array_values($corp); //重新建立array,索引index;
            var_dump($corp);

            // array_slice (陣列 , 參數) 
            echo "copr2";
            $corp2 = array_slice($corp, 2);  // 刪掉前面 2個 再回傳
            var_dump($corp2);
            echo "copr3";
            $corp3 = array_slice($corp, -3);  // "取"後面 3個 再回傳
            var_dump($corp3);
            echo "copr4";
            $corp4 = array_slice($corp, 2,-3); // 從2開始取 直到倒數第3個 再回傳
            var_dump($corp4);
            echo "copr5";
            $corp5 = array_slice($corp, -4,2); // 從倒數第4個開始取 取2個 再回傳
            var_dump($corp5);
            echo "copr6";
            $corp6 = array_slice($corp, 3,3,false);  // 從第3個開始取 取3個 再回傳
            var_dump($corp6);   
            echo "copr7";
            $corp7 = array_slice($corp, 3,3,true);   // true = 真實index位址
            var_dump($corp7);
            echo "copr8 刪掉最後2個";
            $corp8 = array_slice($corp, 0, count($corp)-2);   // true = 真實index位址
            var_dump($corp8);

            $insertArray = array("BMW", "Benz", "Brown");
            $corp9 = array_splice($corp, 1, 3, $insertArray);
            echo "corp";
            var_dump($corp);
            echo "corp9";
            var_dump($corp9);
           
            $corp10 = array_splice($corp, count($corp), 0, $insertArray);
            echo "corp";
            var_dump($corp);
            echo "corp10";
            var_dump($corp10);

            echo "corp11";
            $corp11 = array_reverse($corp); //反轉
            var_dump($corp11);

            sort($corp);  //排序 小->大
            var_dump($corp);

            rsort($corp);  //反向排序 大->小
            var_dump($corp);

            array_pop($corp); //刪掉最後一個
            var_dump($corp);

            $sindex = array_search("Banana", $corp);
            echo "Banana的索引:". $sindex."<br><br>";

            //--- Dictionary ---//
            $mpointsArray = array("one"=>100 ,"two"=>200 ,"three"=>300 ,"four"=>400 ,"five"=>array("five00"=>500,"five10"=>510));
            var_dump($mpointsArray);
            $mpoints = array("one"=>100 ,"two"=>200 ,"three"=>300 ,"four"=>400 ,"five00"=>500);
            echo "one:".$mpoints["one"]."<br>";
            var_dump($mpoints);

            foreach($mpointsArray as $key=>$value){
                echo "key : ".$key.",value : ".$value."<br>";
            }            
            echo "<hr>";
            foreach($mpoints as $value){
                echo "value : " . $value."<br>";
            }
            echo "<hr>";

            ksort($mpoints);  //key sort
            var_dump($mpoints);
            echo "<hr>";
            krsort($mpoints);  //key reverse sort
            var_dump($mpoints);
            echo "<hr>";

            asort($mpoints);  //value sort
            var_dump($mpoints);
            echo "<hr>";
            arsort($mpoints);  //value reverse sort
            var_dump($mpoints);
            echo "<hr>";

            echo array_search(300, $mpoints);  //找KEY
            echo "<br>";

            $a1 = array("red","green","blue");
            $a2 = array("white","black");
            $a3 = array_replace($a1, $a2); //把$a2的值 覆蓋$a1的值
            var_dump($a3);
            echo "<hr>";

            $a1 = array("red","green","blue");
            $a2 = array("white","black");
            $a3 = array("pink","brown","gray");
            $a4 = array_replace($a1, $a2, $a3); //把$a2的值 覆蓋$a1的值 再被$a3覆蓋
            var_dump($a4);

            $a=array("a"=>"red", "d"=>"green", "blue");
            ksort($a);
            var_dump($a);

        ?>
    </body>

</html>
