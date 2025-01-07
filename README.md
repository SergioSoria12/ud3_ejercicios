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



### **Total de tablas definidas: 9**

- `users`

- `password_reset_tokens`

- `sessions`

- `cache`

- `cache_locks`

- `jobs`

- `job_batches`

- `failed_jobs`

"""