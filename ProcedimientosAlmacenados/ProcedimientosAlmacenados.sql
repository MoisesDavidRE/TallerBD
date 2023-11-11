#Moisés David Ramón Esteban 21TE0149

use acuario;

# Procedimiento almacenado 1
# Mostrar todos los animales que tengan una dieta vegetariana
DELIMITER //
CREATE PROCEDURE pa_SeleccionarAnimalesDietaVegetariana()
BEGIN
    select  * from animal where dieta='VEGETARIANA';
end //
DELIMITER ;

call pa_SeleccionarAnimalesDietaVegetariana();


# Procedimiento almacenado 2
# Mostrar todos los animales que coincidan con el nombre especificado
DELIMITER //
CREATE PROCEDURE pa_BuscarAnimal(in nombreE varchar(50))
BEGIN
    select  * from animal where nombre like nombreE;
end //
DELIMITER ;

call pa_BuscarAnimal('Delfin');

# Procedimiento almacenado 3
# Mostrar todos los animales que tengan un rango de edad de dos cantidades especificadas en los parámetros
DELIMITER //
CREATE PROCEDURE pa_AnimalesEdad(in edadMenor int, in edadMayor int)
BEGIN
    select * from animal where edad between edadMenor and edadMayor;
end //
DELIMITER ;

call pa_AnimalesEdad(1,5);


# Procedimiento almacenado 4
# Mostrar el nombre del animal y el nombre de su especie donde el numero identificador sea 7
DELIMITER //
CREATE PROCEDURE pa_NombreAnimalEspecieID7()
BEGIN
    select  a.nombre as 'Nombre del animal', e.nombre as 'Nombre de la especie' from animal as a  join especie as e on a.especie = e.idEspecie where a.numeroIdentificador = 7;
end //
DELIMITER ;

call pa_NombreAnimalEspecieID7();

# Procedimiento almacenado 5
# Mostrar todas las áreas que tengan como encargado el empleado con id 1, además muestra el nombre del empleado
DELIMITER //
CREATE PROCEDURE pa_AreasEmpleado1()
BEGIN
    select ar.nombre, em.nombre from area as ar join empleados as em on ar.encargado = em.idEmpleado where em.idEmpleado=1;
end //
DELIMITER ;

call pa_AreasEmpleado1();