<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <script src="js/jquery-3.6.4.slim.js" defer></script>
    <script src="js/bootstrap/bootstrap.min.js" defer></script>
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
        <form method="POST" action="funcionamiento.php">
            <div class="row pb-3">

                <div class="col-6">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombres</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos">
                    </div>
                </div>            
            </div>
            <div class="row pb-3">
                <div class="col-3">
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono">
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="estudio" class="form-label">Nivel de Estudio</label>
                        <select name="estudio" class="form-select" aria-label="Default select example">
                            <option selected>Nivel de estudio</option>
                            <option value="1">Bachiller</option>
                            <option value="2">Tecnico</option>
                            <option value="3">Tecnologo</option>
                            <option value="4">Profesional</option>
                            <option value="5">Estudiante Universitario</option>
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="ingles" class="form-label">Nivel de Ingles</label>
                        <select name="ingles" class="form-select" aria-label="Default select example">
                            <option selected>Nivel de Ingles</option>
                            <option value="1">Basico</option>
                            <option value="2">Intermedio</option>
                            <option value="3">Avanzado</option>

                        </select>
                    </div>
                </div>
            </div>
            <div class="row p-3">
                <h3>Lenguajes</h3>
                <div class="col-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="HTML" name="lenguaje[]" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            HTML
                        </label>
                    </div>
                
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Phyton" name="lenguaje[]"id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Phyton
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Javascript" name="lenguaje[]"id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Javascript
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="CSS" name="lenguaje[]" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            CSS
                        </label>
                    </div>
                </div>
            
                <div class="col-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="C#" name="lenguaje[]" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            C#
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Typescript" name="lenguaje[]"id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Typescript
                        </label>
                    </div>
                </div>
            </div>    
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-success">Reset</button>
                
            </div>
        </form>
    </div>
</body>
</html>