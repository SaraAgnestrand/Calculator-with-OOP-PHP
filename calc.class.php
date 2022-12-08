<?php

class Calculator
{
    //Properties för klassen
    private $num1;
    private $num2;
    private $operator;
    //Konstruktor som sätter alla properties för klassen
    public function __construct($num1, $num2, $operator) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operator = $operator;
    }

    //Metod för att göra uträkningen, calculate, med switch 
    public function calculate()
    {

       switch ($this->operator){
        case "sub":
            return $this->num1 - $this->num2;
        case "div":
            return $this->num1 / $this->num2;
        case "mul":
            return $this->num1 * $this->num2;
        default:
            return $this->num1 + $this->num2;
            
       } 
    }

    //Getters för alla properties

    public function getNum1()
    {
        return $this->num1; 
    }
    public function getNum2()
    {
        return $this->num2;
    }
    public function getOperator()
    {
        return $this->operator; 
    }

}


/*Beskrivning
Du skall bygga en miniräknare med PHP och objektorienterad programmering. 
Övningen går ut på att ladda ner filen nedan (index.php).

En del av att vara programmerare är att läsa och förstå andras kod. 

Din uppgift här är:

1. Läs och försöka förstå index.php och vad programmet försöker göra
2. Skapa en ny fil och skriv klassen Calculator. Se om du kan få 
miniräknaren att fungera med endast dessa två filer.*/




