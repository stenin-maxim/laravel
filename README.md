1. Создать структуру, в которой будут пользователи. У пользователей должны быть роли:
- Администратор
- Редактор
- Пользователь
Один пользователь может принадлежать как к одной роли, так и к нескольким ролям.

2. Заполнить таблицу пользователей данными с ролями (10 - 20 рандомных записей)

3. Написать API, по которому можно будет получить:
       - всех пользователей + роли пользователей
       - одного пользователя + роли пользователя
       - все роли
       - одну роль + всех пользователей которые принадлежат этой роли


Запуск через docker
    docker-compose up -d

    для настройки mysql:
        docker-compose exec mysql bash
        В контейнере mysql:
            SELECT host FROM mysql.user WHERE User = 'root';
            СREATE USER 'root'@'%' IDENTIFIED BY 'root';
            GRANT ALL PRIVILEGES ON *.* TO 'root'@'%';
            FLUSH PRIVILEGES;

docker-compose exec php bash
php artisan migrate --seed