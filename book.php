<?php
class Genre{
}  





class Author extends Genre {

	private $surname; // фамилия

	private $name; // имя

	private $patronymic; // отчество

	public function __construct(string $surname, string $name, string $patronymic)
	{
		$this->surname = $surname;
		$this->name = $name;
		$this->patronymic = $patronymic;
	}

	public function setName()
	{
		return $this->surname . " " . $this->name . " " . $this->patronymic; // возращаем полнове имя автора
	}
}





class Book {

	private $name_book; // название книги

	private $annotate; // аннотация

	private $ageCategory; // воз. категория 

	public function __construct(string $name_book, int $ageCategory, string $annotate)
	{
		$this->name_book = $name_book;
		$this->ageCategory = $ageCategory;
		$this->annotate = $annotate;
	}

	public function aboutBook() // полное позращение элементов 
	{
		return $this->name_book . '<br/>' . $this->ageCategory . '<br/>' . $this->annotate;
	}
}


$book = new Book("Ромео и Джульетта", 12, "Трагедия о любви юноши и девушки из двух враждующих веронских родов — Монтекки и Капулетти.");
$book = new Genre("Трагедия");
$book = new Author("Шекспир", "Уильям", "_");

var_dump($book);




