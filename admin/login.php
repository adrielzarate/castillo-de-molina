<?php
	include('mysql/mysql.php');
	$post = LimpiarPOST();
	if(isset($_SESSION['administrador']))
		{
			header("location: index.php");
			exit;
		}
	if(isset($post['user']))
	{
		if($user = Sql_select('administradores',array('user' => $post['user'],'pass' => $post['password']),'='))
		{
			$_SESSION['administrador'] = $user[0];
			header("location: index.php");
			exit;
		}
		else
		{
			$error = 1;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include('includes/head.php'); ?>
</head>
<body>
<div class="single-widget-container">
    <section class="widget login-widget">
		<header class="text-align-center">
			<img width="300px" src="../img/logo-day.png">
		</header>
        <div class="body">
            <form class="no-margin" action="" method="post" id="form">
                <fieldset>
                    <div class="form-group no-margin">
						<label id="lbl_error"><?php if(isset($error)){ echo 'Usuario o Contraseña incorrectos*'; } ?></label>
                        <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="icon-user"></i>
                                </span>
                            <input id="user" type="user" name="user" class="form-control input-lg" placeholder="Usuario" style="font-size:13px" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
						<label></label>
                        <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="icon-lock"></i>
                                </span>
                            <input id="password" type="password" name="password" class="form-control input-lg" placeholder="Contraseña">
                        </div>

                    </div>
                </fieldset>
                <div class="form-actions">
                    <button type="submit" class="btn btn-block btn-lg btn-login">
                        <span class="small-circle"><i class="icon-caret-right"></i></span>
                        <small>Ingresar</small>
                    </button>
                    <div class="forgot"></div>
                </div>
            </form>
        </div>
    </section>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#form').submit(function(){
			$('#lbl_error').css({'display':'none'});
			if($('#user').val()=='')
			{
				$('#lbl_error').html('* Ingrese su Usuario');
				$('#lbl_error').css({'display':'block'});
				return false;
			}
			if($('#password').val()=='')
			{
				$('#lbl_error').html('* Ingrese su Contraseña');
				$('#lbl_error').css({'display':'block'});
				return false;
			}
			return true;
		});
	});
</script>
</body>
</html>