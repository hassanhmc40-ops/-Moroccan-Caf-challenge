SELECT title, author, price
from library_books


SELECT *
from library_books
where price between 100 and 300

SELECT * 
from library_books
where published_year > 2020


SELECT *
from library_books
WHERE title LIKE '%PHP%';

SELECT *
from library_books
where status <> 'lost' 
ORDER BY published_year DESC;


SELECT DISTINCT author
FROM library_books;


