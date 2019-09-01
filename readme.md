

## Lwitter API

Small application to get last 50 tweets from any account by command php artisan import:tweets {account}, where {account} is the account you want to get tweets from.
<p>You must have a Twitter Developer Account.
<p>To install:
php artisan migrate

To create command:
php artisan make:command TweetImport. 
<p>This command is able to access an external Twitter API and save  the last 50 tweets in lwitterapi_db database.

I'm developing the front-end side with VueJS, to show a list with tweets and paginate them.

