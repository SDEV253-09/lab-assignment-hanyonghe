CREATE TABLE Customers (
    CustomerID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Name CHAR(50) NOT NULL,
    Address CHAR(100) NOT NULL,
    City CHAR(30) NOT NULL
);
create table Orders
(OrderID int unsigned not null auto_increment primary key,
CustomerID int unsigned not null,
Amount float(6,2),
Date date NOT NULL,
foreign key (CustomerID) references Customers(CustomerID)
);
create table Books
(ISBN char(13)  not null  primary key,
Author char(50),
Title char(100),
Price float(4,2)
);
Create table Order_Items
(OrderID int unsigned not null,
ISBN char(13)  not null,
Quantity tinyint unsigned,
primary key (OrderID,ISBN),
foreign key (OrderID) references Orders(OrderID),
FOREIGN key (ISBN) references Books(ISBN)
);
create table Book_Reviews
(ISBN CHAR(13) NOT NULL PRIMARY KEY,
Review TEXT,
foreign key(ISBN) references Books(ISBN)
);
