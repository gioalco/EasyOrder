# EasyOrder
A Project for ITS120L - Application Development and Emerging Technologies

## Setup
In order to make this project work, you need to have the following installed:
* XAMPP
  * PHP
  * MySQL
* node.js
  * dotenv

## Setting up the Database
To make the functionality of the website work, you need to have a database with the correct tables and data. To do so, follow these steps:
1. Open up your terminal
2. Go to 'scripts' directory
3. Run the following command: `mysql -u root -p < main.sql`
4. Enter your password
5. You should now have a database called 'EasyOrder' with all the tables.

## Running the Website
[//]: # (In the root directory of the project, run the command: `php -S localhost:8000`)
[//]: # (In the htdocs folder of XAMPP, remove all of the files or move them out of the directory. Then put all the project files onto the htdocs folder. Start apache server from the GUI of XAMPP.)
In the htdocs folder of XAMPP, make a folder 'EasyOrder'. Then in Apache's httpd.conf in XAMPP, find DocumentRoot and Directory and change it to the absolute location of the 'EasyOrder'. In default installation, this can look like: `DocumentRoot "C:/xampp/htdocs/EasyOrder"
<Directory "C:/xampp/htdocs/EasyOrder">`
Then start the Apache server and open 'localhost' in the browser.

## Running the Chatbot
In the EasyOrder directory, open your terminal and run the command: `node --env-file=.env server.js`
