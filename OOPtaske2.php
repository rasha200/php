<?php
class student{
private $name;
private $age;
private $studentID;


public function __construct($name, $age, $studentID){
    $this->name = $name;
    $this->age = $age;
    $this->studentID = $studentID;
}

function __destruct(){
    echo "the student object is destroyed";
}

function setname($name){
    $this->name = $name;
}

function setage($age){
    $this->age = $age;
}

function setstudentID($studentID){
    $this->studentID = $studentID;
}

function getname(){
    return $this->name;
}

function getage(){
    return $this->age;
}

function getstudentID(){
    return $this->studentID;
}

function getDetails(){
    return "name: $this->name, age: $this->age, studentID: $this->studentID";
}



};

$student1 = new student("rasha", 19 , 4);
echo $student1->getname();
echo "<br>";
echo $student1->getage();
echo "<br>";
echo $student1->getstudentID();
echo "<br>";

echo $student1->getDetails();
echo "<br>";

$student1->setname("nejar");
$student1->setage(17);
$student1->setstudentID(2);

echo $student1->getname();
echo "<br>";
echo $student1->getage();
echo "<br>";
echo $student1->getstudentID();
echo "<br>";


class Classroom{
 public $student = [];

 function addstudent(student $student){
    $this->student[] = $student;
 }

 function removestudent($id){
    foreach($this->students as $key => $x){
        if($x->getstudentID == $id){
            unset ($this->student[$key]);
            return;
        }
    }
 }

function liststudent(){
    foreach($this->student as $student){
        echo $student->getDetails();
        echo "<br>";
    }
}

}

$classroom1 = new Classroom();
$student2 = new student("asl", 22, 7);
$student3 = new student("yasmeen", 20, 3);
$student4 = new student("zaina", 21, 5);


$classroom1->addstudent($student1);
$classroom1->addstudent($student2);
$classroom1->addstudent($student3);
$classroom1->addstudent($student4);


$classroom1->liststudent();
?>