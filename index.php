<!-- a variable is a container that holds value temporary during the execytion of a program
 -->

 <?php
    $name="obed";
    $name2="ifeanyi";
    $name3="leonard";
    $name4="Stephen";

    echo $name;
$age=7;
    if($age>18){
        echo "you can vote";     
    }
    else{
        echo '<br>'."you can;t vote";

        $score=50;
        
    };
    
    if($score>=70 && $score<=100){
        echo "GRADE A";
    }


    else if($score >=60 && $score<=69){
        echo" Grade B";
    }
    // create a score application
// fun
    function add(){
        return 2+2;
    }

    echo $sum=add();

    function greet($name){
        echo "good morning $name";
    }
 
 echo greet('stephen  m  ');
 
 ?>