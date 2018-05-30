# Dropbox API Test (back-end)

Back-end

## Install

Clone the project:
```bash
git clone https://github.com/gchumillas-tutorial/dropboxapitest-server
```

Create a database and a user and import the script `/scripts/database.sql` to create the tables:
```bash
mysql <database-name> -u <username> -p < scripts/dtabase.sql
```

Open the [Dropbox API Console](https://www.dropbox.com/developers/apps) and create a new project with the following options:

  1. Choose an API: **Drop API**
  2. Choose the type of access you need: **Full Dropbox**
  
Add finally add the following `Redirect URI`:  
http://localhost:4200/auth-login
