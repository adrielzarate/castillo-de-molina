<?php
  include('mysql/mysql.php');
  include('includes/funciones.php');

  $get = LimpiarGET();
  $post = LimpiarPOST();
  
  ControlAdmin();
  
  $pag_actual = 'noticias';

  if(isset($get['id_noticia']))
  {
    $noticia = Sql_select('noticias',array('id' => $get['id_noticia']),'=');
    $noticia = $noticia[0];
  }


  if(isset($post["titulo"]))
  {
    $valores['titulo'] = $post['titulo'];
    $valores['texto'] = $post['texto'];
    $valores['cod_idioma'] = $post['idioma'];
    $valores['fecha'] = $post['fecha'];
    $valores['link'] = $post['link'];
    if($post['imagen'] != '')
    {
      $valores['img'] = generarCodigo(7,'qwertyuiopasdfghjklzxcvbnm1234567890').'.jpg';
    }

    if($post['id_noticia'] == '')
    {
      Sql_insertar('noticias',$valores);
    }
    else
    {
      Sql_update('noticias',$valores,array('id' => $post['id_noticia']));
    }

    if($post['imagen'] != '')
    {
      $ifp = fopen('../img/noticias/'.$valores['img'], "wb"); 
      $data = explode(',', $post['imagen']);
      fwrite($ifp, base64_decode($data[1])); 
      fclose($ifp);
    }
    header("location: noticias.php?idioma=".$post['idioma']."&operacion=exito");
    exit;
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("includes/head.php"); ?>
</head>
<body>
  <div id="wrapper">
    <?php include("includes/header.php"); ?>
    <div id="page-wrapper">
      <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">
              <?php echo $get["idioma"] == "esp"?"Editar noticia":"Edit news"; ?>
            </h1>
          </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-lg-12">
            <div id="error" class="alert alert-danger alert-dismissible fade in" style="display:none;">
              <h4>
                <?php if($get['idioma'] == 'esp'){
                echo "*El campo título y texto son obligatorios.";
                }else {
                  echo "The title and text field are required"; } ?>
              </h4>
            </div>
            <form role="form" method="post" id="form">
              <input type="hidden" name="idioma" value="<?php echo $get['idioma']; ?>">
              <input type="hidden" name="id_noticia" value="<?php echo $get['id_noticia']; ?>">
              <input type="hidden" id="imagen_end" name="imagen" value="">
              <div class="col-md-6">
                <br>
                <div class="form-group">
                  <label><?php echo $get["idioma"] == "esp"?"Imagen de la noticia":"News image"; ?></label>
                  <button type="button" class="btn btn-primary file_btn"><?php echo $get['idioma'] == 'esp'?'Subir Foto':'Upload Picture'; ?><input type="file" id="input_file"></button>
                  <p class="help-block"><?php echo $get["idioma"] == "esp"?"La imagen debe ser de ":"Image should be "; ?>650x190 pixels</p>
                </div>
                  <?php if($noticia['img'] != '')
                  { ?>
                    <img src="<?php echo '../img/noticias/'.$noticia['img']; ?>" style="width: 217px; height: 63px;" id="img_end">
                  <?php }else{ ?>
                    <img src="" id="img_end">
                  <?php } ?>
                <div class="form-group">
                  <label><?php echo $get["idioma"] == "esp"?"Título":"Title"; ?></label>
                  <input type="text" name="titulo" id="titulo" value="<?php echo $noticia['titulo']; ?>" class="form-control" placeholder="<?php echo $get['idioma'] == 'esp'?'Título de la noticia':'News title'; ?>" >
                </div>
                <div class="form-group">
                  <label><?php echo $get['idioma'] == 'esp'?'Fecha':'Date'; ?></label>
                  <input data-provide="datepicker" class="form-control datepicker" name="fecha" value="<?php echo $noticia['fecha']; ?>" >
                </div>
                <div class="form-group">
                  <label><?php echo $get['idioma'] == 'esp'?'Texto':'Text'; ?></label>
                  <textarea name="texto" id="texto" class="form-control" rows="3" placeholder="<?php echo $get['idioma'] == 'esp'?'Texto de la noticia':'News text'; ?>"><?php echo $noticia['texto']; ?></textarea>
                </div>
                <div class="form-group">
                  <label><?php echo $get["idioma"] == "esp"?"Link a la noticia":"Link to the news"; ?></label>
                  <input type="text" name="link" id="link" value="<?php echo $noticia['link']; ?>" class="form-control" placeholder="<?php echo $get['idioma'] == 'esp'?'Link':'Link'; ?>" >
                </div>
                <div class="form-group text-right">
                  <button type="submit" class="btn btn-primary"><?php echo $get['idioma'] == 'esp'?'Guardar cambios':'Save changes'; ?></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->

  <!-- Modal -->
  <div class="modal fade custom-width" id="modal_file_crop" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title"><?php echo $get['idioma'] == 'esp'?'Cortar Foto':'Cut Picture'; ?></h4>
        </div>
        <div class="modal-body" style="overflow:hidden;2">
          <div id="loading" class="text-center">
            <h4><?php echo $get['idioma'] == 'esp'?'Cargando...':'Loading...'; ?></h4>
            <i class="fa fa-spinner fa-spin" style="font-size: 50px"></i>
          </div>
          <div class="img_croping">
            <div class="col-md-3">
              <h5><?php echo $get['idioma'] == 'esp'?'Vista previa':'Preview'; ?></h5>
              <div id="crop_preview" class="img_crop_preview"></div>
            </div>
            <div class="col-md-9">
              <div class="img_crop_content">
                <img id="img_crop">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $get['idioma'] == 'esp'?'Cancelar':'Cancel'; ?></button>
          <button type="button" class="btn btn-success" id="btn_crop" onclick="EndCrop();"><?php echo $get['idioma'] == 'esp'?'Continuar':'Continue'; ?></button>
        </div>
      </div>
    </div>
  </div>

  <?php include("includes/footer.php"); ?>

  <link rel="stylesheet" type="text/css" href="css/cropper.css">
  <script type="text/javascript" src="js/cropper.js"></script>

  <script type="text/javascript">
    var last_pic;
    var last_pic_crop;

    jQuery("input[type='file']").click(function(e){
      e.stopPropagation();
    });
    $('.file_btn').click(function(){
      $(this).children('#input_file').click();
    });
    $('#input_file').change(function(e){
      var reader = new FileReader();
      reader.onload = function (event) {
        last_pic = event.target.result;
        OpenCrop();
      };
      reader.readAsDataURL(e.target.files[0]);

      $(this).val('');
    });

    $('#form').submit(function(){
      $('#error').hide();
      error = false;
      
      if($('#titulo').val() == '' || $('#texto').val() == '')
      {
        error = true;
      }

      if(error){
        $('#error').show();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
      }
    });

    $('.datepicker').datepicker({
      format: 'yyyy-mm-dd'
    });
    

    function OpenCrop(){
      $('#btn_crop').attr('disabled',true);
      $('#modal_file_crop').find('.modal-body').children().hide();
      $('#modal_file_crop').find('#loading').show();
      $('#modal_file_crop').modal('show');

      $('.img_crop_content').html('<img id="img_crop">');
      console.log(last_pic)
      $("#img_crop").attr('src',last_pic);

      setTimeout(function(){
        $('#modal_file_crop').find('#loading').hide();
        $('#modal_file_crop').find('.img_croping').show();
        $("#img_crop").cropper({
          aspectRatio: 650/190,
          preview: $('#modal_file_crop').find('.img_crop_preview')
        });

        $("#img_crop").cropper("reset");
        $('#btn_crop').removeAttr('disabled');
      },1000);
      $('#crop_preview').css("width","128px").css("height","38px");
    }
    function EndCrop(){
      last_pic_crop = $("#img_crop").cropper("getDataURL",{
        width: 650,
        height: 190,
      },"image/jpeg", 1);
      $('#imagen_end').val(last_pic_crop);
      $("#img_end").attr('src',last_pic_crop).css("width","217px").css("height","63px");
      
      $('#modal_file_crop').modal('hide');
    }
  </script>

</body>
</html>