<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//class
class UserControllerProject extends Controller
{
    //global variable
    public $course = "BSIT";

    //method
    public function index()
    {
        //local variable
        $student = "Erika";
        $message = "Welcome to Laravel! " . $student;

        // to get response in json format
        return response() ->json([
            "student" => $student,
            "message" => $message,
            "course" => $this->course
        ]);
      
    }

    public function read()
    {
        $greetingName = $this->greet("Erika");
        return response() ->json([
           "course" => $this->course,
           "greeting" => $greetingName,
        ]);
    }

    public function greet($name)
    {
        return response() ->json([
            "message" => "Hello, " . $name
        ]);
    }



}



/*to create crontroller: php artisan make:controller UserControllerProject
route to access the controller in server: Route::get('/variable-scope', [UserControllerProject::class, 'index']);
 global variable - can be accessed anywhere in the program:rule- access modifier(public, private, protected)
fileds- properties of the class
static variable - can be accessed without creating an object of the class

(11-2026)

3.89 - float 
9- integers
huewye- string
true/false - boolean

compund 
        array - collection of elements 
        object - an instance of the class

 operator 
        assignment (+,-,*,/,,**,++,--)
        arithmetic (=,+=,-=,*=,/=,%=,**=,.=)
        comparison (==,!=,===,!==,<,>,<=,>=)
        logical (&&,||,!)
        bitwise (&,|,^,~,<<,>>) - for binary 
        string ()
        array
control statement 
        if, - one condition
        else, - two condition
        elseif, multiple condition
        switch, one condition with multiple condition
        nested if, a statement inside another if statement
        case, 
        default
looping
        for, 
        while, 
        do while, 
        foreach
        break,
         continue


         check the version of php
         folder in www

         composer
         laravel new projectname
         kit - none
         frameword - phpunit
         database - mysql

         directory projectfolder- cd foldername
            php artisan serve - to run the server
        after configuring the database, run the command: php artisan migrate
        phpartisan make:controller ControllerName - to create a controller
        

*/

