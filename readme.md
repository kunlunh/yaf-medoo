# Yaf-medoo
## make thing easy:
Yaf-medoo is to combine an orm library ["medoo"](https://github.com/catfan/Medoo) with the very fast php framwork ["yaf"](https://github.com/laruence/yaf).

Yaf-medoo 只是简单地集成medoo到yaf框架中。

### usage:

  - install php and yaf
  - download or clone
  - set up the configure file

### [nginx.conf]
```
server {
    listen       80;
    server_name  yaf.lan;

    location / {
        root   path to "/yaf/public";
        index  index.php index.html index.htm;
		if (!-e $request_filename) {
			rewrite ^/(.*) /index.php?$1 last;
		}
    }
	
	location ~ \.php$ {
      root           path to "/yaf/public";
      fastcgi_pass   127.0.0.1:9000;
      fastcgi_index  index.php;
      fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
      include        fastcgi_params;	  
	}
}
```
### [php.ini]
```
...
extension=php_pdo_mysql.dll
extension=php_pdo_odbc.dll
...
extension=php_yaf.dll
[yaf]
yaf.use_namespace = 1
yaf.use_spl_autoload = 1
```
