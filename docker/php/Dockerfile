FROM php:8.3-fpm

# переменная окружения
ENV user=mint

WORKDIR /var/www/html
# Install system dependencies
RUN apt-get update && apt-get install -y \
    default-mysql-client \
    git \
    zip \
    unzip

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# ARG - Определяет переменную для передачи из командной строки в образ
ARG UID=1000
ARG GID=1000

RUN groupadd -g "${GID}" $user \
    && useradd --create-home --no-log-init -u "${UID}" -g "${GID}" $user

RUN chown -R www-data:www-data /var/www/html
USER $user

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer