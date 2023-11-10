CREATE TABLE LoginDetails 
(
    userID INT AUTO_INCREMENT PRIMARY KEY,
    userName VARCHAR(20),
    email VARCHAR(50),
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

CREATE TABLE Customers
(
    CustomerID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255),
    ContactInformation VARCHAR(255),
    Email VARCHAR(255)
);

CREATE TABLE Payments
(
    PaymentID INT AUTO_INCREMENT PRIMARY KEY,
    PaymentDate DATE,
    PaymentType VARCHAR(50),
    Amount FLOAT
);

INSERT INTO Books (ISBN, Title, Author, Genre, Price, Quantity, Publisher, PublicationDate)
VALUES
('9780061120084', 'To Kill a Mockingbird', 'Harper Lee', 'Fiction', 9.99, 50, 'HarperCollins', '2006-05-23'),
('9780451524935', '1984', 'George Orwell', 'Fiction', 10.99, 30, 'Signet', '1950-06-08'),
('9781400032716', 'The Great Gatsby', 'F. Scott Fitzgerald', 'Fiction', 8.99, 40, 'Scribner', '2004-03-13'),
('9780066620992', 'The Catcher in the Rye', 'J.D. Salinger', 'Fiction', 7.99, 25, 'Little, Brown', '2001-05-01'),
('9780553382563', 'Dune', 'Frank Herbert', 'Science Fiction', 12.99, 20, 'Ace', '2019-08-27'),
('9780140283334', 'The Hobbit', 'J.R.R. Tolkien', 'Fantasy', 11.99, 35, 'Houghton Mifflin', '2002-08-15'),
('9780062316097', 'The Fault in Our Stars', 'John Green', 'Young Adult', 14.95, 28, 'Dutton', '2014-01-10'),
('9780743273565', 'The Da Vinci Code', 'Dan Brown', 'Mystery', 9.49, 42, 'Doubleday', '2003-03-18'),
('9780385333849', 'The Kite Runner', 'Khaled Hosseini', 'Historical Fiction', 13.50, 20, 'Riverhead', '2004-05-29'),
('9780062362501', 'The Girl on the Train', 'Paula Hawkins', 'Thriller', 12.25, 38, 'Riverhead', '2015-01-13');

INSERT INTO Customers (CustomerID, Name, ContactInformation, Email)
VALUES
(101, 'John Smith', '123 Main St, Anytown, USA', 'john.smith@email.com'),
(102, 'Jane Doe', '456 Elm St, Othertown, USA', 'jane.doe@email.com'),
(103, 'David Johnson', '789 Oak St, Another Town, USA', 'david.johnson@email.com'),
(104, 'Emily Williams', '101 Pine St, Somewhere, USA', 'emily.williams@email.com'),
(105, 'Michael Brown', '202 Oak Ave, Anytown, USA', 'michael.brown@email.com'),
(106, 'Emma Davis', '303 Maple St, Othertown, USA', 'emma.davis@email.com'),
(107, 'Christopher White', '404 Birch St, Another Town, USA', 'christopher.white@email.com'),
(108, 'Olivia Wilson', '505 Cedar St, Somewhere, USA', 'olivia.wilson@email.com'),
(109, 'Liam Martinez', '606 Pine St, Anywhere, USA', 'liam.martinez@email.com'),
(110, 'Sophia Anderson', '707 Cedar St, Elsewhere, USA', 'sophia.anderson@email.com');

INSERT INTO Payments (PaymentID, PaymentDate, PaymentType, Amount)
VALUES
(601, '2023-10-15', 'Credit Card', 54.95),
(602, '2023-10-16', 'PayPal', 42.97),
(603, '2023-10-17', 'Debit Card', 36.75),
(604, '2023-10-18', 'Cash', 23.99),
(605, '2023-10-19', 'Credit Card', 67.50),
(606, '2023-10-20', 'PayPal', 29.85),
(607, '2023-10-21', 'Debit Card', 45.20),
(608, '2023-10-22', 'Cash', 18.99),
(609, '2023-10-23', 'Credit Card', 22.75),
(610, '2023-10-24', 'Credit Card', 33.50);