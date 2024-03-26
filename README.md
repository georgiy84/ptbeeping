# ptbeeping
Prueba tecnica de Beeping

# Nombre de la Aplicación

## Descripción
Esta es una breve descripción de la aplicación. Aquí puedes incluir información sobre su propósito, características principales y cualquier otra cosa relevante que desees destacar.

## Instalación

### Clonar el Repositorio
Clone el repositorio de la aplicación desde GitHub o cualquier otro repositorio remoto a su sistema local.

git clone https://github.com/georgiy84/ptbeeping.git
Instalar Dependencias
Navegue hasta el directorio del proyecto y ejecute el comando composer install para instalar todas las dependencias de PHP.

### Instalar proyecto
cd nombre-de-la-aplicacion
composer install
Configurar el Archivo de Entorno
Haga una copia del archivo .env.example y renómbrelo como .env.

### Configurar proyecto
cp .env.example .env
Generar Clave de Aplicación
Ejecute el comando php artisan key:generate para generar una nueva clave de aplicación en el archivo .env.

php artisan key:generate

### Configurar Base de Datos
Abra el archivo .env en un editor de texto y configure los detalles de la base de datos, como el nombre de la base de datos, el usuario y la contraseña.


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_la_base_de_datos
DB_USERNAME=nombre_de_usuario
DB_PASSWORD=contraseña

Migrar la Base de Datos
Ejecute el comando php artisan migrate para migrar la base de datos y crear todas las tablas necesarias.

php artisan migrate
Popular las Tablas con Datos de Ejemplo
Utilice el comando php artisan db:seed para poblar las tablas recién creadas con datos de ejemplo.

php artisan db:seed
