<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

Este es un pequeño crud con laravel que cumple con las funciones basicas de inicio de sesion,
registro, actualizacion y eliminacion de datos.

## Instalacion

### Instalacion de PhP
Con el siguiente comando hacemos referencia a todos los paquetes que esten relacionados con php.

```bash
    sudo add-apt-repository ppa:ondrej/php
```

```bash
    sudo apt-get install php7.4
    php -v 
```

Paquetes que laravel requiere:

```bash
    sudo apt-get install php-pear php7.4-curl php7.4-dev php7.4-gd php7.4-mbstring php7.4-zip php7.4-mysql php7.4-xml
```

### Instalacion de Composer

```bash
    sudo apt-get install composer
```

### Instalacion de Laravel

```bash
    composer global require laravel/installer
```
*Nota: Para comprobar que se instalo correctamente, ejecutar el siguiente comando:
```bash
    laravel
```
En dado caso de que el comando no se halla encontrado, debe ir a la siguiente ruta:
    `/home/<usuario>/.config/composer/vendor/bin/`
Y modifique su archivo de bash segun su use y en el final del archivo agregar el sgte contenido.

```bash
    sudo nano /home/<usuario>/.bashrc
    export PATH="$PATH:$HOME/.config/composer/vendor/bin"
```

*Nota: Para este proyecto utilizo MySql a travez de xampp.

### Instalacion de dependencias

```bash
    composer install
```

*Nota: Es necesario crear un archivo .env para que laravel pueda leer los datos de conexion. Asi:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3307
    DB_DATABASE=crud_laravel
    DB_USERNAME=root
    DB_PASSWORD=

Si tiene el MySql instalado nativamente, es necesario cambiar la configuracion del
puerto en xampp ya de por defecto es 3306 y esto puede provocar interferencias.
Tambien la base de datos debe ser creada y nombrada igual que en su .env(DB_DATABASE).

