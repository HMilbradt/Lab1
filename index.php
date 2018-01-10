<!DOCTYPE html>
<html>
<head>
    <title>Lab 1</title>
</head>
<body>
    <?php 
        include('Student.php');

        $students = array();

        // Hardcoding 3 students...
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(1, 65);
        $first->add_grade(2, 75);
        $first->add_grade(3, 55);
        $students['j123'] = $first;

        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(1, 95);
        $second->add_grade(2, 80);
        $second->add_grade(3, 50);
        $students['a456'] = $second;

        $third = new Student();
        $third->surname = "Milbradt";
        $third->first_name = "Harrison";
        $third->add_email('home','bigbrain@braniacs.com');
        $third->add_grade(1, 95);
        $third->add_grade(2, 90);
        $third->add_grade(3, 88);
        $students['a123'] = $third;

        ksort($students);

        // Echo out each students string representation
        foreach($students as $student)
            echo $student->toString();
    ?>
</body>
</html>