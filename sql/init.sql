-- Table: Customers
CREATE TABLE IF NOT EXISTS Customers (
    Customers_ID int  NOT NULL,
    Customers_Name varchar(32)  NOT NULL,
    Customers_PhoneNumber varchar(15)  NOT NULL,
    Customers_EMail varchar(256)  NULL,
    Customers_Address varchar(256)  NULL,
    PRIMARY KEY (Customers_ID)
);

-- Table: Orders
CREATE TABLE IF NOT EXISTS Orders (
    Orders_ID int  NOT NULL,
    Orders_Days int  NOT NULL,
    Orders_StartDate date  NOT NULL,
    Orders_TakeDate date  NULL,
    Orders_Customers_ID int  NOT NULL,
    PRIMARY KEY (Orders_ID),
    FOREIGN KEY Orders_Customers (Orders_Customers_ID) REFERENCES Customers (Customers_ID)
);

-- Table: Services
CREATE TABLE IF NOT EXISTS Services (
    Services_ID int  NOT NULL,
    Services_Name varchar(32)  NOT NULL,
    Services_UnitType varchar(16)  NOT NULL,
    PRIMARY KEY (Services_ID)
);

-- Table: Items
CREATE TABLE IF NOT EXISTS Items (
    Items_ID int  NOT NULL,
    Items_Unit int  NOT NULL,
    Items_Services_ID int  NOT NULL,
    Items_Orders_ID int  NOT NULL,
    PRIMARY KEY (Items_ID),
    FOREIGN KEY Items_Service (Items_Services_ID) REFERENCES Services (Services_ID),
    FOREIGN KEY Items_Orders (Items_Orders_ID) REFERENCES Orders (Orders_ID)
);

-- Table: Payments
CREATE TABLE IF NOT EXISTS Payments (
    Payments_ID int  NOT NULL,
    Payments_Amount decimal(8,2)  NOT NULL,
    Orders_Orders_ID int  NOT NULL,
    PRIMARY KEY (Payments_ID),
    FOREIGN KEY Payments_Orders (Orders_Orders_ID) REFERENCES Orders (Orders_ID)
);

-- Table: ServicePrices
CREATE TABLE IF NOT EXISTS ServicePrices (
    ServicePrices_Services_ID int  NOT NULL,
    ServicePrices_Days int  NOT NULL,
    ServicePrices_PricePerUnit decimal(8,2)  NOT NULL,
    PRIMARY KEY (ServicePrices_Services_ID,ServicePrices_Days),
    FOREIGN KEY ServicePrices_Service (ServicePrices_Services_ID) REFERENCES Services (Services_ID)
);