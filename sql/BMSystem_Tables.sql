CREATE DATABASE BMSystem;

CREATE TABLE User 
(
    userID INT AUTO_INCREMENT PRIMARY KEY,
    userName VARCHAR(20),
    email VARCHAR(50),
    phone VARCHAR(50),
    password VARCHAR(20) NOT NULL
);

CREATE TABLE Books
(
    ISBN VARCHAR(13) PRIMARY KEY,
    Title VARCHAR(255),
    Author VARCHAR(255),
    Genre VARCHAR(50),
    Price FLOAT,
    Quantity INT,
    Publisher VARCHAR(255),
    PublicationDate DATE
);


INSERT INTO User (userName, email, phone, password)
VALUES
("John Smith", "js@gmail.com", "9999988880", "12345"),
("Jane Doe", "jd@gmail.com", "9999988881", "12345"),
("David Johnson", "dj@gmail.com", "9999988882", "12345"),
("Emily Williams", "ew@gmail.com", "9999988883", "12345"),
("Michael Brown", "mb@gmail.com", "9999988884", "12345"),
("Emma Davis", "ed@gmail.com", "9999988885", "12345"),
("Christopher White", "cw@gmail.com", "9999988886", "12345"),
("Olivia Wilson", "ow@gmail.com", "9999988887", "12345"),
("Liam Martinez", "lm@gmail.com", "9999988888", "12345"),
("Sophia Anderson", "sa@gmail.com", "9999988889", "12345");


INSERT INTO Books (ISBN, Title, Author, Genre, Price, Quantity, Publisher, PublicationDate)
VALUES
("9780061120084", "To Kill a Mockingbird", "Harper Lee", "Fiction", 9.99, 50, "HarperCollins", "2006-05-23"),
("9780451524935", "1984", "George Orwell", "Fiction", 10.99, 30, "Signet", "1950-06-08"),
("9781400032716", "The Great Gatsby", "F. Scott Fitzgerald", "Fiction", 8.99, 40, "Scribner", "2004-03-13"),
("9780066620992", "The Catcher in the Rye", "J.D. Salinger", "Fiction", 7.99, 25, "Little, Brown", "2001-05-01"),
("9780553382563", "Dune", "Frank Herbert", "Science Fiction", 12.99, 20, "Ace", "2019-08-27"),
("9780140283334", "The Hobbit", "J.R.R. Tolkien", "Fantasy", 11.99, 35, "Houghton Mifflin", "2002-08-15"),
("9780062316097", "The Fault in Our Stars", "John Green", "Young Adult", 14.95, 28, "Dutton", "2014-01-10"),
("9780743273565", "The Da Vinci Code", "Dan Brown", "Mystery", 9.49, 42, "Doubleday", "2003-03-18"),
("9780385333849", "The Kite Runner", "Khaled Hosseini", "Historical Fiction", 13.50, 20, "Riverhead", "2004-05-29"),
("9780062362501", "The Girl on the Train", "Paula Hawkins", "Thriller", 12.25, 38, "Riverhead", "2015-01-13");

CREATE TABLE Payments
(
    PaymentID INT AUTO_INCREMENT PRIMARY KEY,
    PaymentName VARCHAR(50) NOT NULL,
    BookName VARCHAR(50),
    PaymentDate DATE,
    PaymentType VARCHAR(50),
    Amount FLOAT
); 

INSERT INTO Payments (PaymentName, BookName, PaymentDate, PaymentType, Amount)
VALUES
("John Smith", "To Kill a Mockingbird", "2023-10-15", "Credit Card", 54.95),
("Jane Doe", "1984", "2023-10-16", "PayPal", 42.97),
("David Johnson", "The Great Gatsby", "2023-10-17", "Debit Card", 36.75),
("Emily Williams", "The Catcher in the Rye", "2023-10-18", "Cash", 23.99),
("Michael Brown", "Dune", "2023-10-19", "Credit Card", 67.50),
("Emma Davis", "The Hobbit", "2023-10-20", "PayPal", 29.85),
("Christopher White", "The Fault in Our Stars", "2023-10-21", "Debit Card", 45.20),
("Olivia Wilson", "The Da Vinci Code", "2023-10-22", "Cash", 18.99),
("Liam Martinez", "The Kite Runner", "2023-10-23", "Credit Card", 22.75),
("Sophia Anderson", "The Girl on the Train",  "2023-10-24", "Credit Card", 33.50);

-- creation of views for display of book data....
CREATE VIEW view1 AS
SELECT ISBN, Title, Author, Genre, Price, Quantity, Publisher, PublicationDate
FROM Books;

CREATE VIEW View2 AS
SELECT ISBN, Title, Author, Genre
FROM Books;

-- joins implemented...
SELECT u.userID, p.paymentName, b.ISBN, b.title, b.author, b.genre, b.price, p.paymentType
FROM User as u, Books as b, Payments as p
WHERE
    u.userName = p.PaymentName AND
    b.title = p.bookname;

SELECT PaymentID, PaymentName FROM Payments;