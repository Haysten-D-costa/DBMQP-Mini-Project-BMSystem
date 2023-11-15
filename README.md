# BOOK STORE MANAGEMENT SYSTEM (DBMQ MINI-PROJECT)....

<p>
    A bookstore management system is a software application designed to help bookstore owners and managers efficiently manage their bookstore's operations. 
</p>

## `ENTITIES (Tables / Relations) : `
- `Books`(ISBN(PK), Title, Author, Genere, Price, Quantity, Publisher, PublicationDate)`,
- `Customers`(CustomerID(PK), Name, ContactInformation, Email),
- `Payments`(PaymentID(PK), OrderID(FK), PaymentDate, PaymentType, Amount).

## `BOOKS PAGE : `

- `Display Books ` 
    - Presents a comprehensive list of all books available in the bookstore database. 
    - The page showcases essential book details such as ISBN, Title, Author, Genre, Price, Quantity, Publisher, and Publication Date. 
    - To enhance user experience, the page incorporates pagination or infinite scrolling for easy navigation through an extensive collection of books.

- `Add New Book`
    - Facilitates the addition of new books to the database through a user-friendly form. 
    - The form includes input fields for essential attributes like ISBN, Title, Author, and more, ensuring a seamless process for updating the bookstore inventory.

- `Edit/Update Book `
    - Enables users to modify and update existing book information effortlessly. 
    - The page features a form similar to the "Add New Book" form, pre-filled with the current data for quick and efficient editing.

- `Search and Filter `
    - Enhances user accessibility by incorporating a search bar and various filters. 
    - Users can easily locate specific books based on attributes such as ISBN, Title, Author, etc.

## `PAYMENTS PAGE : `

- `Display Payments`
    - Provides a clear overview of payment records, featuring columns such as Payment ID, Customer ID, Amount, and Payment Date. 
    - Users can quickly access payment details for reference.

- `Add New Payment`
    - Facilitates the recording of new payments through a dedicated form. 
    - Input fields capture relevant payment information, streamlining the process of updating payment records.

- `View Customer Payments`
    - Allows users to view payment history associated with a particular customer. 
    - By clicking on a customer's name, users can access a comprehensive payment log for that specific customer.

- `Filter by Date or Amount`
    - Enhances usability with filtering options, enabling users to narrow down payment records based on specific date ranges or amounts.

## `CUSTOMER PAGE : `

- `Display Customers`
    - Presents a comprehensive list of all customers, showcasing essential details such as Customer ID, Name, Email, and Phone Number. 
    - This page serves as a reference point for managing customer information.

- `Add New Customer`
    - Streamlines the process of adding new customers to the database through an intuitive form. 
    - Input fields capture customer details, ensuring accurate and up-to-date records.

- `Edit/Update Customer Information`
    - Empowers users to modify and update existing customer information seamlessly.
    - The page features a form similar to the "Add New Customer" form, pre-filled with current customer data for efficient editing.

- `View Customer Details`
    - Enables users to access detailed information about a specific customer by clicking on their name. 
    - This feature provides a more in-depth understanding of individual customer profiles.

- `Search and Filter`
    - Improves user experience by incorporating a search bar and various filters. 
    - Users can easily locate specific customers based on attributes such as name, email, or phone number.

### Demo : 

![BMSystemDemo](/images/Pages/HomePage.png)
<hr>

![BMSystemDemo](/images/Pages/LoginPage.png)
<hr>

![BMSystemDemo](/images/Pages/BooksPage.png)
<hr>

![BMSystemDemo](/images/Pages/Modify.jpeg)
<br>

![BMSystemDemo](/images/Pages/Books2.jpeg)
<hr>

![BMSystemDemo](/images/Pages/CustomerPage.png)
<hr>

![BMSystemDemo](/images/Pages/PaymentsPage.png)
<hr>

