# theuploader. A simple system to upload an excel list, parse the contents and save it to the database
Upload a valid Excel File. Parse and save contents in a table.

#Setup
1. Open class/myDBClass.php
2. Change $dbhost, $dbuser, $dbpass, $dbname to your proper connection values
3. Customer Table name can also be changed here, $customersTable and users table, $usersTable
4. Import SQL file, theuploader.sql it should create a schema named theuploader with 2 tables, customer_info and users
5. A file named seeder.php can be edited to populate the users table with a login.
6. Run the web app
