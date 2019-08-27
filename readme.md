## pet store

### Installation

```
git clone git@github.com:OmarMakled/pet-store.git
cd pet-store
wget http://getcomposer.org/composer.phar
php composer.phar install

```

### Testing

```
./vendor/bin/phpunit
```

### Running the application

**Web**

```
php -S 0.0.0.0:8080 -t public/
```

**Console**

```
php src/UI/console.php app:weekly-report
```

### Api

[see](http://ddd.omarmakled.me)
