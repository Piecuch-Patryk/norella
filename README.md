<p align="center"><a href="https://devpat.online/projects/norella/public" target="_blank"><img src="storage/app/public/assets/logo/norella.png" width="400" alt="Norella Logo"></a></p>

<p align="center"><a href="https://devpat.online/projects/norella/public" target="_blank">website</a></p>

## About

### Description

Norella is a web application build with Laravel 9 and Bootstrap 5. It is Content Managment System with products and each product has a category assigned.  

### Demo
Visit <a href="https://devpat.online/projects/norella/public" target="_blank">here</a> to click through the entire application.  

## Installation

### Install via cli

Use `git clone https://github.com/Piecuch-Patryk/norella` to clone project.  
Type `cd norella` to go to norella folder.  
Install dependencies `composer-install`  
Change database credentials in `.env` file.  
Create database with the same name as specified in `.env` file.  
Type `php artisan migrate --seed` to create and seed tables in database.  

### Run via cli

`cd norella`  
`php artisan serve`  
`npm install && npm run dev`  

## Account

### Admin credentials

Go to **/login** to visit login page. Registration is disabled, so you can use existing account to login.  
Login: *admin@page.com*  
Password: *admin1234*  

## Tasks  

### Finished

- [x] authentication (login/reset password)
- [x] products (CRUD) - many to many relation with categories
- [x] categories (CRUD) - many to many relation with products
- [x] reviews (CRUD) - no relations
- [x] mobile-first layout
- [x] Readme.md

### To Do

- [ ] multilanguage  
- [ ] reviews - many to one relation with products  





