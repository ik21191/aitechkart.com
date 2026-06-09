# aitechkart.com
A custom website and mobile development company.

## Steps to run this application


- Make sure the `.htaccess` file is present in the root folder. If the `.htaccess` file is not present in the root folder, then make it using the below contents with the name `.htaccess` . In this `.htaccess` file, we are routing all the traffic to the `index.php` file, and from the `index.php` file we are sending the request to the correct handler. So, `index.php` file is working as the `Front Controller` of this application.

```
RewriteEngine On
RewriteBase /

# Do not route requests if the file or directory actually exists
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d

# Route everything else to index.php
RewriteRule ^ index.php [L,QSA]
```

- You must be present in the `root` folder of this application and then open the command prompt and run the below command.

```
php -S localhost:8000
```