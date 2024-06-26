-- Get price for every Orders
SELECT Orders_ID, SUM(ServicePrices_PricePerUnit * Items_Unit) FROM Orders
JOIN Items ON Items_Orders_ID = Orders_ID
JOIN ServicePrices ON Items_Services_ID = ServicePrices_Services_ID AND Orders_Days = ServicePrices_Days
GROUP BY Orders_ID;
