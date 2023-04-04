<!--Ejemplo de count recursivo-->

<?php
$comida = array('frutas' => array('naranja', 'plátano', 'manzana'),
                'verduras' => array('zanahoria', 'col', 'guisante'));

// Cuenta recursiva
echo count($comida, COUNT_RECURSIVE); // muestra 8

// Cuenta normal
echo count($comida); // muestra 2

?>