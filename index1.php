<?php
$conexion=mysqli_connect('localhost','root','','videos')
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía de Instalación de MySQL</title>
    <link rel="stylesheet" href="style.css?v=1.0">

</head>
<body>

    <header>
        <h1>Guía de Instalación de MySQL</h1>
    </header>
    <main>
        <div class="video-container">
            <video id="mysqlVideo" controls>
                <source src="mysql.mp4" type="video/mp4">
            </video>
        </div>
       
        <table border="5">
            
        <tr>
               
         <th>paso 1</th>
               <th>paso 2</th>
               <th>paso 3</th>
               <th>paso 4</th>
               <th>paso 5</th>
               <th>paso 6</th>
               </tr>
            <?php
            $sql="SELECT * from videos";
            $result=mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($result)){
                ?>

           
            <tr>
                <td><?php echo $mostrar['Paso 1'] ?><a href="https://dev.mysql.com/downloads/">el instalador</a> </td>
                <td><?php echo $mostrar['Paso 2'] ?></td>
                <td><?php echo $mostrar['Paso 3'] ?></td>
                <td><?php echo $mostrar['Paso 4'] ?></td>
                <td><?php echo $mostrar['Paso 5'] ?></td>
                <td><?php echo $mostrar['Paso 6'] ?></td>
            
            </tr>
        
        <?php
            }
            ?>
            </table>
        <form action="validar.php" method="post" target="ventana">
            <button type="submit" name="boton1" value="1">Requisitos Mínimos</button>
            <button type="submit" name="boton2" value="2">Requisitos Óptimos</button>
            <button type="submit" name="boton3" value="3">.</button>
        </form>
        <iframe name="ventana" src="validar.php" onload="checkVideo()"></iframe>
    </main>
</body>
</html>
