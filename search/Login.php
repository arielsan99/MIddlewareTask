<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Inicio Sesion</title>
</head>
<body class="text-center">
    <div class="container">
        <br>
        <h2 style="color: #5D6D7E; ">Inicio de sesión</h2>
        <form action="validar.php" method="post" class="form-signin">
            <table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label style="font-size: 14pt" for="user">Usuario: </label>
                            <input class="form-control" style="border-radius:15px;" type="text" name="user" required placeholder="usuario">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">    
                        <div class="form-group">
                        <label style="font-size: 14pt" for="pass">Contraseña: </label>
                            <input style="border-radius:15px;" type="password" name="pass" class="form-control" required placeholder="*****">
                        </div>
                    </div>
            </div>
                
            <button class="btn btn-lg btn-primary btn-block" type="submit" value="Aceptar">
                <font style="vertical-align: inherit;" >Ingresar</font>
            </button>
                
                    
            
            </td>
                </tr>
            </table>
        </form>
        </div>
    

	
</body>
</html>
