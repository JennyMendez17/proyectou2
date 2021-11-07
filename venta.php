<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>ProyectoFinal_UII</title>
    
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<header>
		<div class="wrapp">
			<left>Tortilleria ☼ Maiz de rancho ☼ </left>
			<div class="logo">
				<img src="img/tortilla.jpg" alt="Tortilleria ☼ Maiz de rancho ☼ ">
				
			</div>
			<nav>
				<ul>
					
					<li><a href="index.php">Inicio</a></li>
					<li><a href="empleado.php">Empleado</a></li>
					<li><a href="Venta.php">Ventas</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>¡Formulario de venta para nuestros queridos usuarios !</h1>
			</div>

			<div class="articulo">
				<article>
                <h3><p><b> Tortilleria "☼ Maiz de rancho ☼"  La numero #1 de tu ciudad"</b></p></h3> <br>

              <i><p> Eliga el producto que desea comprar de nuestro menu joven usuario y llene los espacios con la informacion que se le solicita
				  en el siguiente formulario para continuar con su compra.¡Recuerde llenar todos los espacios o de lo contario su compra no sera procesada!
              </p></i><br>
			  <h1>Formulario</h1>

              <form action="welcome.php" method="post">
				 
               Nombres:<input type="text" name="name"><br><br>
			   Apellido Paterno: <input type="text" name="namep"><br><br>
			   Apellido Materno: <input type="text" name="namem"><br><br>
               Correo Electronico (Requerido): <input type="text" name="correo"><br><br>
			   Telefono:<input type= "text" name ="number"><br><br>
			   Direccion:<input type= "text" name="direction"><br><bR>
			   Estado donde vive:<input type= "text" name= "estate"><br><br>
			   Ciudad donde vive:<input type= "text" name= "city"><br><br>
			   Cantidad de productos  que desea comprar:<input type="number" name="cantidad"><br><br>
			   Nombre de los productos que desea comprar:<input type="text" name= "productos"><br><br>
              Enviar--><input type="submit" ><br>
              </form>


            <h5><i><p>Se le enviara correo a la direccion gmail que escribio para verificar sus datos y un link para que pueda completar el pago</i></p></h5><br><br>
				</article>
			</div>

			<aside>
				<div class="widget">
				<center><h3> $Venta$</h3>
				<h4>+[Adicional]+</h4><br>
                -Totopos....$30<br>
                -Tostadas...$25<br>
                -Nachos......$28<br>
                -Gorditas....$35<br><br>


               <h4>+Tortillas+</h4> <br>
                -Tortilla de maiz.....$12<br>
                -Tortilla de harina...$15<br>
                -Penchuques..........$17<br>
                -Tlayudas...............$18<br>
                -Penchuques..........$17<br>
                -Pencheques..........$17<br>
                -Tortillas aleluya......$16<br>
                -Tortillas correosa....$13<br>
                -Tortilla sobaquera...$20 <br>             
               
               <h4>+°Edicion Especial°+</h4><br> 
                -Tortilla azul......$15<br>
                -Tortilla negra....$15<br>
                -tortilla roja........$15<br>
                -Tortilla verde.....$15<br>
                -Tortilla amarilla..$15<br>
                <h5>(2x1=.....$25  "Solo aplica en las tortillas de color")</h5></center>
				</div>
			</aside>
		</div>
	</section>
	<footer>
		<div class="wrapp">
            <p> Numero de  lista: 26 </p>
            <p> SUBMÓDULO 2 Desarrolla aplicaciones Web con conexión a bases de datos</p>
            <p> </p>
		</div>
	</footer>
</body>
</html>