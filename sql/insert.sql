--
-- Setup for the article:
-- https://dbwebb.se/
--

DELETE FROM `Book`;
INSERT INTO `Book` (`image`, `title`, `author`) VALUES
    ("img/books/1.jpeg", "In search of lost time", "Marcel Proust"),
    ("img/books/2.jpg", "Don Quixote", "our-vision"),
    ("img/books/3.jpg", "Ulysses", "James Joyce"),
    ("img/books/4.jpg", "The Great Gatsby", "F. Scott Fitzgerald"),
    ("img/books/5.jpg", "Moby Dick", "Herman Melville")
;
