--
-- Setup for the article:
-- https://dbwebb.se/
--

DELETE FROM `Book`;
INSERT INTO `Book` (`image`, `title`, `author`) VALUES
    ("http://www.student.bth.se/~edni17/dbwebb-kurser/ramverk1/me/redovisa/htdocs/img/books/1.jpeg", "In search of lost time", "Marcel Proust"),
    ("http://www.student.bth.se/~edni17/dbwebb-kurser/ramverk1/me/redovisa/htdocs/img/books/2.jpg", "Don Quijote", "Miguel de Cervantes"),
    ("http://www.student.bth.se/~edni17/dbwebb-kurser/ramverk1/me/redovisa/htdocs/img/books/3.jpg", "Ulysses", "James Joyce"),
    ("http://www.student.bth.se/~edni17/dbwebb-kurser/ramverk1/me/redovisa/htdocs/img/books/4.jpg", "The Great Gatsby", "F. Scott Fitzgerald"),
    ("http://www.student.bth.se/~edni17/dbwebb-kurser/ramverk1/me/redovisa/htdocs/img/books/5.jpg", "Moby Dick", "Herman Melville")
;
