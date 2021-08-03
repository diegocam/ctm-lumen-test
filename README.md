# CTM Test
## Task
CTM is starting a new marketing campaign to let people know about our new widgets. Using a IDE of your choice, complete the following:
1. A RESTful api that will record in a database:
    - user's email
    - opt-in
    - first name
    - last name
2. Database schema: Show SQL create table statement
3. Bonus: Allow a person to opt out of the email campaign


## Instructions
This creates a small API with two methods: store, and update. These two methods take care of storing user data and updating it. In the case above, it will make sure to use validation for any data submitted and will allow to edit a user's `opt_in` option.

To run it locally you must first do the following:
1. Setup a local database
2. Copy `.env.example` to a new file called `.env`
3. Update the `DB_*` configs in the `.env` file to match your local database configuration
4. Use [Postman](https://www.postman.com/), or any application of your choice to make the following requests:
   1. `POST /register`
   2. `PUT /user/{user_id}`

## Tests
Run `./vendor/bin/phpunit tests/UsersTest.php` to run related tests to the Users Controller.
