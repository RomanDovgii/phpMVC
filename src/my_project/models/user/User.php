<?php
    namespace my_project\models\user;

    class User {
        private $name;

        public function __construct(string $name) {
            $this -> name = $name;
        }

        public function getName():string {
            return $this -> name;
        }
    }
?>