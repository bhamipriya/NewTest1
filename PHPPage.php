<?php
//made a small change
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>

        <h1>Testing php.....</h1>
        <?php
            $name = "bhami";
            echo "My name is ". $name;
            echo "File name is" . htmlspecialchars($_SERVER['PHP_SELF'])."</br>";
            $cars = array("volvo","honda","BMW");
            var_dump($cars);
            $x = 23;
            var_dump($x);

            echo "<br> creating PHP object...";
            
            class my_object {

                 function my_object() {
                    $this->model = "BMW";
                    echo strlen("inside object") . "</br>";
                    echo str_word_count("inside object");
                    echo strrev("inside object");
                    define ("MY_CONS","I AM A CONSTANT");
                    echo "</br>".MY_CONS;
                  }
               
              }
              
              echo "</br> testing switch statment....";
              $favColor = "red";
              switch($favColor){
                  case "red":
                    echo "Got My favorite colr $favColor";
                    break;
                  case "blue":
                     echo "blue color";
                     break;
                  default:
                     echo "got default";
                     break;
                }
                
                echo "<br>testing while loop";
                $favColor = "green";
                while($favColor == "red"){
                       echo "going once";
                       $favColor = "blue";

                 }
                 echo "<br>testing for loop";
                 for($i=1; $i<=4; $i++){
                       echo "inside for loop i = $i <br>";
                 }
                 echo "<br>testing foreach loop";
                 foreach($cars as $value){
                     echo "<br> car is $value <br>";
                 }
                 echo "<br>Testing function...<br>";
                 function my_function($arg1){
                       echo "inside the function. <br>";
                       $data1 = $arg1;
                       echo " my value is $data1";
                       return $data1;
                 }
                 echo "<br> Value returned from function is : " . my_function(56);
        echo "<br> Testing array function";
        $ind_arr1 = array("red","green","blue","yellow");
        $count = count($ind_arr1);
        for($i = 1; $i<= $count; $i++){
            echo "My value is : $ind_arr1[$i]<br>";
        }
        foreach ($ind_arr1 as $value){
            echo "<br> i am : $value";

        }
                 
        echo "<br>Testing Associative array";
        $ass_arr1 = array("mom"=>"bhami","dad"=>"satish","sister"=>"priya","brother"=>"rahul");
        arsort($ass_arr1);
        foreach($ass_arr1 as $x => $x_value ){
            echo"<br> Key= $x and Value = $x_value ";
        }

        echo "<br> Testing global variable";
        $g1 = 15;
        $g2 = 20;
       
        function addition(){
            global $g1, $g2, $z;
            $GLOBALS['z'] = $GLOBALS['g1'] + $GLOBALS['g2'];
            echo "getting g1 value inside <br>";
            echo "$g1, $g2, $z";
            echo "<br> Inside global function : z= $z and  g1= $g1";
        }
        
        addition();
        echo "<br> Outside global function z = $z";

        echo "<br> Testing PHP super global variable _SERVER";
        
        echo $_SERVER['PHP_SELF'];
                                                                                                                                                                            
        echo "<br>" .  $_SERVER['SCRIPT_NAME'];
        
        echo "<br> server name : = ". $_SERVER['SERVER_NAME'];
        echo "<br>server address = " . $_SERVER['SERVER_ADDR'];
        echo "<br>http host = " . $_SERVER['HTTP_HOST'];

        

            $b1 = 10;
            $car1 = new my_object();
            if ($b1 == 10) {
                echo "b1= " . $b1;
            }elseif($b1 == 5){
                echo "b1 = " . $b1;
            } else  
            {
                
                echo "i m nothing";
                }
            echo "my car model is" . $car1->model;
            
        ?>
        <h2>ENding PHP.....</h2>
    </body>
</html>
