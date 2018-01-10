<?php 
	
/** 
 * Description of a Student  
 */
class Student
{
    function __construct()
    {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    function add_email($which, $email)
    {
        $this->emails[$which] = $email;
    }

    function add_grade($grade)
    {
        $this->grades[] = $grade;
    }
}