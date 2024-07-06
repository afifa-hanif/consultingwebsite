-- Create database (if not already created)
CREATE DATABASE ConsultingWebsite;

-- Use the created database
USE ConsultingWebsite;

-- Create table for Contact Us form submissions
CREATE TABLE ContactUs (
    ContactID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Subject VARCHAR(150) NOT NULL,
    Message TEXT NOT NULL,
    SubmissionDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
    meassage varchar(20)
);
INSERT INTO `contact us':(' ContactID'.'email','message') 
(1,'star','star@gamil.com')
(2,'av','av@gamil.com')
(3,'af','af@gamil.com')
(4,'as','af@gamil.com')

