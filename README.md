# Stockomendation Test Project 

Welcome to the test project. This is a small application to manage club membership. 

We'll be asking potential candidates to complete this task as part of the recruitment process. 

### What it contains

This app is based upon the Laravel v5.5 framework. 

The following has already been created: 

1. Database structure. Look in database/migrations for details and code comments
2. Sample member data. 
2. Empty controllers for dashboard, members and subscriptions. The member controller has one method already made. 
3. Models for members, types and subs. 

### Installation 

You will need a test server running PHP and a MySQL database. A sample NGINX conf file is located at `aelodaeth.conf`, which uses PHP-FPM.

Clone this repository or download the zip file. 

Run `composer install` to install dependencies. 

Copy `.env.example` to `.env` and change the database auth details. 

Run `php artisan key:generate`. 

Run `php artisan migrate --seed` to install the database and sample data. 

#### Docker 

Alternatively, this repo is docker ready. Simply run: 
    
    docker-compose up -d
    chmod +x docker-setup.sh
    ./docker-setup.sh

The app will be ready at http://0.0.0.0/. 

### Tasks 

Please provide the following functionality. All data should be validated: 

1. Show a list of all members (this is already done, as an example)
2. Show a list of all non members 
3. Show a single member, with his/her subscription history
4. Add a new person to the database, choose a membership type and make a new payment for that member 
5. Make a new payment for an expired member 

Nice to have, but not essential. Do these if you have the time: 

6. Edit a member's details
7. Dashboard to show current vs expired members
8. CRUD for membership types 
9. A nice front end UI 
10. Unit testing 
11. Use Laravel's Auth system to create a secure login for the Club Officer 

## Help and Resources

Domain rules are in the `domain-rules.md` file. 

Laravel docs, https://laravel.com/docs/5.5/ 

If you are unfamiliar with Laravel, we recommend you read about Requests, Eloquent, Validation, Collections, and Blade Templating. 

The Carbon date time library is used, http://carbon.nesbot.com/docs/ 

## Delivery 

You can upload your code to your own public repo and send us the link, or send a .zip or tarball of the final code to us. 

We will be mainly looking to see how you organize and write your code. 

---
Copyright 2017 Stockomendation Ltd