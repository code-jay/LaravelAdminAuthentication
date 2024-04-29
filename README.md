<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# Admin and User Authentication in Laravel 11

## In this code repository, added the feature of Authentication for Admin and normal user

Run Composer install command to download dependency:

composer install

Create .env file

Add your MySQL server & database info in .env file:


To seed Admin and User account info Run:

php artisan migrate 

Run seeder command to insert test logins for Admin and User

php artisan db:seed

It may ask for Key. Click generate Key on error page.


##  Test Login Urls

User Login URL : http://localhost:8000/login

Email: test@example.com

Password: password


Admin Login URL : http://localhost:8000/admin

Email: admin@yourdomain.com 

Password: secret


##  Script Author
Jay Ram Singh

LinkedIn : https://www.linkedin.com/in/jayram/

Twitter : https://twitter.com/jayrams

Facebook : https://www.facebook.com/jayrsingh








