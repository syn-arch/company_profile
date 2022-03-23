-   git clone https://github.com/syn-arch/company_profile.git
-   cd company_profile
-   composer install
-   npm install
-   copy .env.example .env

-   setting database pada .env
    DB_PORT=3306
    DB_DATABASE=company_profile
    DB_USERNAME=root
    DB_PASSWORD=

-   php artisan key:generate
-   php artisan migrate
-   php artisan db:seed
-   php artisan storage:link
-   php artisan serve
