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

## Tests
Run `./vendor/bin/phpunit tests/UsersTest.php` to run related tests to the Users Controller.
