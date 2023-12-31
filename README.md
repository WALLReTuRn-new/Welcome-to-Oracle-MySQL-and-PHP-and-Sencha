# Welcome to Oracle/MySQL and PHP and Sencha
 Project Name - Oracle and MySQL Adapter for PHP and Sencha (Version 0.1.0)
Description
This project provides an adapter for connecting to Oracle and MySQL databases using PHP version 7.4 or higher and Sencha version 6.0 or higher. The adapter for Oracle is already implemented, while the functions for MySQL are ready for use. This version, 0.1.0, serves as an initial release with basic functionality.

Prerequisites
Before using this adapter, make sure you have the following prerequisites installed on your system:

PHP (Version 7.4 or higher)
Sencha Framework (Version 6.0 or higher)
Oracle Database (Version 21) for Oracle connectivity
MySQL Database Server (Version 10.4.27) for MySQL connectivity
Installation
Clone the repository to your local machine or download the ZIP file.
Make sure to set up the required PHP, Sencha, Oracle, and MySQL configurations.
Oracle Usage
The Oracle adapter is already implemented and ready to use. Here's how you can connect to the Oracle database and perform basic operations:


// Initialize the Oracle adapter<br />
//Need Add in config.php<br />
// DB OCI
define('DB_DRIVER', 'oci');<br />
define('DB_HOSTNAME', 'localhost');<br />
define('DB_USERNAME', '');<br />
define('DB_PASSWORD', '');<br />
define('DB_DATABASE', 'localhost:1521/XE');<br />
define('DB_PORT', '3306');<br />
define('DB_PREFIX', '');<br />



// Perform a sample query<br />
$result = $this->db->query('SELECT * FROM table_name');

MySQL Usage
The functions for MySQL are ready, and you can use them to perform operations on the MySQL database. Here's how you can connect to the MySQL database and perform basic operations:


// Initialize the MySQL adapter<br />
//Need Add in config.php<br />
// DB MYSQL<br />
define('DB_DRIVER', 'mysqli');<br />
define('DB_HOSTNAME', 'localhost');<br />
define('DB_USERNAME', 'root');<br />
define('DB_PASSWORD', '');<br />
define('DB_DATABASE', 'basicsencha');<br />
define('DB_PORT', '3306');<br />
define('DB_PREFIX', '');<br />

// Perform a sample query
$result = $this->db->>query('SELECT * FROM table_name');


![Screenshot](images/DATA.png)
![Screenshot](images/CREATETABLE.png)
![Screenshot](images/DROPTABLE.png)
![Screenshot](images/INSERT.png)
![Screenshot](images/DELETE.png)
![Screenshot](images/UPDATE.png)
![Screenshot](images/UPDATE-2.png)
![Screenshot](images/UPDATE-3.png)




Contribution Guidelines
If you would like to contribute to this project, follow these steps:

Fork the repository.
Create a new branch for your feature or bug fix.
Implement your changes and improvements.
Write tests to ensure code stability (if applicable).
Submit a pull request, describing your changes and their benefits.
Reporting Issues
If you encounter any issues or have suggestions for improvements, please submit them via GitHub Issues in this repository.

License
This project is licensed under the MIT License - see the LICENSE file for details.

Contact
For any further questions or inquiries, feel free to contact us at wallreturn@gmail.com.

Thank you for using our Oracle and MySQL Adapter for PHP and Sencha! We hope it simplifies your database interactions and improves your overall development experience. Happy coding!
