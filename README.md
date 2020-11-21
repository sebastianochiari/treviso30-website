## Treviso30News Online Website
Online website for a local newspaper Treviso30News, with private CMS in order to publish contents such blog posts and magazine and to manage users, the editorial staff and sponsors.

### Setup
How to setup this Laravel project after you cloned from GitHub.
1. Clone GitHub repo for this project locally
        git clone projectname
2. `cd` into your project
3. Install Composer Dependencies
        composer install
4. Install NPM Dependencies
        npm install
5. Create a copy of your .env file
        cp .env.example .env

6. Generate an app encryption key
        php artisan key:generate
7. Create an empty database for our application
8. In the .env file, add database information to allow Laravel to connect to the database
9. Migrate the database
        php artisan migrate
10. [Semi-Optional]: Seed the database
        php artisan db:seed
