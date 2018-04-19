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



====================================

TODO: 

Code comments... I've not added comments, I'll do that soon, if time allows.

Tests... I created one but felt I was running out of test time]

Username validation, I exclude any usernames containign car, dog, horse. but the 4 words that over write that rule are not checked for yet. I'll creack on and maybe I'll get it done by the time you read this though!!

Maybe humanise the validation error messages? I created custom Laravel custom rules for the cat, dog issue.. but I feel I could make that a little prettier.

Add an authentication layer to the api calls.. Laravel does this wonderfully, but it was a layer I didn't do due to time restraints.

