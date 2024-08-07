Запуск через docker
    docker-compose up -d

    для настройки mysql:
        docker-compose exec mysql bash
        В контейнере mysql:
            SELECT host FROM mysql.user WHERE User = 'root';
            СREATE USER 'root'@'%' IDENTIFIED BY 'root';
            GRANT ALL PRIVILEGES ON *.* TO 'root'@'%';
            FLUSH PRIVILEGES;

php artisan migrate --seed