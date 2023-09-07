## Project config

By default this project creates and connects to a database called: project-yzh-86 via XMAPP.

## Project setup

In order to setup this project, `npm install` and `php artisan migrate` must be first entered vis command line. 

Due to password encryption, the client/end-user should first startup the project using `php artisan serve`, and then register its user account via the app's UI.

It is also recommended that after created the first account, go into database and change the user role to 'admin' to get full access of all the functions include in this project. 

## Populate database

After resgistration of the first account, client can then find sql folder under root folder, and login to MySql to run the two sql files which will populate the database for a sample view of the data collections.

## Licenses

This project uses open-sourced Laravel framwork and Laravel Breeze authentication.

This project also retrieves data from Unsplash Image API.