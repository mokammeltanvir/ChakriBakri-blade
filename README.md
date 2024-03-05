<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# ChakriBakri | The Job Board

A simple job listing platform.

## Installation

1. In your root folder, clone the project file using the command

```bash
  git clone https://github.com/mokammeltanvir/ChakriBakri-blade.git

```

2. Open the terminal (bash/cmd). Then go to the project folder using the command

```bash
  cd ChakriBakri-blade

```

3. Then install the required files and libraries using

```sh
composer install
```

4. Then create a .env file and generate a key for this project using the command

```sh
cp .env.example .env

php artisan key:generate
```

5. Then compile all CSS & JS files together using this command

```sh
npm install && npm run dev
```

or

```sh
yarn install && yarn run dev
```

6. Create a database in MYSQL and connect it with your project by updating .env file.

7. After connecting the db with the project, then run the command

```sh
php artisan migrate
```

```sh
php artisan db:seed
```

After completing the migration and seeding of db, you will have 1 System Admin ready for login in this project as 'admin'.

A. Admin -> Admin
Email -> admin@chakribakri.com
Pass -> password

Finally, we are ready to run our project using this command!

```sh
php artisan serve
```

The application should now be accessible at http://localhost:8000.

# Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please feel free to open an issue or create a pull request.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT)
