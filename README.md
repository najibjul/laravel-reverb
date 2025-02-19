1. composer install
2. cp .env.example .env
3. php artisan key:generate
4. php artisan migrate
5. php artisan install:broadcasting
6. composer require laravel/reverb
7. BROADCAST_CONNECTION=reverb in .env
8. npm install --save-dev laravel-echo pusher-js
9. Nginx configuration https://laravel.com/docs/master/reverb#web-server
10. php artisan serve
11. npm run dev
12. php artisan queue:listen
13. php artisan reverb:start --debug
