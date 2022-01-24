FROM php:7.4-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clean
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd sockets

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- \--install-dir=/usr/local/bin --filename=composer

WORKDIR /main_app
COPY . /main_app
RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=8000

EXPOSE 8000
