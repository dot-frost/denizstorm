FROM php:fpm

# Starting from scratch
RUN apt-get clean
RUN apt-get -y autoremove
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Dependencies
RUN apt-get update

# Zip
RUN apt-get install -y libzip-dev zip && docker-php-ext-configure zip && docker-php-ext-install zip

# Git
RUN apt-get install -y git

# Curl
RUN apt-get install -y libcurl3-dev curl && docker-php-ext-install curl
# Mysql
RUN docker-php-ext-install pdo pdo_mysql


# Composer installation
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
ENV PATH=/home/user/.composer/vendor/bin:$PATH


# Clean up
RUN apt-get clean
RUN apt-get -y autoremove
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Set up user permissions
ARG UID
ARG GID
RUN addgroup --gid $GID user
RUN adduser --disabled-password --gecos '' --uid $UID --gid $GID user
USER user
