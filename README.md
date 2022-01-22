# esquema-mvc 

Esto es un CRUD de usuarios en PHP puro y la librería de bases de datos PDO, utilizando un patrón de diseño MVC. Este ejercicio está inspirado en el [siguiente post de Victor Robles](https://victorroblesweb.es/2013/11/18/tutorial-mvc-en-php-nativo/).

## Flujo:
El `index.php` carga el controlador de usuarios que pide al modelo los datos necesarios a la base de datos. Una vez recibidos los datos, el controlador carga la vista por defecto `table_view.php`


![image](https://user-images.githubusercontent.com/91197522/150655087-ed137097-c33e-4985-85ef-c2bbe1fd5ccd.png)


## Controlador de usuarios:

El controlador de usuarios por defecto devuelve la vista de la tabla, pero si se le pasa un parámetro, a través de un switch puede ejecutar las siguientes acciones:
- Ningún parámetro: Cargar vista por defecto `table_view.php`*
- `'nuevo'`: Cargar la vista de nuevo usuario `new_view.php`*
- `'vista_editar'`: Cargar la vista de editar usuario `edit_view.php`*
- `'guardar'`: Crea un nuevo usuario en la base de datos y devuelve la vista de la tabla.
- `'actualizar_usuario'`: Modifica los datos de un usuario en la base de datos y devuelve la vista de la tabla.
- `'borrar'`: Borra un usuario en concreto

*Antes de devolver las vistas, el controlador tiene que llamar al modelo para cargar los datos. Las vistas se encuentran en la carpeta `views`

## Modelo de usuarios:

El modelo es el encargado de hacer de intermediario entre la base de datos y el controlador. Es una plantilla que nos permite definir y gestionar, de una forma sencilla, atributos y métodos que se van a repetir muchas veces. 

Aquí se carga la configuración de la base de datos, la cual se encuentra en un fichero aparte `db.php`.

El constructorse encarga de hacer una conexión a la base de datos cada vez que se instancia el modelo, rellenar los atributos en caso de que se le pasen como argumentos. El rol de los usuarios siempre va a ser *'user'* por defecto.

En este modelo de usuarios `UserModel.php`, se encuentran los siguientes métodos:
- `getAllUsers()`: devuelve un array con todos los usuarios en la base de datos.
- `getUserById($id)`: devuelve los datos de un usuario si se le pasa como argumento el id de usuario.
- `newUser()`: guarda un nuevo usuario en la base de datos.
- `updateUser($id)`: modifica los datos de un usuario si se le pasa como argumento el id de usuario
- `deleteUser($id)`: borra un usuario con un id específico.
