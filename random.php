<?php

class skill {

    public $name;
    protected $level;

    public function __construct($name ="", $level = 0) { 
        $this->name = $name;
        $this->level = $level;
    }

    public static formatSkill($name, $level){
        return "". $name ." and has level". $level;
    }

}

echo skill::formatSkill("php", 100); // will echo : "php and has level 100"


$s1->printName();       // will echo : "php and has level 100"
$s1->format();          // zal niet werken omdat het private is.
echo $s1->name;         // zal de name printen
echo $s1->level;        // zal niet werken omdat het private/protected is.

