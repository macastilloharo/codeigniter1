
<!-------------------------------------------
Header
-------------------------------------------->
<?php
include 'loginHeader.php';
?>


<!-------------------------------------------
Content
=======
-------------------------------------------->

<div class="container caja">
	<div class="row">
	<h2><strong>Login </strong> <br/></h2><br/>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<!-- Start form -->
                    <!--<form action="<?=base_url("LoginController/validar")?>" method="post">-->
                    <form action="" method="post">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo Electrónico</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Introduzca email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                      </div>
                      <div class="form-check">
                        <button class="btn btn-info" type="button" name="showpassword" id="showpassword" value="Show Password">Mostrar contraseña</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                      </div>

                    </form>
                    <h2>
                      <?php if (isset($mensaje)) {
    echo $mensaje;
}
?></h2>
                     <?=validation_errors();?><!--mostrar los errores de validación-->

			<!-- End form -->
		</div>


	</div>
</div>


<!-------------------------------------------
Footer
======
-------------------------------------------->
<?php
include 'LoginFooter.php';
?>
