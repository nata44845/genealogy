# План проекта Genealogy

Настраиваем среду выполнения
[setup.md](setup.md)

## Шаг 1. Создаем новый проект

В VSCode открыть папку C:\Nata\git-nata

```
symfony check:requirements 

symfony new --webapp genealogy
```

Если выдает ошибку

```
composer config -g --disable-tls false

symfony new --webapp genealogy
```
Открываем в VSCode папку genealogy, копируем в нее composer.phar

Можно запустить локальный сервер, проверить, что все работает

```
symfony server:start

http://127.0.0.1:8000 
```

## Шаг 2. Изучаем, где у нас что

bin - не трогаем
config - настройки
migrations - тут миграции в базу данных, разберем потом
public - отсюда запускается сам проект, не трогаем
src - наша основная папка, с ней мы будем работать
	Controller - тут процедуры для выбора данных
	Entity - тут классы - сущности
	Repository - тут запросы из базы
templates - наши шаблоны, в них будем вставлять данные
tests - хз
transitions - хз
var - временные данные, журналы и тд, теоретически можно аккуратно чистить
vendor - не трогаем, сюда у нас composer ставит пакеты, на git они не уходят, если клонируешь проект с git каждый эти пакеты ставит у себя сам
.env - шаблон для настроек
composer.json - список установленного composer

## Шаг 3. Создаем Controller

```
C:\Nata\git-nata\genealogy> php bin/console make:controller

DefaultController
```

Проверяем его в папке src/Controller

## Шаг 4. Создаем Controller Crm

В папке src/Controller создаем папку Crm

```
C:\Nata\git-nata\genealogy> php bin/console make:controller

crm\DefaultController
```

## Шаг 5. Пишем заголовки страниц

Идем в папку templates, находим страницы default\index.html.twig и crm\default\index.html.twig
Переписываем заголовки на Главная страница сайта и Главная страница CRM

Проверяем на сайте

```
http://127.0.0.1:8000/default

http://127.0.0.1:8000/crm/default
```