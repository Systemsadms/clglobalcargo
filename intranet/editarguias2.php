<?php
session_start();
if ($_SESSION['admin'] == 'clglobalcargo')
{
include ("cnx.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<link href="estilo.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="menu/ajxmenu.css" type="text/css" />
</head>





<body>
<div id="Marcocosmo">
<div id="MarcoGlobal">

                <div id="modulotop">                
                	<div id="logo"></div>
                    <div id="titulo">
                    Sistema de Control de Usuarios, Tracking y Envios.
                    <br /><br />
                    CUTE v2.0
                    </div>
                </div><!--FIN DE modulotop-->
                
                
                
              	  <div id="menu">  
                                
                     <div class="AJXMenuWJcNLQA"><!-- AJXFILE:menu/ajxmenu.css -->
                     <div class="ajxmw1">
                     <div class="ajxmw2">
                     <ul>
                   <li class="tfirst"><a href="home.php">Home</a></li>
                     <li><a href="clientes.php">Clientes</a></li>
                     <li><a href="guias.php">Guias</a></li>                     
                     <li><a href="no.php">Almacen</a></li>                     
                     <li><a href="pagos.php">Pagos</a></li>
                     <li><a href="galeria.php">Galeria</a></li>
                     <li><a href="precios.php">Precios</a></li>
                     <li><a href="destruir.php"><font color="#0000FF">Cerrar Admin Center</font></a></li>
          		  	 </ul>
             		 </div>
             		 </div>
 					 <br />
                     </div>
                                  
                                    
</div><!--FIN DE MARCO menu-->
                
                
                
                
                
                <div id="sparacion"></div><!--FIN DE  sparacion-->
                
                
                
                
                
                
                <div id="contenido">
                
                  <table width="530" border="0" align="center">
                    <tr>
                      <td width="433" align="center"><em><strong><font color="#999999">Sistema de Control de Usuarios y Carga de Tracking. v2.0</font></strong></em></td>
                    </tr>
                  </table>
                  
                  
                   <?php				   
								 if(isset ($_POST["editarid"]))
									{
										$id= $_POST["ideditar"];
										require ("cnx.php");
										$ssql = mysql_query("SELECT * FROM guias WHERE guia='$id'");
										
										
										if (mysql_num_rows($ssql)==1)
										{											
										$guia 		=  mysql_result($ssql,0,"guia");
										$user		=  mysql_result($ssql,0,"usuario");
										$tracking 	=  mysql_result($ssql,0,"tracking");
										$direccion 	=  mysql_result($ssql,0,"direccion");
										$libras 	=  mysql_result($ssql,0,"libras");
										$volumen 	=  mysql_result($ssql,0,"volumen");
										$costo 		=  mysql_result($ssql,0,"costo");										
										$des	 	=  mysql_result($ssql,0,"des");										
										$dimensiones	 	=  mysql_result($ssql,0,"dimensiones");
										$foto	 	=  mysql_result($ssql,0,"foto");
										$ext	 	=  mysql_result($ssql,0,"ext");
										$estatus	=  mysql_result($ssql,0,"estatus");
										mysql_close($conexion);																																	
										
										}else
										{
										echo "el numero de guia no existe";	
										}										
										         
									   }                
									  ?> 
                  
                  
                  			
                  
                  

                  
                  				<?php
                                 if (isset($_POST['modificar']))
								 {
									$guia		= $_POST['guia'];								
									$tracking	= $_POST['tracking'];
									$direccion	= $_POST['direccion'];
									$libras		= $_POST['libras'];
									$volumen 	= $_POST["volumen"];									
									$costo		= $_POST['costo'];
									$dimensiones 	= $_POST['dimensiones'];									
									$des		= $_POST['des'];
									$estatus	= $_POST['estatus'];
									
									
									
							
							
							if ($_FILES['foto']['name'] != "")
						{
							
						
						$fotonew = $_POST['foto2'];
						$extnew  = $_POST['ext'];
						$archivo = "guia_".$fotonew.'.'.$extnew;						
						unlink('img_guias/'.$archivo);
	
				
	
	
####
## Funcin para redimencionar las imgenes
## utilizando las liberas de GD de PHP
####
 
function resizeImagen($ruta, $nombre, $alto, $ancho,$nombreN,$extension)
{
$rutaImagenOriginal = $ruta.$nombre;
if($extension == 'GIF' || $extension == 'gif')
{
	$img_original = imagecreatefromgif($rutaImagenOriginal);
}
if($extension == 'jpg' || $extension == 'JPG')
{
	$img_original = imagecreatefromjpeg($rutaImagenOriginal);
}
if($extension == 'png' || $extension == 'PNG')
{
	$img_original = imagecreatefrompng($rutaImagenOriginal);
}
$max_ancho = $ancho;
$max_alto = $alto;
list($ancho,$alto)=getimagesize($rutaImagenOriginal);
$x_ratio = $max_ancho / $ancho;
$y_ratio = $max_alto / $alto;
if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){//Si ancho
$ancho_final = $ancho;
$alto_final = $alto;
} elseif (($x_ratio * $alto) < $max_alto){
$alto_final = ceil($x_ratio * $alto);
$ancho_final = $max_ancho;
} else{
$ancho_final = ceil($y_ratio * $ancho);
$alto_final = $max_alto;
}
$tmp=imagecreatetruecolor($ancho_final,$alto_final);
imagecopyresampled($tmp,$img_original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
imagedestroy($img_original);
$calidad=70;
imagejpeg($tmp,$ruta.$nombreN,$calidad);
}

	$largo=2;
		$str = "abcdefghijklmnopqrstuvwxyz";
		$may = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$num = "1234567890";
		$cad = "";
		# Comienzo de la generacion de clave.
		$cad = substr($may ,rand(0,24),1);
		$cad .= substr($num ,rand(0,10),1);
		$cad .= substr($num ,rand(0,10),1);
		for($i=0; $i<$largo; $i++) {
		$cad .= substr($str,rand(0,24),1);
		}
		;





// comprobamos que se ha enviado el formulario
// comprobar que han seleccionado una foto
if($_FILES['foto']['name'] != ""){ // El campo foto contiene una imagen...
// Primero, hay que validar que se trata de un JPG/GIF/PNG
$allowedExts = array("jpg", "jpeg", "gif", "png", "JPG", "GIF", "PNG");
$extension = end(explode(".", $_FILES["foto"]["name"]));
if ((($_FILES["foto"]["type"] == "image/gif")
|| ($_FILES["foto"]["type"] == "image/jpeg")
|| ($_FILES["foto"]["type"] == "image/png")
|| ($_FILES["foto"]["type"] == "image/pjpeg"))
&& in_array($extension, $allowedExts)) {
// el archivo es un JPG/GIF/PNG, entonces...
$extension = end(explode('.', $_FILES['foto']['name']));
$foto = $fotonew . ".".$extension;
$directorio = "img_guias"; // directorio de tu eleccin
// almacenar imagen en el servidor
move_uploaded_file($_FILES['foto']['tmp_name'], $directorio.'/'.$foto);
$minFoto = 'guia_'.$foto;
$resFoto = 'res_'.$foto;
resizeImagen($directorio.'/', $foto, 800, 600,$minFoto,$extension);
//resizeImagen($directorio.'/', $foto, 500, 500,$resFoto,$extension);
unlink($directorio.'/'.$foto);

echo "Se ha cargado el un nuevo tracking ";
} else { // El archivo no es JPG/GIF/PNG
$malformato = $_FILES["foto"]["type"];
echo "El tipo de archivo no es una imagen valida";
//header("Location: index.php");
exit;
}
} else { // El campo foto NO contiene una imagen
		
		echo "La Guia se ha editado corectamente ";
//echo "No contiene ninguna imagen";

//header("Location: index.php");
//exit;
}
			


require ("cnx.php");									
$consulta = "UPDATE guias SET 
ext ='$extension', estatus='$estatus' ,tracking ='$tracking', direccion ='$direccion', libras='$libras', volumen='$volumen', costo='$costo', des='$des', dimensiones='$dimensiones' WHERE guia= $guia ";	
$hacerconsulta = mysql_query ($consulta);
mysql_close ($conexion);										
									
	
	
	
	
								?>
                                    
                               <table width="348" border="0" align="center">
                              <tr>
                                <td width="320" align="center"><p><strong>SUS CAMBIOS FUERON REALIZADOS CON EXITO</strong></p>
                                <p><a href="clientes.php">Click Aqui para volver al Area de Clientes</a></p></td>
                              </tr>
                            </table>

					<?php
					}
					else
					{
					
									require ("cnx.php");									
									$consulta = "UPDATE guias SET 
									tracking ='$tracking', direccion ='$direccion', libras='$libras', volumen='$volumen', costo='$costo', des='$des', dimensiones='$dimensiones', estatus='$estatus' WHERE guia = $guia " ;
							
									$hacerconsulta = mysql_query ($consulta);
							
								
									mysql_close ($conexion);
									
									echo "<br>";									
									echo "<br>";	
									?>
                                    
                                                  <table width="348" border="0" align="center">
                              <tr>
                                <td width="320" align="center"><p><strong>SUS CAMBIOS FUERON REALIZADOS CON EXITO</strong></p>
                                <p><a href="clientes.php">Click Aqui para volver al Area de Clientes</a></p></td>
                              </tr>
                            </table>

									<?php
									 }
								 }// Fin caso vacio
								 

		else
		{
		?>
                                    
                                    
                 
   <br /><br />                  

				  
                   
<form method="post" action="#" enctype="multipart/form-data" >
                             <table width="340" border="0" align="center">
                                  <tr>
                                    <td width="142">Usuario:</td>
                                    <td width="46" align="left"><input name="usuario" type="text" id="usuario" value="<?php echo $user ?> " size="2" readonly="readonly" /></td>
                               </tr>
                                  <tr>
                                    <td>Guia:</td>
                                    <td align="left"><input name="guia" type="text" id="guia" value="<?php echo $guia; ?> " readonly="readonly" /></td>
                                  </tr>
                                  <tr>
                                    <td>Nº de Tracking:</td>
                                    <td align="left"><input name="tracking" type="text" id="tracking" value="<?php echo $tracking ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>Direccion:</td>
                                    <td align="left"><input name="direccion" type="text" id="direccion" value="<?php echo $direccion ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>Libras:</td>
                                    <td align="left"><input name="libras" type="text" id="libras" value="<?php echo $libras ?>" /></td>
                                  </tr>
                                    <tr>
                                    <td>Estatus:</td>
                                    <td align="left"><input name="estatus" type="text" id="estatus" value="<?php echo $estatus ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>Volumen:</td>
                                    <td align="left"><input name="volumen" type="text" id="volumen" value="<?php echo $volumen ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>Costo:</td>
                                    <td align="left"><input name="costo" type="text" id="costo" value="<?php echo $costo ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>Dimensiones:</td>
                                    <td align="left"><input name="dimensiones" type="text" id="dimensiones" value="<?php echo $dimensiones ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>Cambiar Imagen:</td>
                                    <td align="left"><input type="file" name="foto" /></td>
                                  </tr>
                                  <tr>
                                    <td>Descripcion:</td>
                                    <td>
                                    <textarea name="des" id="des" cols="30" rows="5"><?php echo $des ?></textarea>  
                                    <input type="hidden" name="foto2" value="<?php echo $foto; ?>" />
                                    <input type="hidden" name="ext" value="<?php echo $ext; ?>" />                            	  
                                    </td>
                                  </tr>
                  </table>
                  <br />
                  <table width="200" border="0" align="center">
                    <tr>
                      <td><input type="submit" name="modificar" id="modificar" value="Guardar Cambios" /></td>
                      <td><input type="reset" name="button2" id="button2" value="Cancelar" /></td>
                    </tr>
                  </table>
        <br />
          </form>        
                  
<?php
}
?>
                             
                                  
                  <br /><br /><bvr>
    </div><!--FIN DE  contenido-->


</div><!--FIN DE MARCOMarcoGlobal-->
</div><!--FIN DE MARCO MarcocosmoGLOBAL-->



<?php			
}
else
{			
session_destroy();		
header("location:../index.php");	
}
?>	
</body>
</html>