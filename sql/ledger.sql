-- Misal kita mempunyai tabel Ledger yang melakukan logging
-- untug dan biaya yang keluar.

-- Membikin Tabel Baru bernama Ledger
DROP TABLE IF EXISTS Ledger;
CREATE TABLE Ledger (
    Ledger_ID INT AUTO_INCREMENT PRIMARY KEY,
    Ledger_Note VARCHAR(255),
    Ledger_Amount DECIMAL(10,2)
);

-- Membikin sebuah prosedur yang mempunynai input paymentID
-- dan akan melakukan update ke tabel Ledger jika ada sebuah
-- pembayaran
DROP PROCEDURE IF EXISTS LogPayment;
CREATE PROCEDURE IF NOT EXISTS LogPayment(IN paymentID INT)
BEGIN
    DECLARE paymentAmount DECIMAL(10, 2);

    SELECT Payments_Amount INTO paymentAmount
    FROM Payments
    WHERE Payments_ID = paymentID;

    INSERT INTO Ledger (Ledger_Note, Ledger_Amount)
    VALUES ('Revenue', paymentAmount);
END;

-- Bikin sebuah trigger sehingga LogPayment
-- akan dijalankan ketika tabel Payment
-- dilakukan INSERT
DROP TRIGGER IF EXISTS LogPaymentAfterInsertPayment;
CREATE TRIGGER LogPaymentAfterInsertPayment
AFTER INSERT ON Payments
FOR EACH ROW
BEGIN
    CALL LogPayment(NEW.Payments_ID);
END;