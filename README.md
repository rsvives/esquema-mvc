# esquema-mvc actualizado desde otro ordenador
Esto es una primera aproximación al MVC en PHP puro. La base de datos está simulada con un array de usuarios

## Flujo:
El index.php carga el controlador de usuarios y desde este se llaman 

## Controlador de usuarios:
El controlador de usuarios por defecto devuelve la vista de la tabla por defecto. Pero si se le pasa un parámetro, devuelve la vista de editar.
Antes de devolver las vistas, el controlador tiene que llamar al modelo para cargar los datos

## Modelo de usuarios:
El modelo es el encargado de hacer de intermediario entre la base de datos y el controlador. Es una plantilla que nos permite definir y gestionar atributos y métodos de una forma sencilla.
El constructor, para este ejemplo y a modo de simplificación, está sin definir. Están definidas 3 propiedades que tienen los usuarios y dos métodos que sirven para devolver todos los usuarios y para editar un usuario específico.

