# Sistema Web de Gestión Psicológica
 
Sistema para control de pacientes, sesiones y evaluaciones psicológicas (Laravel + PostgreSQL).
 
## Requisitos
- PHP 8.3 o superior
- Composer 2 y PostgreSQL
 
## Instalación
1. git clone https://github.com/lapaza.251ds03/sistema-psicologia.git
2. cd sistema-psicologia
3. composer install
4. copy .env.example .env
5. php artisan key:generate
6. Crear la base de datos psicologia_db en PostgreSQL
7. php artisan migrate
8. php artisan serve
 
Autor: Luis Ruben Apaza Condori 