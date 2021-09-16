<?php 
    namespace my_project\models\article;
    use my_project\models\user\User;
    
    class Article {
        private $title;
        private $text;
        private $author;

        public function __construct (string $title, string $text, User $author) {
            $this -> title  = $title;
            $this -> text = $text;
            $this -> author = $author;
        }

        public function getTitle():string {
            return $this -> title;
        }

        public function getText():string {
            return $this->text;
        }

        public function getAuthot():string {
            return $this -> author;
        }

    }

?>