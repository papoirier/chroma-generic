# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteCond %{SERVER_PORT} !^443$
RewriteRule (.*) https://%{HTTP_HOST}%{REQUEST_URI} [R=301,L]
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