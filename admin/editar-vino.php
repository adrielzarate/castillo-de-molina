<?php
  include('mysql/mysql.php');
  include('includes/funciones.php');

  $get = LimpiarGET();
  $post = LimpiarPOST();
  
  ControlAdmin();
  
  $pag_actual = 'vinos';

  if(isset($get['id_vino']))
  {
    $vino = Sql_select('vinos',array('id' => $get['id_vino']),'=');
    $vino = $vino[0];
    
    $visibilidad = explode(',',$vino['visibilidad']);
    
    $chile = false;
    $colombia = false;
    $finlandia = false;
    $venezuela = false;
    $resto = false;
    foreach($visibilidad as $pais)
    {
      if($pais == "Chile")
      {
        $chile = true;
      }
      if($pais == "Colombia")
      {
        $colombia = true;
      }
      if($pais == "Finland")
      {
        $finlandia = true;
      }
      if($pais == "Venezuela")
      {
        $venezuela = true;
      }
      if($pais == "resto")
      {
        $resto = true;
      }
    }
  }


  if(isset($post["nombre"]))
  {
    $valores['nombre'] = $post['nombre'];
    $valores['cod_idioma'] = $post['idioma'];
    $valores['titulo_origen'] = $post['titulo_origen'];
    $valores['texto_origen'] = $post['texto_origen'];
    $valores['titulo_vendimia'] = $post['titulo_vendimia'];
    $valores['texto_vendimia'] = $post['texto_vendimia'];
    $valores['titulo_clima'] = $post['titulo_clima'];
    $valores['texto_clima'] = $post['texto_clima'];
    $valores['titulo_vinificacion'] = $post['titulo_vinificacion'];
    $valores['texto_vinificacion'] = $post['texto_vinificacion'];
    $valores['visibilidad'] = '';
    
    if(isset($post['chile']) && isset($post['colombia']) && isset($post['venezuela']) && isset($post['finland']))
    {
      $valores['visibilidad'] = '';
    }
    else
    {

      if(isset($post['chile']))
      {
        $valores['visibilidad'] .= $post['chile'].',';
      }
      
      if(isset($post['colombia']))
      {
        $valores['visibilidad'] .= $post['colombia'].',';
      }

      if(isset($post['venezuela']))
      {
        $valores['visibilidad'] .= $post['venezuela'].',';
      }

      if(isset($post['finland']))
      {
        $valores['visibilidad'] .= $post['finland'].',';
      }

      if(isset($post['resto']))
      {
        $valores['visibilidad'] .= $post['resto'].',';
      }

    }


    if($_FILES['zip']['name'] != '')
    {
      $valores['zip'] = generarCodigo(7,'qwertyuiopasdfghjklzxcvbnm1234567890').'.zip';
      $valores['zip_nombre'] = $_FILES['zip']['name'];
      copy($_FILES['zip']['tmp_name'],'../img/vinos/zip/'.$valores['zip']);
    }

    if($post['imagen_slide'] != '')
    {
      $valores['slide'] = generarCodigo(7,'qwertyuiopasdfghjklzxcvbnm1234567890').'.png';
    }

    if($post['imagen_horizontal'] != '')
    {
      $valores['horizontal'] = generarCodigo(7,'qwertyuiopasdfghjklzxcvbnm1234567890').'.png';
    }

    if($post['imagen_dia'] != '')
    {
      $valores['img_dia'] = generarCodigo(7,'qwertyuiopasdfghjklzxcvbnm1234567890').'.png';
    }

    if($post['imagen_noche'] != '')
    {
      $valores['img_noche'] = generarCodigo(7,'qwertyuiopasdfghjklzxcvbnm1234567890').'.png';
    }
    
    if($post['id_vino'] == '')
    {
      Sql_insertar('vinos',$valores);
    }
    else
    {
      Sql_update('vinos',$valores,array('id' => $post['id_vino']));
    }

    if($post['imagen_slide'] != '')
    {
      $ifp = fopen('../img/vinos/'.$valores['slide'], "wb"); 
      $data = explode(',', $post['imagen_slide']);
      fwrite($ifp, base64_decode($data[1])); 
      fclose($ifp);
    }

    if($post['imagen_horizontal'] != '')
    {
      $ifp = fopen('../img/vinos/'.$valores['horizontal'], "wb"); 
      $data = explode(',', $post['imagen_horizontal']);
      fwrite($ifp, base64_decode($data[1])); 
      fclose($ifp);
    }

    if($post['imagen_dia'] != '')
    {
      $ifp = fopen('../img/vinos/'.$valores['img_dia'], "wb"); 
      $data = explode(',', $post['imagen_dia']);
      fwrite($ifp, base64_decode($data[1])); 
      fclose($ifp);
    }

    if($post['imagen_noche'] != '')
    {
      $ifp = fopen('../img/vinos/'.$valores['img_noche'], "wb"); 
      $data = explode(',', $post['imagen_noche']);
      fwrite($ifp, base64_decode($data[1])); 
      fclose($ifp);
    }

    header("location: vinos.php?idioma=".$post['idioma']."&operacion=exito");
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
              <?php echo $get["idioma"] == "esp"?"Editar vino":"Edit wine"; ?>
            </h1>
          </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-lg-12">
            <div id="error" class="alert alert-danger alert-dismissible fade in" style="display:none;">
              <h4>
                <?php if($get['idioma'] == 'esp'){
                echo "*Todos los campos son obligatorios.";
                }else {
                  echo "*All fields are mandatory"; } ?>
              </h4>
            </div>
            <form role="form" method="post" enctype="multipart/form-data" id="form">
              <input type="hidden" name="idioma" value="<?php echo $get['idioma']; ?>">
              <input type="hidden" name="id_vino" value="<?php echo $vino['id']; ?>">
              <input type="hidden" id="imagen_slide_end" name="imagen_slide" value="">
              <input type="hidden" id="imagen_horizontal_end" name="imagen_horizontal" value="">
              <input type="hidden" id="imagen_dia_end" name="imagen_dia" value="">
              <input type="hidden" id="imagen_noche_end" name="imagen_noche" value="">
              <div class="col-md-6">
                <br>
                <div class="form-group">
                  <label><?php echo $get["idioma"] == "esp"?"Nombre del vino":"Wine name"; ?></label>
                  <input type="text" name="nombre" id="nombre" value="<?php echo $vino['nombre']; ?>" class="form-control" placeholder="<?php echo $get['idioma'] == 'esp'?'Nombre del vino':'Wine name'; ?>" >
                </div>

                <div class="form-group">
                  <label><?php echo $get["idioma"] == "esp"?"Imagen vino slideshow":"Wine image slideshow"; ?></label>
                  <?php if($vino['slide'] != '')
                  { ?>
                   <img src="<?php echo '../img/vinos/'.$vino['slide']; ?>" id="img_slide_end" style="width:67px;height:126px;">
                  <?php } else{ ?>
                    <img src="" id="img_slide_end">
                  <?php } ?>
                  <button data-sp="slide" type="button" class="btn btn-primary file_btn"><?php echo $get['idioma'] == 'esp'?'Subir Foto':'Upload Picture'; ?>
                  <input type="file" id="input_file"></button>
                  <p class="help-block"><?php echo $get["idioma"] == "esp"?"La imagen debe ser de ":"Image should be "; ?>200x378 pixels</p>
                </div>

                <div class="form-group">
                  <label><?php echo $get["idioma"] == "esp"?"Imagen vino horizontal":"Wine image horizontally"; ?></label>
                  <?php if($vino['horizontal'] != '')
                  { ?>
                    <img style="width:267px;height:76px;" src="<?php echo '../img/vinos/'.$vino['horizontal']; ?>" id="img_horizontal_end">
                  <?php } else{ ?>
                    <img src="" id="img_horizontal_end">
                  <?php } ?>
                  <button data-sp="horizontal" type="button" class="btn btn-primary file_btn"><?php echo $get['idioma'] == 'esp'?'Subir Foto':'Upload Picture'; ?>
                  <input type="file" id="input_file"></button>
                  <p class="help-block"><?php echo $get["idioma"] == "esp"?"La imagen debe ser de ":"Image should be "; ?>800x228 pixels</p>
                </div>

                <div class="form-group">
                  <label><?php echo $get["idioma"] == "esp"?"Imagen texto gestual dia":"Image text gestural day"; ?></label>
                  <?php if($vino['img_dia'] != '')
                  { ?>
                    <img style="width:281px;height:199px;" src="<?php echo '../img/vinos/'.$vino['img_dia']; ?>" id="img_dia_end">
                  <?php } else{ ?>
                    <img src="" id="img_dia_end">
                  <?php } ?>
                  <button data-sp="dia" type="button" class="btn btn-primary file_btn"><?php echo $get['idioma'] == 'esp'?'Subir Foto':'Upload Picture'; ?>
                  <input type="file" id="input_file"></button>
                  <p class="help-block"><?php echo $get["idioma"] == "esp"?"La imagen debe ser de ":"Image should be "; ?>843x597 pixels</p>
                </div>

                <div class="form-group">
                  <label><?php echo $get["idioma"] == "esp"?"Imagen texto gestual noche":"Image text gestural night"; ?></label>
                  <?php if($vino['img_noche'] != '')
                  { ?>
                    <img style="width:281px;height:199px;" src="<?php echo '../img/vinos/'.$vino['img_noche']; ?>" id="img_noche_end">
                  <?php } else{ ?>
                    <img src="" id="img_noche_end">
                  <?php } ?>
                  <button data-sp="noche" type="button" class="btn btn-primary file_btn"><?php echo $get['idioma'] == 'esp'?'Subir Foto':'Upload Picture'; ?>
                  <input type="file" id="input_file"></button>
                  <p class="help-block"><?php echo $get["idioma"] == "esp"?"La imagen debe ser de ":"Image should be "; ?>843x597 pixels</p>
                </div>

                <div class="form-group">
                  <label>Wine Kit</label>
                  <input type="file" name="zip">
                  <p class="help-block"><?php echo $get["idioma"] == "esp"?"El archivo debe estar en formato zip":"The file must be in zip format"; ?></p>
                  <?php if($vino['zip'] != '')
                  { ?>
                    <a href="<?php echo '../img/vinos/zip/'.$vino['zip']; ?>" class="btn btn-primary"><?php echo $vino['zip_nombre']; ?></a>
                  <?php } ?>
                </div>
                <div class="form-group">
                  <label><?php echo $get["idioma"] == "esp"?"Visibilidad":"Visibility"; ?></label><br>
                    <label>Chile</label>
                    <?php if($chile){ ?>
                      <input  type="checkbox" checked="true" name="chile" value="Chile"><br>
                    <?php }else{ ?>
                      <input  type="checkbox" name="chile" value="Chile"><br>
                    <?php } ?>                    
                    <label>Colombia</label>
                    <?php if($colombia){ ?>
                      <input  type="checkbox" checked="true" name="colombia" value="Colombia"><br>
                    <?php }else{ ?>
                      <input  type="checkbox" name="colombia" value="Colombia"><br>
                    <?php } ?>                    
                    <label>Venezuela</label>
                    <?php if($venezuela){ ?>
                      <input  type="checkbox" checked="true" name="venezuela" value="Venezuela"><br>
                    <?php }else{ ?>
                      <input  type="checkbox" name="venezuela" value="Venezuela"><br>
                    <?php } ?>                    
                    <label>Finlandia</label>
                    <?php if($finlandia){ ?>
                      <input  type="checkbox" checked="true" name="finland" value="Finland"><br>
                    <?php }else{ ?>
                      <input  type="checkbox" name="finland" value="Finland"><br>
                    <?php } ?>                    
                    <label>Resto del mundo</label>
                    <?php if($resto){ ?>
                      <input  type="checkbox" checked="true" name="resto" value="resto">
                    <?php }else{ ?>
                      <input  type="checkbox" name="resto" value="resto">
                    <?php } ?>
                    <p class="help-block"><?php echo $get["idioma"] == "esp"?"Si no marca ninguna opción,el vino será visible para todo el mundo":"If you do not check any options, the wine will be visible for everyone"; ?></p>
                </div>

                <div class="form-group">
                  <label><?php echo $get["idioma"] == "esp"?"Título origen":"Origin title"; ?></label>
                  <input name="titulo_origen" id="titulo_origen" class="form-control" value="<?php echo $vino['titulo_origen']; ?>" placeholder="<?php echo $get['idioma'] == 'esp'?'Título origen':'Origin title'; ?>">
                </div>

                <div class="form-group">
                  <label><?php echo $get['idioma'] == 'esp'?'Texto origen':'Origin text'; ?></label>
                  <textarea name="texto_origen" id="texto_origen" class="form-control" rows="3" placeholder="<?php echo $get['idioma'] == 'esp'?'Texto origen':'Origin text'; ?>"><?php echo $vino['texto_origen']; ?></textarea>
                </div>

                <div class="form-group">
                  <label><?php echo $get['idioma'] == 'esp'?'Título vendimia':'Vintage title'; ?></label>
                  <input name="titulo_vendimia" id="titulo_vendimia" value="<?php echo $vino['titulo_vendimia']; ?>" class="form-control" placeholder="<?php echo $get['idioma'] == 'esp'?'Título vendimia':'Vintage title'; ?>" >
                </div>

                <div class="form-group">
                  <label><?php echo $get['idioma'] == 'esp'?'Texto vendimia':'Vintage text'; ?></label>
                  <textarea class="form-control" name="texto_vendimia" id="texto_vendimia" rows="3" placeholder="<?php echo $get['idioma'] == 'esp'?'Texto vendimia':'Vintage text'; ?>"><?php echo $vino['texto_vendimia']; ?></textarea>
                </div>

                <div class="form-group">
                  <label><?php echo $get['idioma'] == 'esp'?'Título clima':'Weather title'; ?></label>
                  <input class="form-control" name="titulo_clima" id="titulo_clima" value="<?php echo $vino['titulo_clima']; ?>" placeholder="<?php echo $get['idioma'] == 'esp'?'Título clima':'Weather title'; ?>" >
                </div>

                <div class="form-group">
                  <label><?php echo $get['idioma'] == 'esp'?'Texto clima':'Weather text'; ?></label>
                  <textarea class="form-control" name="texto_clima" id="texto_clima" rows="3" placeholder="<?php echo $get['idioma'] == 'esp'?'Texto clima':'Weather text'; ?>"><?php echo $vino['texto_clima']; ?></textarea>
                </div>

                <div class="form-group">
                  <label><?php echo $get['idioma'] == 'esp'?'Título vinificación':'Vinification title'; ?></label>
                  <input class="form-control" name="titulo_vinificacion" id="titulo_vinificacion" value="<?php echo $vino['titulo_vinificacion']; ?>" placeholder="<?php echo $get['idioma'] == 'esp'?'Título vinificación':'Vinification title'; ?>" >
                </div>

                <div class="form-group">
                  <label><?php echo $get['idioma'] == 'esp'?'Texto vinificación':'Vinification text'; ?></label>
                  <textarea class="form-control" rows="3" name="texto_vinificacion" id="texto_vinificacion" placeholder="<?php echo $get['idioma'] == 'esp'?'Texto vinificación':'Vinification text'; ?>"><?php echo $vino['texto_vinificacion']; ?></textarea>
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
            <h4><?php echo $get['idioma'] == 'esp'?'Cargando':'Loading'; ?></h4>
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
    
    $('#form').submit(function(){
      $('#error').hide();
      error = false;

      if($('#imagen_slide_end').val() == '')
      {
        if("<?php echo $vino['slide']; ?>" == '')
        {
          error = true;
        }
      }

      if($('#imagen_horizontal_end').val() == '')
      {
        if("<?php echo $vino['horizontal']; ?>" == '')
        {
          error = true;
        }
      }

      if($('#imagen_dia_end').val() == '')
      {
        if("<?php echo $vino['img_dia']; ?>" == '')
        {
          error = true;
        }
      }

      if($('#imagen_noche_end').val() == '')
      {
        if("<?php echo $vino['img_noche']; ?>" == '')
        {
          error = true;
        }
      }
      
      $('.form-control').each(function(){
        if($(this).val() == '')
        {
          error = true;
        }
      });

      if(error){
        $('#error').show();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
      }
    });

    $('.datepicker').datepicker({
      format: 'yyyy-mm-dd'
    });



    var last_pic;
    var last_pic_crop;
    var dimensiones = {
      slide : {
        aspectRatio_crop : 200/378,
        end_image_width : 200,
        end_image_height : 378,
        width_mini : '67px',
        height_mini : '126px',
        height_crop : '242px',
        end_input_image : '#imagen_slide_end',
        end_input_image_view : '#img_slide_end'
      },
      horizontal : {
        aspectRatio_crop : 800/228,
        end_image_width : 800,
        end_image_height : 228,
        width_mini : '267px',
        height_mini : '76px',
        height_crop : '37px',
        end_input_image : '#imagen_horizontal_end',
        end_input_image_view : '#img_horizontal_end'
      },
      dia : {
        aspectRatio_crop : 843/597,
        end_image_width : 843,
        end_image_height : 597,
        width_mini : '281px',
        height_mini : '199px',
        height_crop : '91px',
        end_input_image : '#imagen_dia_end',
        end_input_image_view : '#img_dia_end'
      },
      noche : {
        aspectRatio_crop : 843/597,
        end_image_width : 843,
        end_image_height : 597,
        width_mini : '281px',
        height_mini : '199px',
        height_crop : '91px',
        end_input_image : '#imagen_noche_end',
        end_input_image_view : '#img_noche_end'
      }
    }
    var last_image_open = "";

    jQuery("input[type='file']").click(function(e){
      e.stopPropagation();
    });
    $('.file_btn').click(function(){
      $(this).children('#input_file').click();
    });
    $('.file_btn').find('#input_file').change(function(e){
      var reader = new FileReader();
      var tmp = this;
      reader.onload = function (event) {
        last_pic = event.target.result;
        OpenCrop($(tmp).parent().data('sp'));
      };
      reader.readAsDataURL(e.target.files[0]);

      $(this).val('');
    });

    function OpenCrop(data){
      last_image_open = data;
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
          aspectRatio: dimensiones[data].aspectRatio_crop,
          preview: $('#modal_file_crop').find('.img_crop_preview')
        });

        $("#img_crop").cropper("reset");
        $('#btn_crop').removeAttr('disabled');
      },1000);
      $('#crop_preview').css("width","128px").css("height",dimensiones[last_image_open].height_crop);
    }
    function EndCrop(){
      last_pic_crop = $("#img_crop").cropper("getDataURL",{
        width: dimensiones[last_image_open].end_image_width,
        height: dimensiones[last_image_open].end_image_height,
      },"image/png", 1);
      $(dimensiones[last_image_open].end_input_image).val(last_pic_crop);
      $(dimensiones[last_image_open].end_input_image_view).attr('src',last_pic_crop).css("width",dimensiones[last_image_open].width_mini).css("height",dimensiones[last_image_open].height_mini);

      $('#modal_file_crop').modal('hide');
    }
  </script>

</body>
</html>
