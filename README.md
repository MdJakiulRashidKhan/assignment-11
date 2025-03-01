# Laravel AdminLTE Product Management

This Laravel application provides a product management system with authentication and AdminLTE integration. It features a multi-step product creation form and a dynamic product list using DataTables.

## Installation

1.  **Clone the repository:**
    ```bash
    git clone <repository_url>
    cd laravel-adminlte-product
    ```
2.  **Install Composer dependencies:**
    ```bash
    composer install
    ```
3.  **Copy `.env.example` to `.env` and configure your database:**
    ```bash
    cp .env.example .env
    ```
    * Modify the following database settings in your `.env` file:
        ```dotenv
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=your_database_name
        DB_USERNAME=your_database_username
        DB_PASSWORD=your_database_password
        ```
4.  **Generate application key:**
    ```bash
    php artisan key:generate
    ```
5.  **Run database migrations:**
    ```bash
    php artisan migrate
    ```
6.  **Install Node.js dependencies:**
    ```bash
    npm install
    ```
7.  **Compile assets:**
    ```bash
    npm run dev
    ```
8.  **Install Laravel Breeze:**
    ```bash
    composer require laravel/breeze --dev
    php artisan breeze:install blade
    ```
9.  **Publish AdminLTE assets:**
    ```bash
    php artisan vendor:publish --provider="JeroenNoten\LaravelAdminLte\ServiceProvider" --tag=assets
    php artisan vendor:publish --provider="JeroenNoten\LaravelAdminLte\ServiceProvider" --tag=configs
    ```
10. **Install Yajra Datatables:**
    ```bash
    composer require yajra/laravel-datatables-oracle:"~9.0"
    php artisan vendor:publish --tag=datatables
    ```
11. **Install Hashids**
    ```bash
    composer require hashids/hashids
    ```

## Usage

1.  **Start the development server:**
    ```bash
    php artisan serve
    ```
2.  **Open your browser and navigate to `http://127.0.0.1:8000`.**
3.  **Register a new user or log in with existing credentials.**
4.  **Access the dashboard and product management features.**
5.  **Use the multi-step form to create new products.**
6.  **View, edit, and delete products from the product list using DataTables.**

## Features

* **Authentication:** Laravel Breeze for user authentication (login, registration).
* **AdminLTE Integration:** AdminLTE theme for a clean and responsive UI.
* **Product Management:** CRUD functionality for managing products.
* **Multi-Step Form:** Product creation using a multi-step form with client-side validation.
* **DataTables:** Dynamic product list with pagination, search, and filtering using Yajra DataTables.
* **Encrypted Product Ids:** Hashids used to encrypt product IDs in the datatables.
* **Responsive Design:** AdminLTE ensures a responsive design across various devices.

## Contributing

Contributions are welcome! Please feel free to submit a pull request.
