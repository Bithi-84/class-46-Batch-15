

<?php

class car {

    public function color () {
        echo 'red';
    }


    public function engine () {
        echo '4000';
    }

    public function model () {
        echo 'A5678908';
    }
}


    $objectCar =  new car();

    $objectCar->color();

    echo '<br>';

    $objectCar->engine();

    echo '<br>';
    $objectCar->model();

    echo '<br>';
     
    echo 'Calculator class';
    
    echo '<br>';

    class calculator{

        public function sum ($num1, $num2){
            $x = $num1;
            $y = $num2;
            $result = $x+$y;
            return $result;

        }

        public function sub ($num1, $num2){
            $x = $num1;
            $y = $num2;
            $result = $x-$y;
            return $result;

        }

        public function divided ($num1, $num2){
            $x = $num1;
            $y = $num2;
            $result = $x/$y;
            return $result;

          
}


public function multiply ($num1, $num2){
    $x = $num1;
    $y = $num2;
    $result = $x*$y;
    return $result;

  
}
    }


     $objectCalculator = new calculator();
    
    echo $objectCalculator->sum(30,40);
       
    echo '<br>';

    echo $objectCalculator->sub(80,50);
   
    echo '<br>';

    echo $objectCalculator->divided(60,20);
    
    echo '<br>';

    echo $objectCalculator->multiply(60,20);
?>