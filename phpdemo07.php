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
        <title>php demo 07</title>
    </head>
    <body>
        <?php 
            //--- Class 類別 ---//
            echo "<br>--- Class 類別 ---<hr>";
            class Person {
                public $name; 
                public $phone;
                private $salary;
                public function setSalary($mySalary){
                    if($mySalary<2380){
                        $mySalary=23800;
                    }
                    $this->salary = $mySalary;
                }
                public function getSalary(){
                    return $this->salary;
                }
                public function __construct($myName, $myPhone, $mySalary){ //單一建構子 沒有多載 overload
                    $this->name = $myName;
                    $this->phone = $myPhone;
                    $this->setSalary($mySalary);
                }
                public function 顯示個人資料(){
                    echo "姓名 : ".$this->name." 電話 : ".$this->phone." 薪水 : ". $this->getSalary()."<br>";
                }
                const CLASSINFO = "員工資料類別";  //常數 不用$
                public static $corp = "順利股份有限公司";
                public static function 顯示類別資訊(){
                    echo self::CLASSINFO; //在"自身"類別存取靜態物件
                }
            }
            class Manager extends Person {  //單一繼承
                //salary override
                private $salary;
                public function setSalary($mySalary){
                    if($mySalary<2380){
                        $mySalary=23800;
                    }
                    $this->salary = $mySalary+6000;                    
                }
                public function getSalary(){
                    return $this->salary;
                }
                //function override
                public function 顯示個人資料(){
                    echo "(Manager)姓名 : ".$this->name." 電話 : ".$this->phone." 薪水 : ". $this->getSalary()."<br>";
                }

                const CLASSINFO = "管理者資料類別";  //常數const 不用$

                public static function 顯示類別資訊(){
                    echo self::CLASSINFO; //在"自身"類別存取靜態物件
                }
            }

            $David = new Person("","",0);  //初始化
            $David->name="大衛";
            $David->phone="0912345678";
            $David->setSalary(2000);

            echo "姓名 : ".$David->name." 電話 : ".$David->phone." 薪水 : ". $David->getSalary()."<br>";
            $David->顯示個人資料();
            $Mary = new Person("大瑪莉","0912345678", 2550);  //初始化
            $Mary->顯示個人資料();

            $chen = new Manager("老陳","09878778877",30000);
            $chen->顯示個人資料();

            echo Person::CLASSINFO."<br>";
            echo Manager::CLASSINFO."<br>";
            echo Person::$corp."<br>";
            echo Manager::$corp."<br>";
            echo Person::顯示類別資訊()."<br>";
            echo Manager::顯示類別資訊()."<br>";

            //--- Abstract 抽象類別 ---//
            abstract class CodeName {
                public $code;
                public $name;
                
                abstract public function showName($myCode);
            }



        ?>
    </body>

</html>
