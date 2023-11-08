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
    Amount FLOAT,
    FOREIGN KEY (OrderID) REFERENCES Orders(OrderID)
);

INSERT INTO Books (ISBN, Title, Author, Genre, Price, Quantity, Publisher, PublicationDate)
VALUES
('9780061120084', 'To Kill a Mockingbird', 'Harper Lee', 'Fiction', 9.99, 50, 'HarperCollins', '2006-05-23'),
('9780451524935', '1984', 'George Orwell', 'Fiction', 10.99, 30, 'Signet', '1950-06-08'),
('9781400032716', 'The Great Gatsby', 'F. Scott Fitzgerald', 'Fiction', 8.99, 40, 'Scribner', '2004-03-13'),
('9780066620992', 'The Catcher in the Rye', 'J.D. Salinger', 'Fiction', 7.99, 25, 'Little, Brown', '2001-05-01'),
('9780553382563', 'Dune', 'Frank Herbert', 'Science Fiction', 12.99, 20, 'Ace', '2019-08-27');

INSERT INTO Customers (CustomerID, Name, ContactInformation, Email)
VALUES
(101, 'John Smith', '123 Main St, Anytown, USA', 'john.smith@email.com'),
(102, 'Jane Doe', '456 Elm St, Othertown, USA', 'jane.doe@email.com'),
(103, 'David Johnson', '789 Oak St, Another Town, USA', 'david.johnson@email.com'),
(104, 'Emily Williams', '101 Pine St, Somewhere, USA', 'emily.williams@email.com');

INSERT INTO Payments (PaymentID, OrderID, PaymentDate, PaymentType, Amount)
VALUES
(601, 201, '2023-10-15', 'Credit Card', 54.95),
(602, 202, '2023-10-16', 'PayPal', 42.97),
(603, 203, '2023-10-17', 'Debit Card', 36.75),
(604, 204, '2023-10-18', 'Cash', 23.99);

 