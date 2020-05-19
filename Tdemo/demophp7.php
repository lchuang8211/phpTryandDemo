<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>DEMO PHP 7</title>
</head>

<body>

<?php
// -- Class 類別 --//
echo "<br> -- Class 類別 -- <br>";

class Person {
    public $name;
    public $phone;

    private $salary;
    public function setSalary($mySalary) {
        if ($mySalary < 23800) {
            $mySalary = 23800;
        }
        $this->salary = $mySalary;
    }
    public function getSalary() {
        return $this->salary;
    }

    public function __construct($myName, $myPhone, $mySalary) { //建構子
        $this->name = $myName;
        $this->phone = $myPhone;
        $this->setSalary($mySalary);
    }

    public function 顯示個人資料() {
        echo "姓名:".$this->name.", 電話:".$this->phone.", 薪資:".$this->getSalary();
        echo "<br>";
    }

    const CLASSINFO = "員工資料類別";
    public static $corp = "順利有限公司";

    public static function 顯示類別資訊() {
        echo self::CLASSINFO;
    }
}

class Manager extends Person {

    //salary屬性 override
    private $salary;
    public function setSalary($mySalary) {
        if ($mySalary < 23800) {
            $mySalary = 23800;
        }
        $this->salary = $mySalary + 6000; //主管加給;
    }
    public function getSalary() {
        return $this->salary;
    }

    //方法 override
    public function 顯示個人資料() {
        echo "(管理者)姓名:".$this->name.", 電話:".$this->phone.", 薪資:".$this->getSalary();
        echo "<br>";
    }

    const CLASSINFO = "管理者資料類別";

    public static function 顯示類別資訊() {
        echo self::CLASSINFO;
    }
}

$david = new Person("","",0);
$david->name = "王大衛";
$david->phone = "0922333666";
$david->setSalary(20000);

echo "姓名:".$david->name.", 電話:".$david->phone.", 薪資:".$david->getSalary();
echo "<br>";

$mary = new Person("李瑪莉", "0911666222", 28000);
$mary->顯示個人資料();

$chen = new Manager("陳經理", "0977333111", 70000);
$chen->顯示個人資料();

echo Person::CLASSINFO;
echo "<br>";
echo Manager::CLASSINFO;
echo "<br>";
echo Person::$corp;
echo "<br>";
echo Manager::$corp;
echo "<br>";
echo Person::顯示類別資訊();
echo "<br>";
echo Manager::顯示類別資訊();
echo "<br>";

//-- 抽象類別 --//
abstract class CodeName {
    public $code;
    public $name;

    abstract public function showName($myCode);
}




?>

</body>

</html>