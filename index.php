<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello Out there</title>
    <style media="screen">
      pre {
        line-height: 1.7em;
      }
      body {
        background-image: url('ydab.png');
        background-color:rgba(0, 0, 0, 0.2);
        text-align: center;
        color: white;
        font-size: 3em;
      }
      p{
        color : white;
      }
    </style>
  </head>
  <body>
    <p>Hello out there... I live</p>
    <p>-Bryn</p>
    <?php
      include('Student.php');

      $students = array();

      $first = new Student();
      $first->surname = "Doe";
      $first->first_name = "John";
      $first->add_email('home','john@doe.com');
      $first->add_email('work','jdoe@mcdonalds.com');
      $first->add_grade(65);
      $first->add_grade(75);
      $first->add_grade(55);
      $students['j123'] = $first;

      $second = new Student();
      $second->surname = "Einstein";
      $second->first_name = "Albert";
      $second->add_email('home','albert@braniacs.com');
      $second->add_email('work1','a_einstein@bcit.ca');
      $second->add_email('work2','albert@physics.mit.edu');
      $second->add_grade(95);
      $second->add_grade(80);
      $second->add_grade(50);
      $students['a456'] = $second;

      $third = new Student();
      $third->surname = "Beaudry";
      $third->first_name = "Bryn";
      $third->add_email('home','babeaudry@brynmail.com');
      $third->add_email('work1','babeaudry@protonmail.com');
      $third->add_email('work2','babeaudry@gamil.ca');
      $third->add_grade(95);
      $third->add_grade(40);
      $third->add_grade(90);
      $students['bbeau'] = $third;

      echo "<h1>Students:</h1>";
      foreach ($students as $student) {
        echo $student->toString();
      }
    ?>
  </body>
</html>
