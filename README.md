# Moodle Connector

## Prerequisites


### SQL Server PHP Extension

Install the extensions https://github.com/microsoft/msphpsql/releases/tag/v5.8.0 

Update `php.ini`, add:
```
extension=php_sqlsrv.dll
extension=php_pdo_sqlsrv.dll
```

Restart Apache: `sudo service apache2 restart`