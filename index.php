<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
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
$first->add_status('status', 'Freshman');
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
$second->add_status('status', 'Junior');
$students['a456'] = $second;

$third = new Student();
$third->surname = "Yongjie";
$third->first_name = "Zhuo";
$third->add_email('home','Yongjie@braniacs.com');
$third->add_email('work1','Yongjie@bcit.ca');
$third->add_grade(95);
$third->add_grade(90);
$third->add_grade(85);
$third->add_status('status', 'Senior');
$students['b234'] = $third;

$fourth = new Student();
$fourth->surname = "aa";
$fourth->first_name = "bb";
$fourth->add_email('home','baba@braniacs.com');
$fourth->add_email('work1','baae@bcit.ca');
$fourth->add_grade(95);
$fourth->add_grade(80);
$fourth->add_grade(80);
$fourth->add_status('status', 'Senior');
$students['c234'] = $fourth;

ksort($students); // one of the many sort functions
foreach($students as $student)
echo $student->toString();
?>
    </body>
</html>
