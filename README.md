

## Project Set up
### 1. Clone the repository
### 2. Install packages using composer
    composer install
### 3. Create the .env file by copying the .env.example
    cp .env.example .env
### 4. Database setup
    Set up database connection in the .env file
### 5: Email Configuration
    Configure email: if using Gmail, ensure you enable less secured app to your GMAIL account.
### 6. Run the seeder to create the system administrator
    php artisan db:seed
### 7. Serve the application
    php artisan serve
### 8. Access backend:
    127.0.0.1/login
### 9: check in your seeder file for login credentials.
