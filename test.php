<?php

    // session_start();

    // $_SESSION["favcolor"] = "green";
    // $_SESSION["favanimal"] = "cat";
    
    // echo "testing<br><br>";
    // echo $_SESSION["favcolor"];
    // echo '<br><br>';
    // session_unset();
    // echo $_SESSION["favcolor"];
    // echo '<br><br>';

    // print_r($_SESSION);


//////////////////////

    // $test = array();

    // if(empty($test)){
    //     echo 'if';
    // } else{
    //     echo 'else';
    // }


//////////


class test{
    public function apple(){
        echo 'goodbye';
        $this->pear();
        return 'hello';
    }

    public function pear(){
        echo 'tijuana';
        return 'los';
    }
}

$tester = new test;
$tester->apple();
?>