<?php 

namespace source{

    class Admin{
        private string $adminName;

        public function __construct($adminName)
        {
            $this->adminName = $adminName;
        }

        public function introduceAdmin(){
            return "Hello, I am admin and my name is $this->adminName".PHP_EOL;
        }
    }

}



?>
