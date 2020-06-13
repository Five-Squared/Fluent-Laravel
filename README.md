# Fluent-Laravel
Fluent package for Laravel 5.5+

### Install ###
```
composer require fivesqrd/fluent-laravel
```

For Laravel 5.5 and later a facade and service provider will be auto-discovered and you should be set to go:

```
#Send a test message
php artisan fluent:test me@mydomain.com
```

Using it in the app: 

```

/* Using the facade to build and send notifications on the fly */

Route::get('/notification/send/{address}', function ($address) {
    $messageId = resolve('Fluent')->message()->create()
        ->title('My Laravel Message')
        ->paragraph('Lorem ipsum dolor sit amet, consectetur adipiscing elit.')
        ->to($address)
        ->subject('Testing from Laravel')
        ->send();

    return "Message has been sent - {$messageId}";
});
```

You can further customise your setup by adding the following values to your .env file:

```
FLUENT_KEY=mykey
FLUENT_SECRET=mysecret
FLUENT_NAME=default from name 
FLUENT_EMAIL=defaultfromaddress@mydomain.com
```
