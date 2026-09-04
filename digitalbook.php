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
    
    class digitalbook extends book {
        public $filesize;
        
        public function __construct($title, $author,$publisher,$filesize){
            parent::__construct($title, $author,$publisher);
            $this->filesize = $filesize;
        }

        public function download(){
            return "\nE-Book " . $this->title . " by " . $this->author . " Has been Downloaded";
        }

        public function get_info(){
            return "\nNama E-Buku: " . $this->title . " Karya: " . $this->author . " Penerbit: " . $this-> publisher . " Size: " . $this->filesize . " kb";
        }
    }

    $book1 = new book("Untitled", "GD", "BB");
    $ebook1 = new digitalbook("Summer, Night", "Ji Hee", "W2E", "1.002");

    echo $book1->get_info();
    echo $ebook1->get_info();
    
    $member = new member(); 
    $member->setdatamember("24123","Yu Ree","NTU");
    echo $member->getdatamember();

    echo $book1->borrow();
    echo $ebook1->download();

?>
