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

CREATE TABLE Orders
(
    OrderID INT AUTO_INCREMENT PRIMARY KEY,
    OrderDate DATE,
    CustomerID INT,
    TotalAmount FLOAT,
    FOREIGN KEY (CustomerID) REFERENCES Customers(CustomerID)
);

CREATE TABLE OrderItems
(
    OrderItemID INT AUTO_INCREMENT PRIMARY KEY,
    OrderID INT,
    ISBN VARCHAR(13),
    Quantity INT,
    PriceAtPurchase FLOAT,
    FOREIGN KEY (OrderID) REFERENCES Orders(OrderID),
    FOREIGN KEY (ISBN) REFERENCES Books(ISBN)
);

CREATE TABLE Suppliers
(
    SupplierID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255),
    ContactInformation VARCHAR(255),
    Address VARCHAR(255)
);

CREATE TABLE Employees
(
    EmployeeID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255),
    Role VARCHAR(50),
    ContactInformation VARCHAR(255),
    WorkSchedule VARCHAR(255)
);

CREATE TABLE Payments
(
    PaymentID INT AUTO_INCREMENT PRIMARY KEY,
    OrderID INT,
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

INSERT INTO Orders (OrderID, OrderDate, CustomerID, TotalAmount)
VALUES
(201, '2023-10-15', 101, 54.95),
(202, '2023-10-16', 102, 42.97),
(203, '2023-10-17', 103, 36.75),
(204, '2023-10-18', 104, 23.99);

INSERT INTO OrderItems (OrderItemID, OrderID, ISBN, Quantity, PriceAtPurchase)
VALUES
(301, 201, '9780061120084', 3, 29.97),
(302, 201, '9780451524935', 2, 21.98),
(303, 202, '9781400032716', 4, 35.96),
(304, 203, '9780066620992', 5, 39.95),
(305, 204, '9780553382563', 2, 25.98);

INSERT INTO Suppliers (SupplierID, Name, ContactInformation, Address)
VALUES
(401, 'ABC Books', '123 Supplier Lane, City, USA', 'PO Box 123, Supplier City'),
(402, 'XYZ Publishers', '456 Publisher St, Town, USA', '789 Printers Road, Town'),
(403, 'BookWorld Supply', '789 Book Plaza, Metro, USA', '456 Binders Ave, Metro'),
(404, 'Global Reads', '101 Distributor Rd, Capital, USA', '321 Readers Blvd, Capital');

INSERT INTO Employees (EmployeeID, Name, Role, ContactInformation, WorkSchedule)
VALUES
(501, 'Sarah Johnson', 'Sales Associate', '555-123-4567, sarah@email.com', 'Mon-Fri, 9 AM - 5 PM'),
(502, 'Michael Adams', 'Store Manager', '555-987-6543, michael@email.com', 'Mon-Sat, 10 AM - 6 PM'),
(503, 'Lisa Smith', 'Customer Service', '555-555-5555, lisa@email.com', 'Mon-Fri, 8 AM - 4 PM'),
(504, 'Robert Brown', 'Inventory Manager', '555-444-3333, robert@email.com', 'Mon-Sat, 9 AM - 5 PM');

INSERT INTO Payments (PaymentID, OrderID, PaymentDate, PaymentType, Amount)
VALUES
(601, 201, '2023-10-15', 'Credit Card', 54.95),
(602, 202, '2023-10-16', 'PayPal', 42.97),
(603, 203, '2023-10-17', 'Debit Card', 36.75),
(604, 204, '2023-10-18', 'Cash', 23.99);
