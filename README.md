# Suplos - Prueba Técnica

## Presentada por Rodolfo Rodríguez Ferreira

## Requisitos:

- PHP 8+
- (MySQL || MariaDB) 8+

## Compilación del proyecto:

Para compilar este proyecto primero es necesario clonarlo en cualquier directorio. El desarrollo se realizó mediante el uso de la herranmienta **XAMPP** por lo que, en la ruta _'./db/dbStructure.php'_ encontrarás variables para almacenar el servidor, usuario y contraseña. Estos datos fueron establecidos para el correcto funcionamiento con XAMPP. Sin embargo, puedes modificar cualquiera de ellos con el fin de configurar tus valores asociados.

El archivo **dbStructure.php** solo debe de ejecutarse una vez, ya que su fin es crear la base de datos necesaria, sus tablas e insertar la información proveniente de los datos almacenados en el archivo _data-1.json_. Una vez se haya ejecutado este script puedes dirigirte a **index.php** y encontrar ese inmueble que tanto anhelas. ;)

## Funciones desarrolladas:

- Funcionalidad para mostrar todos los bienes ==> **Ok**
- Opciones de lista para filtrado y búsqueda detallada de bienes ==> **Ok**
- Filtro mediante ciudad, tipo de bien y precio ==> **Ok**
- Botón para guardar como favorito algún bien ==> **Ok**
- Visualización de la lista completa de bienes favoritos ==> **Ok**
- Función para remover algún bien de favoritos ==> **Ok**
- Generar reporte de Excel a partir de filtros ==> Por terminar (Diseño -> Realizado; Lógica -> Por completar)

### Te invito a hacer un _clone_ a este repositorio y verificar cada una de las funciones anteriormente descritas :D
