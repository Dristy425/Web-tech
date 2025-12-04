<?php
class Book {
    public $title;
    public $author;
    public $year;

    // Constructor
    function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    // Setters
    function setTitle($title) {
        $this->title = $title;
    }

    function setAuthor($author) {
        $this->author = $author;
    }

    function setYear($year) {
        $this->year = $year;
    }

    // Method to show book details
    function getDetails() {
        return "Title: $this->title, Author: $this->author, Year: $this->year";
    }
}

// Create object with Bangla story book
$banglaBook = new Book("Hajar Bochor Dhore", "Zahir Raihan", 1964);

// Display book details
echo $banglaBook->getDetails();
?>
