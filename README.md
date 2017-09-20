# Fluent-Laravel
Fluent package for Laravel

### Install ###
```
composer require fivesqrd/fluent-laravel
```

For Laravel 5.5 and later a facade and service provider will be auto-discovered and you should be set to go:
```
Route::get('/notification/send/{email}', function ($email) {
    return \Fluent::message()->create()
        ->setTitle('My Laravel Message')
        ->addParagraph('Lorem ipsum dolor sit amet, consectetur adipiscing elit.')
        ->to($email)
        ->subject('Testing it')
        ->send();
});
```

You can further customise your setup by adding the following values to your .env file:

```
FLUENT_KEY=mykey
FLUENT_SECRET=mysecret
FLUENT_NAME=default from name 
FLUENT_EMAIL=defaultfromaddress@mydomain.com
```
