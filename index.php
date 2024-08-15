<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="public/estilos/estilos.css">
</head>
<body>
    <h1>REGISTRE SU ASISTENCIA</h1>
    <h2 id="fecha"></h2>
    <div class="container">
        <div class="ingreso">
            <a class="acceso" href="vista/login/login.php">Ingresar al sistema</a>
        </div>
        <p class="ingresocodigo">Ingrese su codigo</p>
        <form action="">
            <input type="text" placeholder="Codigo del estudiante" name="txtcodigo">
            <div class="contenedor">

            <div class="botonuno">
            <a class="entrada" href="">ENTRADA</a>
            </div>

            <div class="botondos">
            <a class="salida" href="">SALIDA</a>
            </div>

            </div>
            
        </form>
    </div>


    <script>
            let fecha=new Date();
            let fechaHora=fecha.toLocaleString();
            document.getElementById("fecha").textContent=fechaHora;
            setInterval(() => {
                let fecha=new Date();
                let fechaHora=fecha.toLocaleString();
                document.getElementById("fecha").textContent=fechaHora;
            }, 1000);
    </script>
</body>
</html>