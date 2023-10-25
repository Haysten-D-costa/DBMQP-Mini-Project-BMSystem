CREATE TABLE /* IF NOT EXISTS */ Books
(
    ISBN int(5) PRIMARY KEY,
    Title varchar(20),
    Author varchar(20),
    Genere varchar(10),
    Price float,
    Quantity int(5),
    Publisher varchar(20),
    PublicationDate date
);

CREATE TABLE Customers
(
    CustomerID int(5) PRIMARY KEY,
    Name varchar(20),
    ContactInformation varchar(50),
    Email varchar(20),
    LoyaltyPoints varchar(20)
);