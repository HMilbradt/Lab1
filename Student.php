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

    /**
     * Add an email for this student
     */
    function add_email($key, $email)
    {
        $this->emails[$key] = $email;
    }

    /**
     * Add a grade for this student
     */
    function add_grade($key, $grade)
    {
        $this->grades[$key] = $grade;
    }

    /**
     * Returns the average grade of the student
     */
    function average()
    {
        $total = 0;

        foreach($this->grades as $grade)
        {
            $total += $grade;
        }
        return $total / count($this->grades);
    }

    /**
     * Returns a string representation of the student
     */
    function toString()
    {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";

        foreach($this->emails as $key=>$value)
            $result .= $key . ': ' . $value . "\n";

        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }
}