	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  		<!-- Brand -->
  		<a class="navbar-brand" href="#"><?php echo $_SESSION['patient_name']; ?></a>

  		<!-- Links -->
	  	<ul class="navbar-nav">
	    	<li class="nav-item">
	      		<a class="nav-link" href="profile.php">Perfil</a>
	    	</li>
	    	<li class="nav-item">
	      		<a class="nav-link" href="dashboard.php">Listado de Citas</a>
	    	</li>
	    	<li class="nav-item">
	      		<a class="nav-link" href="appointment.php">Mis citas</a>
	    	</li>
	    	<li class="nav-item">
	      		<a class="nav-link" href="logout.php">Cerrar Sesión</a>
	    	</li>
	  	</ul>
	</nav>