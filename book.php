<?php
class Book {
	public $author; //автор
	public $ganar; // жанр
	public $name; // название
	public $ogl; // оглавление 
	public $kat; // воз. категория 
	
	public function __construct($name, $author, $ganar, $ogl, $kat) {
		$this->name = $name;
		$this->author = $author;
		$this->ganar = $ganar;
		$this->org = $ogl;
		$this->kat = $kat;
	}

}
$book = new Book("Война и мир","Пушкин", "комедия", "говно просто", "18+");

echo "Book name: " . $book->name . "\n";
echo "Автор: " . $book->author . "\n";
echo "Жанр: " . $book->ganar . "\n";
echo "Вступление: " . $book->org . "\n";
echo "Возрастная категория: " . $book->kat . "\n";
echo "\n";
var_dump($book);
