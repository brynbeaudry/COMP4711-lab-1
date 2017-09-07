<?php


/**
*
*/
class Student
{
  function __construct($argument)
  {
    $this->surname = '';
    $this->first_name = '';
    $this->emails = array();
    $this->grades = array();
  }

  function add_email($which,$address) {
    $this->emails[$which] = $address;
  }

  function add_grade($grade) {
    $this->grades[] = $grade;
  }
}

?>
