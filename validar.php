<?php

if (isset($_POST['boton1'])) {
    echo "<div class='output'>
    <p><u>Sistema Operativo:</u></p>
    <p style='color: blue;'> Compatible con Windows (10 o superior), Linux, macOS, FreeBSD12.</p>
    <p><u>Memoria RAM:</u></p>
    <p style='color: blue;'> Al menos 512 MB.</p>
    <p><u>Espacio en Disco Duro:</u></p>
    <p style='color: blue;'> Al menos 1 GB.</p>
    <p><u>Permisos de Administrador:</u></p>
    <p style='color: blue;'> Necesarios para la instalación.</p>
    <p><u>Conexión a Internet:</u></p>
    <p style='color: blue;'> Para descargar el instalador.</p>
  </div>";
}

if (isset($_POST['boton2'])) {
    echo "<div class='output'>
        <p><u>Sistema Operativo:</u></p>
        <p style='color: blue;'>Windows: Windows Server 2016 o superior.</p>
        <p style='color: blue;'>Linux: Distribuciones como Ubuntu 20.04 LTS, CentOS 8, o Red Hat Enterprise Linux 8.</p>
        <p style='color: blue;'>macOS: macOS 11.0 (Big Sur) o superior.</p>
        <p><u>Memoria RAM:</u></p>
        <p style='color: blue;'>8 GB o más para un rendimiento fluido, especialmente si se manejan bases de datos grandes o múltiples conexiones simultáneas.</p>
        <p><u>Espacio en Disco:</u></p>
        <p style='color: blue;'>20 GB de espacio libre para asegurar suficiente espacio para los datos y los archivos de registro.</p>
        <p><u>Procesador:</u></p>
        <p style='color: blue;'>Procesador de múltiples núcleos (4 núcleos o más) de Intel o AMD, preferiblemente de la serie Xeon o Ryzen.</p>
        <p><u>Conexión a Internet:</u></p>
        <p style='color: blue;'>Necesaria para descargar actualizaciones y parches de seguridad.</p>
        <p><u>Permisos de Administrador:</u></p>
        <p style='color: blue;'>Necesarios para instalar y configurar MySQL correctamente</p>
      </div>";
}

if (isset($_POST['boton3'])) {
    echo "<div class='output'>
    <div style='display: flex; justify-content: center;'>
        <video src='cat-cute.mp4' width='640' height='360' autoplay loop></video>
    </div></div>";
}
?>
