# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>

# END WordPress

# BEGIN (mt) controlled settings
<IfModule !mod_fcgid.c>
  AddHandler php-stable .php
</IfModule>
<IfModule mod_fcgid.c>
  AddHandler fcgid-script .php
  <Files *.php>
    Options +ExecCGI
  </Files>
</IfModule>
# END (mt) controlled settings

## EXPIRES CACHING ##
<IfModule mod_expires.c>
ExpiresActive On
ExpiresByType image/jpg "access plus 1 year"
ExpiresByType image/svg "access plus 1 year"
ExpiresByType image/gif "access plus 1 year"
ExpiresByType image/png "access plus 1 year"
ExpiresByType text/css "access plus 1 month"
ExpiresByType application/pdf "access plus 1 month"
ExpiresByType text/x-javascript "access plus 1 month"
ExpiresByType application/x-shockwave-flash "access plus 1 month"
ExpiresByType image/x-icon "access plus 1 year"
ExpiresDefault "access plus 2 days"
</IfModule>

# mod_gzip > mod_deflate
AddOutputFilterByType DEFLATE text/html text/plain text/xml
AddOutputFilterByType DEFLATE text/css application/x-javascript
AddOutputFilterByType DEFLATE text/css text/html text/plain text/xml text/javascript

# for cacheable resources
<IfModule mod_headers.c>
  <FilesMatch ".(js|css|xml|gz|html|svg)$">
    Header append Vary: Accept-Encoding
  </FilesMatch>
</IfModule>