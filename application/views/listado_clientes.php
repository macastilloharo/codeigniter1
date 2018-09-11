<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>LISTADO DE CLIENTES</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>

<div id="container">
	<h1>Listado de Clientes</h1>
<?php //print_r($usuario);?>

<table class="table">
<thead>
<tr>
      <th scope="col">ID</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Last IP</th>
</tr>

</thead>

<tbody>
  <?php

foreach ($usuario as $user) {
    echo "
    <tr>
  	  <th>{$user['ID']}</th>
      <td>{$user['email']}</td>
      <td>{$user['password']}</td>
      <td>{$user['last_IP']}</td>
     </tr>
        ";
}?>
  </tbody>
</table>

<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>