<?php
isset($_POST["nombre"]) ? print $_POST["nombre"] :"";
echo "<br/>";
isset($_POST["apellidos"]) ? print $_POST["apellidos"] :"";
echo "<br/>";
isset($_POST["email"]) ? print $_POST["email"] :"";
echo "<br/>";
isset($_POST["telefono"]) ? print $_POST["telefono"] :"";
echo "<br/>";
isset($_POST["estudio"]) ? print $_POST["estudio"] :"";
echo "<br/>";
$idioma = isset($_POST["ingles"]) ? $_POST["ingles"] :"";
echo $idioma;
echo "<br/>";
$lenguaje = isset ($_POST["lenguaje"]) ? count($_POST["lenguaje"]) :"";
echo $lenguaje;


    if($lenguaje <4 && $idioma <= 3){
        header("Location:basico.php");
        //echo "basico";
    }else if($lenguaje >=4 && $lenguaje <6 && $idioma <= 3){
        header("Location:intermedio.php");
        //echo "medio";
    }else if($lenguaje >= 6 && $idioma <= 3 ){
        header("Location:avanzado.php");
                //echo "avanzado";
            }
?>
