<?php
namespace SMAK\Inc;
require_once('./inc/helpers/Singleton.php');
use SMAK\Inc\Traits\Singleton as S;

class Student{
   use S;
   protected $student_info = array() ;

    public function __construct($std){
        //Set the students data in  $student_info property
        $this->student_info = $std;
    }

    // get Students name
    public function name(){
       $name = $this->student_info['name'];
       return $name;
    }

    // get Students age
    public function age(){
        $age = $this->student_info['age'];
        return $age;
     }

     // get Students class
     public function class(){
        $class = $this->student_info['class'];
        return $class;
     }

     // get Students city
     public function city(){
        $city = $this->student_info['city'];
        return $city;
     }
}