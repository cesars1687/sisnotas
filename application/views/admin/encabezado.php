
<html>
<head>
    <title>Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>media/images/ico_notas.png" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>media/bootstrap/css/bootstrap.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>media/css/stylos.css" media="all"/>
    <script type="text/javascript" src="<?php echo base_url(); ?>media/jquery/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>media/bootstrap/js/bootstrap.js"></script>

     <script type="text/javascript">
         function readURL(input) {
             console.log("se cargara la imagen");
             if (input.files && input.files[0]) {
                 var reader = new FileReader();
                 reader.onload = function (e) {
                     $('#img_prev')
                             .attr('src', e.target.result)
                 };
                 reader.readAsDataURL(input.files[0]);
             }
         }
     </script>


</head>
<body>
   <div id="contenido">
      <img id ="logo_principal" src="<?php echo base_url()?>media/images/logo_uigv.jpg">
       <?php echo $menu; ?>
       <?php echo $content; ?>

   </div>


</body>

</html>
