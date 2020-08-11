#!/bin/bash

php artisan migrate
php artisan serve --host 0.0.0.0:8000
tail -f /dev/null &