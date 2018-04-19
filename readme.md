Let's get started!

I used Homestead, a pre configured Laravel vagrant box that has PHP, MySQL etc preinstalled.

https://laravel.com/docs/5.6/homestead

Once set up, Here are my GIT project files:

https://github.com/beertastic/snatchtest (although you're probably here already)

You'll need to run the migrate command to build the DB.

WITHIN the vagrant ssh.. run

    php artisan migrate

This will prosess the files in the migrate directory.

Then use the following APi calls.. using your local URL

==================
 
POST- required variables

: username<br />
: password<br />
: email<br />
: phone  
    
    /api/testUsers
    
Errors reported if the variables do not meet required criteria

=================

GET

    /api/testusers/{id}
    
Pass a user ID, from perviously created users

===================

POST - required variables

: user_id<br />
: long<br />
: lat

    /api/testUserHistory

===================

GET

    /api/testUserHistory/{id}

Pass a user ID, from perviously created users

==================

GET 

    /api/lastpos/{user_id}

Where user_id is the required User ID

