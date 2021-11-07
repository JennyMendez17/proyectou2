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
				<h1>¡Formulario de registro para nuestros queridos empleados !</h1>
			</div>

			<div class="articulo">
				<article>
                <h3><p><b> Tortilleria "☼ Maiz de rancho ☼"  La numero #1 de tu ciudad"</b></p></h3> <br>

			  <h1>Formulario</h1>

              <form action="welcome.php" method="post">
				 
               Nombres:<input type="text" name="name"><br><br>
			   Apellido Paterno: <input type="text" name="namep"><br><br>
			   Apellido Materno: <input type="text" name="namem"><br><br>
               Correo Electronico (Requerido): <input type="text" name="correo"><br><br>
			   Telefono:<input type= "text" name ="number"><br><br>
			   Direccion:<input type= "text" name="direction"><br><bR>
			   Cantidad de productos vendidos el dia de hoy:<input type="number" name="cantidad"><br><br>
			   Cantidad de productos entregados el dia de hoy:<input type="number" name="entregados"><br><br>
			   Nombre de los productos comprados:<input type="text" name= "productosc"><br><br>
			   Nombre de los productos entregados:<input type="text" name= "productose"><br><br>
			   Horas trabajadas el dia de hoy:<input type="text" name= "productos"><br><br>
              Enviar--><input type="submit" ><br>
              </form>


            <h5><i><p>Se le enviara correo a la direccion gmail que escribio para verificar sus datos y un link de consulta de su salario ganado</i></p></h5><br><br>
				</article>
			</div>

			<aside>
				<div class="widget">
					<h1>Un gusto volverlo a ver joven empleado, recuerde llenar este formulario cada dia laboral, con esto tendremos un registro de las ventas que ha realizado.
					</h1>
					<center><img  src= "img/like.jpeg" width="150" height="170"></center>
				</center>
				</div>
			</aside>
		</div>
	</section>
	<footer>
		<div class="wrapp">
            <p> Numero de  lista: 26 </p>
            <p> SUBMÓDULO 2 Desarrolla aplicaciones Web con conexión a bases de datos</p>
            <p></p>
		</div>
	</footer>
</body>
</html>