run
```
composer install
symfony server:start
```

send a post request to

```
http://127.0.0.1:{port}/bug
```

with a payload like

```
{
    "name": "order name",
    "bookId": 2
}
```

observe

```
Doctrine\ORM\EntityManager::initializeObject(): Argument #1 ($obj) must be of type object, int given, called in
```
