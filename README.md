# Software Development Exercise

This application implements a simple MVC pattern to display a list of books by J. R. R. Tolkien. It provides a simple filter input to narrow results.
Additionaly, it fetches from Google Books the latest 10 ebooks from that author. Clicking on any of the top 10 ebook name will open a new window with the Google Books content.

## How it works
The initialization script creates a books table and populates it from the public openlibrary.org web service.
It implements a basic MVC pattern to handle requests by using a routing library to define the allowed HTTP verbs and paths.
It leverages from Bootstrap to get a basic look and feel, and uses jQuery to asynchronously fetch the top 10 most recent ebooks.

## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

What things you need to install the software and how to install them

```
Apache server
PHP 7.2.7
Composer
MySql Server
```

### Installing

To get started, clone the repository to a local folder and and run composer to install dependencies:

```
composer install
```
Set the proper configuration values by editing /config/config.php file.
Initialize the database by running the script:

```
php .\bin\initDb.php
```
Make sure your Apache is configure to reach the application folder.
Point your browser your Apache URL and app folder. ie:
```
http://localhost/SoftDevExcercise
```

## Author

**Diego Blanco**