# Dropbox API Test (back-end)

Back-end application of Dropbox API Test.

## Install

Clone the project and install the libraries:
```bash
git clone https://github.com/gchumillas-tutorial/dropboxapitest-server
cd dropboxapitest-server
composer install
```

Create a database and a user and execute the following command to import the tables:
```bash
mysql <database-name> -u <username> -p < scripts/database.sql
```

Open the [Dropbox API Console](https://www.dropbox.com/developers/apps) and create a new project with the following options:

  1. Choose an API: **Drop API**
  2. Choose the type of access you need: **Full Dropbox**
  
And finally add the `Redirect URI`:  
http://localhost:4200/auth-login

Copy `config-sample.php` to `config.php` and change it.

## How to create a Virtual Host for Apache2 (Linux):

Navigate to the Apache2 `sites-available` folder:
```bash
sudo su
cd /etc/apache2/sites-available
```

Copy the following template in `localhost.conf`:  
https://gist.github.com/gchumillas/b70e6876d9ce40d617d31722279858cc

Rename ServerName by `localhost` and change the rest of the options. And finally enable the virtual host and reload Apache2:

```bash
a2ensite localhost.conf
service apache2 reload
```
