CREATE DATABASE job_applications;
USE job_applications;

CREATE TABLE applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    programmingLanguage VARCHAR(50),
    yearsExperience INT,
    expectedSalary DECIMAL(10,2),
    dateAdded TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO applications
    (firstName, lastName, email, programmingLanguage, yearsExperience, expectedSalary, dateAdded)
VALUES
    ('Robert Julien', 'Paaño', 'robertpaano@gmail.com', 'Python', 1, 10000.00, '2025-10-18 08:30:00');
