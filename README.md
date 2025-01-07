<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></p>



<p align="center">

<a href="#"><img src="https://img.shields.io/badge/Build-Passing-brightgreen" alt="Build Status"></a>

<a href="#"><img src="https://img.shields.io/badge/Version-1.0-blue" alt="Version"></a>

<a href="#"><img src="https://img.shields.io/badge/License-MIT-lightgrey" alt="License"></a>

</p>



# Respuestas Ejercicio 4



## 1. ¿Qué crees que hace el método create de la clase Schema?



El método `create` de la clase `Schema` se utiliza para crear una tabla en la base de datos. Recibe como parámetros el nombre de la tabla y una función anónima. Dentro de esta función, se define el esquema de la tabla utilizando el objeto `$table` para especificar columnas, tipos de datos y restricciones.



## 2. ¿Qué crees que hace `$table->string('email')->primary();`?



La instrucción `$table->string('email')->primary();` crea una columna llamada `email` de tipo **string** (cadena de texto) y la establece como **clave primaria** de la tabla, lo que garantiza que cada valor en esta columna sea único y obligatorio.



## 3. ¿Cuantas tablas hay definidas? Indica el nombre de cada tabla.



### Archivos analizados:



### **0001_01_01_000000_create_users_table.php**

- Tablas creadas:

  - `users`

  - `password_reset_tokens`

  - `sessions`



### **0001_01_01_000001_create_cache_table.php**

- Tablas creadas:

  - `cache`

  - `cache_locks`



### **0001_01_01_000002_create_jobs_table.php**

- Tablas creadas:

  - `jobs`

  - `job_batches`

  - `failed_jobs`



### **Total de tablas definidas: 8**

- `users`

- `password_reset_tokens`

- `sessions`

- `cache`

- `cache_locks`

- `jobs`

- `job_batches`

- `failed_jobs`

# Respuesta Ejercicio 5

## ¿Cuantas tablas aparecen?

Aparecen 9 tablas porque se creo la tabla `migrations` (usada por Laravel para llevar un registro de las migraciones que se han ejecutado en la BBDD y tiene el proposito de que cada migracion se ejecute una sola vez y en el orden correcto), la cual siempre estara presente en cualquier proyecto Laravel que use migraciones.

# Respuesta Ejercicio 6

## ¿Que hacen los siguientes comandos?

- `php artisan migrate`:  Ejecuta las migraciones pendientes.

- `php artisan migrate:status`: Muestra el estado de las migraciones.

- `php artisan migrate:rollback`: Revierte la última migración.

- `php artisan migrate:reset`: Revierte todas las migraciones.

- `php artisan migrate:refresh`: Revierte y vuelve a ejecutar todas las migraciones.

- `php artisan make:migration`: Crea un nuevo archivo de migración.

- `php artisan migrate --seed`: Ejecuta migraciones y carga datos de prueba.

# Respuesta Ejercicio 8

## ¿Qué pasos debemos dar si queremos añadir el campo `$table->string('apellido');` a la tabla alumnos del ejercicio anterior?

1. Creamos una nueva migración:

`php artisan make:migration add_apellido_to_alumnos`

2. Edita la migración creada en el archivo database/migrations/<timestamp>_add_apellido_to_alumnos.php:

```php
    public function up(): void
{
    Schema::table('alumnos', function (Blueprint $table) {
        $table->string('apellido'); // Agrega el campo apellido
    });
}

public function down(): void
{
    Schema::table('alumnos', function (Blueprint $table) {
        $table->dropColumn('apellido'); // Elimina el campo si se revierte la migración
    });
}
```
3. Ejecuta la migración:

`php artisan migrate`






