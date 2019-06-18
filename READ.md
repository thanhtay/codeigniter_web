Installation Instructions
    application/config/config.php
        + your encryption key

Creating a controller and a action
    application/controller/Pages.php
        action index()
    
    call it /index.php/pages

Remove index.php
    creating .htaccess in root folder
        RewriteEngine On
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        RewriteRule ^(.*)$ index.php/$1 [L]

Migration
    config/migration.php
        migration_enabled = true;
        // sequential 001_file_name.php class name must File_Name
        // timestamp YYYYMMDDHHIISS_file_name.php class name File_name
        migration_type = sequential;