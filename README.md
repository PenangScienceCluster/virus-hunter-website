# PSC Virus Hunter Website Source Code
 
## Introduction

Herein contains the sourcecode to deploy your own version of Virus Hunter, or to modify the files within as you desire for your own web project. All trademarks and logos if reused require permission from their respective owners.

The code was built using CodeIgniter and there were several quirks that need to be worked with for the site to function. The documentation in this README.me file will be updated as we get more question or stumble on other issues.

## Requirements

We recommend installing the following packages on an Ubuntu 20.04 server. This is our main server, and so gets the most amount of testing.

### Install packages from official Ubuntu repositories

We first install all the packages from the Ubuntu repositories.

`sudo apt install php php-intl php-mbstring php-json php-mysqlnd php-xml libcurl php-common php-cli php-curl unzip libapache2-mod-php apache2 mariadb-server`

### Activate php plugins

These PHP plugins should be enabled, if not they can be enabled with:

`phpenmod intl`
`phpenmod php-json`
`phpenmod php-mysqlnd`
`phpenmod php-xml`

### Install composer

Composer is the platform used to deploy CodeIgniter4 and needs to be separately installed using the two lines of code below:

`curl -sS https://getcomposer.org/installer -o composer-setup.php`
`php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'
; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"`

Run the command `composer` to check if the program is installed.


## Clone this repository

Run `git clone` for this repository.

## Apache config

Copy the default apache config file:

`cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/vh.conf`

Make sure the document root is pointed to the _public_ folder in the project file in the VirtualHost section. For example, if the project folder is located in `/var/www/vh`:

`DocumentRoot /var/www/vh/public`

The site can then be activated by disabling the placeholder config, and activating the appropriate config file. In our example:

`sudo a2dissite 000-default.conf`
`sudo a2ensite vh.conf`
`sudo systemctl reload apache2`

## Making folders writable

The site as it is constructed now requires two folders to be globally writable to function. We do not recommend doing this unless you know how to mitigate this potential security hole.

`chmod -R 777 writable/`
`chmod -R 777 public/uploads/`
