<?php


/**
*
*/
class Student
{
  /*The student constructor*/
  function __construct()
  {
    $this->surname = '';
    $this->first_name = '';
    $this->emails = array();
    $this->grades = array();
  }
  /*Add email function*/
  function add_email($which,$address) {
    $this->emails[$which] = $address;
  }
  /*Add grade function*/
  function add_grade($grade) {
    $this->grades[] = $grade;
  }

  /*Function for calculating the avergae of all added grades.*/
  function average() {
    $total = 0;
    foreach ($this->grades as $value) {
      $total += $value;
    }
    return $total /count($this->grades);
  }

  /*Student to string method*/
  function toString() {
    $result = $this->first_name . ' ' . $this->surname;
    $result .= ' ('.$this->average().")\n";
    foreach($this->emails as $which=>$what)
    $result .= $which . ': '. $what. "\n";
    $result .= "\n";
    return '<pre>'.$result.'</pre>';
  }
}

?>
