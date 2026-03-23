select sum(price) as Total_price_Value
from library_books


SELECT COUNT(*) AS stock_count
FROM library_books
WHERE status = 'Available';


SELECT min(price) AS the_cheapest_book
from  library_books

SELECT max(price) AS most_expensive_book
from  library_books


SELECT avg(price) AS The_average_price
from  library_books;