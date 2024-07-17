# Course Laravel-vue by Laravel Creative :-) 

Для установки Laravel 11 требуется php 8.2+.

Устанавливаем php-fpm

```apacheconf
# Ставим php-fpm в Ubuntu
apt install -y php php-fpm
# Добавим поддержду нескольких версий php
apt install software-properties-common
add-apt-repository ppa:ondrej/php
```

Устанавливаем нужные версии php

```apacheconf
apt install -y php7.4 php7.4-fpm
## или другую версию php
apt install -y php8.0 php8.0-fpm
apt install -y php8.2 php8.2-fpm
apt install -y php8.3 php8.3-fpm
```

Переключение версий php

```apacheconf
sudo update-alternatives --config php
```

Обновляем пакеты

```apacheconf
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt install apt-transport-https lsb-release ca-certificates
sudo apt upgrade
```

Устанавливаем расширения

```apacheconf
sudo apt-get install php8.3-curl
sudo apt-get install php8.3-intl
sudo apt-get install php8.3-mbstring
sudo apt-get install php8.3-gd
sudo apt-get install php8.3-zip
sudo apt-get install php8.3-pgsql
sudo apt-get install php8.3-dom
sudo apt-get install php8.3-xml
```

Устанавливаем Laravel 11

```apacheconf
composer create-project laravel/laravel rocks
# или находясь в папке проекта
composer create-project laravel/laravel
```

Установить PostgreSQL

```apacheconf
sudo apt-get install php-pgsql
```

Проверить статус 

```apacheconf
# проверим статус
systemctl status postgresql 
# или так
pg_isready
```

Migrate

```apacheconf
php artisan migrate
# выдаст ошибку, если не настроено подключение к БД
```

## Lesson 1: Модели и миграции

## Lesson 2: Route Controller Model Resource

## Lesson 3: Rest API Request Postman

## Lesson 4: One-one one-many many-many

## Lesson 5: Seeder Factory One-many-через-one-one

## Lesson 6: Morph one-one one-many many-many