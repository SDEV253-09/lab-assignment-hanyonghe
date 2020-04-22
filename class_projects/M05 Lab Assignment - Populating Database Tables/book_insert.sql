use books;
insert into Customers values
(1,'julie Smith', '25 oak street', 'Airport West'),
(2,'Alan wong','1/47 main street','spenscer'),
(3,'Michelle Arthre','357 Walnut Street', 'Bloominton');
insert into Books values
('0-562-56845-8','Micheal Morgan','PHP first ediction', 34.99),
('0-312-56346-1','Tahsha Johnson','Java is the future', 24.99),
('0-356-56980-2','Bjdae	 Gucdacy','Html foundamatal 5th', 24.99),
('0-672-31769-9','Thomas Schenk','Software engineering 5th',49.99);
insert into Orders values
(null,3,69.98,'2007-12-25'),
(null,1,49.99,'2007-12-25'),
(null,2,74.98,'2017-12-21'),
(null,3,24.99,'2007-05-13');

insert into Order_Items values
(1,'0-562-56845-8',2),
(2,'0-672-31769-9',1),
(3,'0-672-31769-9',1),
(3,'0-356-56980-2',2),
(4,'0-312-56346-1',3);

insert into Book_Reviews values
('0-562-56845-8','this book is not very interesting, it also gives me a lot of thinking');
