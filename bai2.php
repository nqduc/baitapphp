
<?php
    class user_message {
        public $message = 'Xin chào , Tôi tên là ';
        public function introduce($name)
        {
            return $this-> message.$name;
        }
    } 
    $mymessage = New user_message();
    echo $mymessage->introduce('HELLO')."<br>";
?>
