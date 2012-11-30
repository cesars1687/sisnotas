
<html>
<head>
    <title>Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>media/bootstrap/css/bootstrap.css" media="all"/>
    <link href='http://fonts.googleapis.com/css?family=Chela+One' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo base_url(); ?>media/js/jquery-1.8.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>media/css/stylos.css" media="all"/>
    <script type="text/javascript" src="<?php echo base_url(); ?>media/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>media/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
<style>
   #cont{


       border: solid 2px #e5e5e5 ;
       border-radius: 15px;
       width: 60%;
       height: 600px;
       background: #ffffff;
       margin: 50px auto 50px auto;
       background: -webkit-linear-gradient(top, rgba(255,255,255,1) 57%,rgba(229,229,229,1) 97%)
   }
    #raya{

        border: solid 1px #e5e5e5;
    }
    #reg{
        width: 70%;
        margin-top: 50px;
        float : right;
    }
    #key{
        margin-top: 50px;
        width: 30%;
        height: 180px;
        float: left;
    }
    #par{
        font-weight: bold;

        font-size: 20px;
        color: #092869;

    }


</style>
 <div id="cont" >
  <img src="<?php echo base_url()?>media/images/logo_uigv.jpg">
  <HR id="raya"  >
     <div id="key">
         <img src="<?php echo base_url()?>media/images/key.jpg">
     </div>


  <div id="reg">
      <p id="par">Registro de Usuario</p>
      <?php if(validation_errors()): ?>
      <div class="alert alert-error" >
          <a class="close" data-dismiss="alert" href="#">×</a><?php echo validation_errors(); ?>
      </div>
      <?php endif ?>
      <form  action="<?php echo base_url(); ?>admin/login" accept-charset="UTF-8" method="post">
          <input type="text" id="username" class="span4" name="username" placeholder="Usuario.." style="height: 35px" required>
          <input type="password" id="password" class="span4" name="password" placeholder="Contraseña.." style="height: 35px" required>

          <input type="submit"  value ="Entrar" name="submit" class="btn btn-info btn-block" style="width: 150px"/>
      </form>
  </div>
     <p style="margin-top: 455px; color: #a2a2a2">©2012 Sisnotas • Todos los derechos reservados.</p>
 </div>


</body>

  </html>
