# Laravel Complete Blog Development
This is a Blog Development Tutorial Series on Youtube. This project is made by <a href="https://shepanpal.com" target="_blank">Shepan Pal</a> for the tutorial Purpose.


## Project Live Link
[Live Link ⇨ ](https://bcsblog.herokuapp.com/)

#### Project Key Matrics
- Laravel v7.0
- Frontend Template [(MiniBlog by Colorlib)](https://colorlib.com/wp/template/miniblog/)
- Admin Template [(Admin LTE 3)](https://adminlte.io/themes/dev/AdminLTE/index.html)


#### Setup Project
```bash
# clone the repo
https://github.com/shepanpal/blog.git laravel-blog

# install composer dependency
composer install

# create a environment file
cp .env.example .env

# set the Application key
php artisan key:generate

# comment database query in AppServiceProvider.php like this
// $categories = Category::take(5)->get();
// View::share('categories', $categories);

// $setting = Setting::first();
// View::share('setting', $setting);

# setup the database credentials and migrate database with seeders
php artisan migrate --seed

# enable the database query code in AppServiceProvider.php like this
$categories = Category::take(5)->get();
View::share('categories', $categories);

$setting = Setting::first();
View::share('setting', $setting);
```



