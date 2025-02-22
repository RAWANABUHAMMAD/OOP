<?php
class Book {
    private  $title;
    private  $author;
    private  $isbn;
    private $status;

    public function __construct( $title,  $author,  $isbn,  $status) {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
        $this->status = $status;
        $author->addBook($this);
    }
    public function borrowBook() {
        $this->status = 'borrowed';
    }
    public function returnBook() {
        $this->status = 'available';
    }
    public function get book info() {
        echo "Title: $this->title, Author: $this->author, ISBN: $this->isbn, Status: $this->status";
    }
}
class Author {
    private $name;
    private $book;
    private $email;

    public function __construct($name, $email, $book) {
        $this->name = $name;
        $this->email = $email;
        $this->book = [];
    }
    public function addBook($book) {
        $this->book[] = $book;
    }
    public function get auther book() {
       return $this->book;
    }
        
}
class digitalBook extends Book {
    
    private $file size;
    public function __construct($file size)  {
        $this->file size = $file size;
    }
}
class library {
    private $name;
    private $book;
    private $author;
    private $digitalBook;
    public function __construct($name, $book, $author, $digitalBook) {
        $this->name = $name;
        $this->book = [];
        $this->author = [];
        $this->digitalBook = [];
    }
    public function addBook($book) {
        $this->book[] = $book;
    }
    public function addAuthor($author) {
        $this->author[] = $author;
    }
    public function addDigitalBook($digitalBook) {
        $this->digitalBook[] = $digitalBook;
    }
    public function get library book() {
        return $this->book;
    }
    public function get library author() {
        return $this->author;
    }
    public function get library digitalBook() {
        return $this->digitalBook;
    }
}


