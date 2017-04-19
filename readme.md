#Skater.Space

##Prerequisites

##Installation
1. Pull from or git repository.
2. Run **composer install**.
3. Create .env file and run php artisan key:generate if the .env file does not have an existing value for the key.
4. Ensure .env files includes database credentials, S3 credentials, and SES credentials per the examples in .env.example
5. Run **php artisan migrate --seed**.
6. Run **php artisan passport:install**.
7. Run **php artisan passport:client --password** to enable password token grant through web/mobile app
8. Run **php artisan passport:client --personal** to enable token generation though the API user registration endpoint. This Personal Access Client MUST BE NAMED "register"