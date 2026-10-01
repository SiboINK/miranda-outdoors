# Miranda Outdoors

A PHP and MySQL website for a Kenosha landscaping and concrete business. The site includes service information, a photo gallery, a quote-request form, and pages for viewing, editing, and deleting requests.

## Built with

PHP, MySQL, PDO, HTML, and CSS.

## Features

- Home, services, gallery, and contact pages.
- Quote requests stored in MySQL.
- Request management pages for viewing, editing, and deleting records.
- Prepared statements in a shared database access file.
- Escaped output when displaying request information.
- Database setup script and a message when the connection is unavailable.

## Run locally

1. Install PHP with the PDO MySQL extension and MySQL, or use XAMPP.
2. Import `setup.sql` into MySQL to create the database and request table.
3. Copy `config.example.php` to `config.local.php` and enter your local database username and password. The local configuration file is excluded from Git.
4. Put the project in your local web server's document folder, or run `php -S localhost:8000` from the project folder.
5. Open `http://localhost:8000` when using PHP's development server.

Use the contact page to submit a sample request, then open `requests.php` to view, edit, or delete it. Without a configured database, the public information pages can still be viewed.

## Project files

- `database.php`: loads local credentials and creates the PDO connection.
- `request_db.php`: database functions for quote requests.
- `contact.php`: quote-request form.
- `requests.php`, `edit_request.php`, `delete_request.php`: request management.
- `setup.sql`: database schema.
- `main.css`: site styling.

## Status

Portfolio project for local demonstration. The request management pages do not currently include authentication or CSRF protection. This repository publishes the project source; it is not a live business service.
