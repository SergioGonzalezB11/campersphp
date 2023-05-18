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

if($lenguaje > 1){
    if(($lenguaje >= 2) && ($idioma == 1)){
        //echo "basico";
        header("Location:../basico.php");
    }else if($lenguaje >=4 && $idioma == 2){
            //echo "medio";
            header("Location:../intermedio.php");
        }else if($lenguaje >= 6 && $idioma == 3){
                //echo "avanzado";
                header("Location:../avanzado.php");
            }
}else 
    echo "no pasa";


?>
