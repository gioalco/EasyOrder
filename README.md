# EasyOrder
A Project for ITS120L - Application Development and Emerging Technologies

## Setup
In order to make this project work, you need to have the following installed:
* PHP
* MySQL

## Setting up the Database
To make the functionality of the website work, you need to have a database with the correct tables and data. To do so, follow these steps:
1. Open up your terminal
2. Go to 'scripts' directory
3. Run the following command: `mysql -u root -p < main.sql`
4. Enter your password
5. You should now have a database called 'EasyOrder' with all the tables.

## Running the Website
In the root directory of the project, run the command: `php -S localhost:8000`
