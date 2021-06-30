
## About the App

This app demonstrate the use of Laravel fortify for implementing two-factor-authentication

##### To run the app:

- Define your database connection credential in a `.env` file. Check `.env.example` for guidance
- After setting up the database, run the db migration with the command `php artisan migrate`
- Run `npm install` to instal all js dependencies
- You may also need to run `npm run dev` command to compile all js and css dependencies
- To run the application in laravel packaged server, run the command `php artisan serve`

##### After running program:

- Register as a new user
- Scan the QR Code on your authenticator app e.g Google Authenticator
- Attempt to log in after enabling two-factor authentication
