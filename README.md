# Lavtar

## perview

![Preview](https://raw.githubusercontent.com/lshorz/md_images/master/hello.png)

![Preview](https://raw.githubusercontent.com/lshorz/md_images/master/t.png)

### Installation



> $ composer require lshorz/lavatar

```php
'providers' => [
    ...
    
    Lshorz\Lavatar\LavatarServiceProvider::class,
],
```

```php
'aliases' => [
    ...
    
    'Lavatar' => Lshorz\Lavatar\Facades\Lavatar::class,

],
```

### Example
Display image

```php
Lavatar::displayImage('user');
```
or use helper

```php
lavatar_img('Hello');
```


Get the base64 uri

```php
<img src="{{ Lavatar::getAvatarBase64('user', 120, null, 'FFFFFF') }}" />
```
or
```php
Route::get('/test', function(){
   return lavatar_base64('hello');
});
```


