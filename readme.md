# Laravel Metro Dashboard
- Laravel Framework v5.2
	https://github.com/laravel/laravel
- Bootstrap Metro Dashboard  
	http://jiji262.github.io/Bootstrap_Metro_Dashboard/
- Entrust (Roles)
	https://github.com/Zizaco/entrust


Run

	# Install Composer dependencies
	```
	composer install
	```	
	# Rename env.example to .env and fill in all the keys and secrets and also generate a secure key for the app using:
	```	
	php artisan key:generate
	```	

	Configure database ( see Laravel docs )
	# Run your migrations
	```
	php artisan migrate
	```
	
	```
	php artisan serve
	```