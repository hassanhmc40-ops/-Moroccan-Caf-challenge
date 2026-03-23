create table categories(
id int primary key,
name varchar (50)
);

UPDATE library_books SET category_id = 1 WHERE id = 1;
UPDATE library_books SET category_id = 33 WHERE id = 2;
UPDATE library_books SET category_id = 93 WHERE id = 3;
UPDATE library_books SET category_id = 34 WHERE id = 4;
UPDATE library_books SET category_id = 98 WHERE id = 5;
UPDATE library_books SET category_id = 45 WHERE id = 6;
UPDATE library_books SET category_id = 78 WHERE id = 7;
UPDATE library_books SET category_id = 68 WHERE id = 8;
UPDATE library_books SET category_id = 17 WHERE id = 9;
UPDATE library_books SET category_id = 39 WHERE id = 10;
UPDATE library_books SET category_id = 60 WHERE id = 11;
UPDATE library_books SET category_id = 16 WHERE id = 12;
UPDATE library_books SET category_id = 38 WHERE id = 13;
UPDATE library_books SET category_id = 63 WHERE id = 14;
UPDATE library_books SET category_id = 33 WHERE id = 15;
UPDATE library_books SET category_id = 62 WHERE id = 16;


SELECT library_books.title, categories.name
FROM  library_books
JOIN categories
ON  library_books.category_id = categories.id;