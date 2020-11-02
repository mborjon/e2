<?php
class Person
{
    public $firstName;
    public $lastName;
    public $age;

    public function __construct(string $firstName, strin $lastName, int $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function getFullName()
    {
        return $this->firstName.' '.$this->lastName;
    }
    public function getClassification()
    {
        if ($this->age >= 18) {
            return 'adult';
        } else {
            return 'minor';
        }
    }
}

//other way to write if statement:
//return ($this->age >= 18) ? 'adult' : 'minor';


/*Create a class called Person.

This class should have 3 public properties:

A string firstName
A string lastName
An int  age
Constructor

The constructor of this class should accept 3 parameters: firstName, lastName, age. It should use these parameters to set the corresponding class properties, e.g.:

$this->firstName = $firstName;
Methods

The class should have a public method called getFullName that accepts 0 parameters and returns a string of text that concatenates the firstName and lastName properties with a space in between.

This class should have another public method called getClassification that returns a string of "adult" if the person's age is >= 18 or "minor" if the person's age is < 18.
*/