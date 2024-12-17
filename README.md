PHPMAILER install

--

Database Structure:


```SQL
DROP DATABASE IF EXISTS bd_form_contact_basic;
CREATE DATABASE bd_form_contact_basic;
use bd_form_contact_basic;

CREATE TABlE contact_form (
	id INT auto_increment PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```