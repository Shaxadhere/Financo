create table if not exists tbl_usertype
(
PK_ID int PRIMARY KEY AUTO_INCREMENT,
UserType varchar(50)
);

CREATE TABLE IF NOT EXISTS tbl_user
(
PK_ID int PRIMARY KEY AUTO_INCREMENT,
FullName varchar(100),
Status bit,
ExpiryDate date,
FK_UserType int,
constraint FK_UserType foreign key(FK_UserType) references tbl_usertype(PK_ID),
);

CREATE TABLE IF NOT EXISTS tbl_product
(
PK_ID int PRIMARY KEY AUTO_INCREMENT,
ProductName varchar(100),
Problem varchar(200),
PurchasedFrom varchar(100),
Processor varchar(100),
PurchasedIn int,
DateOfPurchase date,
Quantity int,
Accessories varchar(200)
RamType varchar(50),
StorageType varchar(50)
Description varchar(1000)
);

CREATE TABLE IF NOT EXISTS tbl_sales
(
PK_ID int PRIMARY KEY AUTO_INCREMENT,
FK_Product int,
constraint FK_Product foreign key(FK_Product) references tbl_product(PK_ID),
Date date,
CustomerName varchar(50),
CustomerContact varchar(50),
Ram varchar(100),
Storage varchar(100),
Amount int
);

CREATE TABLE IF NOT EXISTS tbl_ram
(
PK_ID int PRIMARY KEY AUTO_INCREMENT,
RamName varchar(100),
Memory int,
RamType varchar(50),
PurchasedIn int
);

CREATE TABLE IF NOT EXISTS tbl_hdd
(
PK_ID int PRIMARY KEY AUTO_INCREMENT,
HddName varchar(100),
Memory int,
PurchasedIn int
)