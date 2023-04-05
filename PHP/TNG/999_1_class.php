<?php

class People
{
    protected $name;

    public function setName($param_name)
    {   
        $this->name=$param_name;
    }
    public function peoplePrint()
    {
        $str = "이름 : ".$this->name."\n";
        echo $str;
    }
}

// $obj_people = new People("ttt");
// $obj_people->setName();

class Student extends People
{
    protected $id;

    public function setId($param_id)
    {   
        $this->id=$param_id;
    }

    public function studentPrint()
    {
        parent::peoplePrint();
        $str = "번호 : ".$this->id;
        echo $str;
    }
}

$obj_student = new Student;
$obj_student->setName("ddd"); //함수명(파라미터값)을 넣어줘야함
$obj_student->setId(1223);
$obj_student->studentPrint(); // 출력
?>