<?php

    class book {
        public $title;
        public $author;
        public $publisher;

        public function __construct($title, $author,$publisher){
            $this->title = $title;
            $this->author = $author;
            $this->publisher = $publisher;
        }

        public function get_info(){
            return "\nNama Buku: " . $this->title . " Karya: " . $this->author . " Penerbit: " . $this-> publisher;
        }

        public function borrow(){
            return "\nBook " . $this->title . " by " . $this->author . " Has been Borrowed";
        }
    }

    class member {
        private $id;
        private $name;
        private $institution;

        public function setdatamember($id,$name,$institution){
            $this->id = $id;
            $this->name = $name;
            $this->institution = $institution;
        }

        public function getdatamember(){
            return "\nID Member: " . $this->id . " Member Name: " . $this->name . " Institution: " . $this->institution;
        }
    }

    $book1 = new book("Untitled", "GD", "BB");
    $book2 = new book("Summer, Night", "Ji Hee", "W2E");

    echo $book1->get_info();
    echo $book2->get_info();

    $member = new member(); 
    $member->setdatamember("24123","Yu Ree","NTU");
    echo $member->getdatamember();

    echo $book1->borrow();

?>
