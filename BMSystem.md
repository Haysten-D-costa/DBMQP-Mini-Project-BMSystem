# BOOK STORE MANAGEMENT SYSTEM (DBMQ MINI-PROJECT)....

<p>
    A bookstore management system is a software application designed to help bookstore owners and managers efficiently manage their bookstore's operations. 
</p>

###   Entities (Tables / Relations) : 
- `Books`(ISBN(PK), Title, Author, Genere, Price, Quantity, Publisher, PublicationDate)`,
- `Customers`(CustomerID(PK), Name, ContactInformation, Email, LoyaltyPoints),
- `Orders`(OrderID(PK), OrderDate, CustomerID(FK), TotalAmount),
- `OrderItems`(OrderItemID(PK), OrderID(FK), ISBN(FK), Quantity, PriceAtPurchase),
- `Suppliers`(SupplierID(PK), Name, ContactInformation, Address),
- `Employees`(EmployeeID(PK), Name, Role, ContactInformation, WorkSchedule),
- `Payments`(PaymentID(PK), OrderID(FK), PaymentDate, PaymentType, Amount).

###   Relations : 
- Order-OrderItem : One-to-Many. Each order can have multiple order items.
- OrderItem-Book  : One-to-Many. Each order item is associated with one book.
- Book-OrderItems : One-to-Many. Each book can appear in multiple order items.
- Supplier-Book   : One-to-Many. Each supplier can provide multiple books.
- Employee-Order  : One-to-Many. Each employee can process multiple orders.
- Order-Payments  : One-to-One . Each order is associated with one payment.
- Customer-Orders : One-to-Many. Each customer can place multiple orders.

Testing for updates....