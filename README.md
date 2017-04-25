# Lavtar

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
Get the base 64 image

```php
<img src="{{ Lavatar::getAvatarBase64('user', 120, null, 'FFFFFF') }}" />
```



