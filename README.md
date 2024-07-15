Step:-1
    Need all this to run this project
    1. Nodejs
    2. Laragon/Xampp
    3. composer
    4. vscode
    5. git

Step:-2
    1st clone this code set .env for database and then run this all command:
      1. composer update
      2. php artisan migrate (before database name set in your mysql database)
      3. npm install
      4. npm run dev
      5. php artisan serve (another terminal)

Step:-3
    1st go to home page and if you need to make product go to dashboard 
    1. 1st register a user
    2. go to database and edit user role (user to admin/super admin)
    3. after complete this you may use dashbaord route http://127.0.0.1:8000/dashboard
       here you can create category, subcategory and product.
    4. http://127.0.0.1:8000/product here see all product those created in dashbaord.
    5. only admin and super admin can see dashboard page user can't see this