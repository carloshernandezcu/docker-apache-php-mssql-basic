FROM php:7.2-apache

# Install Microsoft SQL Drivers for PHP in Linux
ENV ACCEPT_EULA=Y
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update -yqq
RUN apt-get install -y gnupg apt-transport-https unixodbc-dev
RUN curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add -
RUN curl https://packages.microsoft.com/config/debian/9/prod.list > /etc/apt/sources.list.d/mssql-release.list
RUN apt-get update -yqq
RUN apt-get install -y msodbcsql17 mssql-tools
RUN ln -fsv /opt/mssql-tools/bin/* /usr/bin
RUN pecl install sqlsrv
RUN pecl install pdo_sqlsrv
RUN docker-php-ext-enable sqlsrv pdo_sqlsrv
RUN apt-get clean

# Configure PHP Debug
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
RUN echo "xdebug.remote_connect_back=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.remote_autostart=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.default_enable=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.remote_enable=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
