# Simple-API-in-PHP
How to Create a simple API in PHP

First of all Make sure you have PHP and a web server like Apache or Nginx installed on your computer.

create a basic api in php
First of all Make sure you have PHP and a web server like Apache or Nginx installed on your computer.

Create a Directory Structure:
Create a directory for your project. Inside this directory, create an index.php file and a folder for your API (e.g., api). The api folder will contain PHP files for each endpoint.

Create the index.php File:

Create API Endpoints:

Inside the api folder, create PHP files for each endpoint you want to create. For example, let’s create a simple hello.php endpoint that returns a JSON response.

Testing the API:
You can now access your API using URLs like http://localhost/api/hello in your web browser or by making HTTP requests using tools like cURL or Postman.

Example cURL request:

curl http://localhost/api/hello

You should receive a JSON response like:

{"message":"Hello, World!"}
