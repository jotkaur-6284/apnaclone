

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- table for view profile data

CREATE TABLE `basic_details` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    dob DATE NOT NULL,
    gender VARCHAR(10) NOT NULL,
    email VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO `basic_details` (`id`, `name`, `dob`, `gender`, `email`) VALUES
(1, 'Navjot','2025-03-30', 'female','email@gmail.com'),
(2, 'Kaur', '2025-03-30', 'male','jashan@.com'),
(3, 'jot kaur', '2025-03-30', 'male','jot@mattu.com');


-- table for contact page


CREATE TABLE contact_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    work_email VARCHAR(255) NOT NULL,
    mobile_number VARCHAR(20) NOT NULL,
    your_role VARCHAR(255),
    company_name VARCHAR(255) NOT NULL,
    company_size VARCHAR(50),
    submission_timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO contact_details (full_name, work_email, mobile_number, your_role, company_name, company_size)
VALUES
    ('jot', 'john@example.com', '123-456-7890', 'HR', 'abc', '200+'),
    ('kaur', 'kaur@example.com', '987-654-3210', 'HR', 'DesignHub', '1-10'),
    ('navjot kaur', 'this@example.com', '555-123-4567', 'Hr', 'bca', '200+');
