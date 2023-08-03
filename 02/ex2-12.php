<?php      
    class Hello {
        private $name = "김똥뗀";
        private $age = 20;        
        function say_hello() {          
            return $this->name."님 안녕하세요.";
        }

        function age_check() {
            return $this->name."의 나이는 ".$this->age."세 입니다";
        }
    }

    $message = new Hello();
    echo $message->say_hello();
    echo "<br>";
    echo $message->age_check();
    echo "<br>";

    var_dump($message);
?>