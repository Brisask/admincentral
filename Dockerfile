FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nodejs \
    npm

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u 1000 -d /home/kaely kaely || true
RUN mkdir -p /home/kaely/.composer && \
    chown -R kaely:kaely /home/kaely

# Set working directory
WORKDIR /var/www

# Give permissions
RUN chown -R kaely:www-data /var/www
RUN chmod -R 755 /var/www

# Switch to user
USER kaely