#THIS PROJECT IS A WIP

```
    Unzip the file
```

Install the project packages
```
    composer install
```

Copy the .env file and add the necessary values
```
    cp .env.example .env
```

Generate the application key
```
    php artisan key:generate
```

If there is no database yet, run the migrations
```
    php artisan migrate:fresh --seed
```
