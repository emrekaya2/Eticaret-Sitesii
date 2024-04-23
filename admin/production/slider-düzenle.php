<?php 

include 'header.php'; 


$slidersor=$db->prepare("SELECT * FROM slider where slider_id=:id");
$slidersor->execute(array(
  'id' => $_GET['slider_id']
  ));

$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Slider Düzenleme <small>,

              <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>


            </small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
            

          
            <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <input type="file" id="first-name"  name="slider_resimyol"  class="form-control col-md-7 col-xs-12">
  </div>
  </div>

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Ad <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="first-name" name="slider_ad"  required="required" placeholder="Slider adını giriniz" class="form-control col-md-7 col-xs-12">
    </div>
  </div>



<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Url <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="first-name" name="slider_link"   placeholder="Slider url giriniz" class="form-control col-md-7 col-xs-12">
  </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Sıra <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="first-name" name="slider_sira"  required="required" placeholder="Slider sıra giriniz"  class="form-control col-md-7 col-xs-12">
    </div>
  </div>


<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Durum<span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
   <select id="heard" class="form-control" name="slider_durum" required>

      <option value="1" >Aktif</option>

      <option value="0" >Pasif</option>
    
     </select>
   </div>
 </div>

 <div class="ln_solid"></div>
 <div class="form-group">
  <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
    <button type="submit" name="sliderdüzenle" class="btn btn-success">Kaydet</button>
  </div>
</div>

</form>

        </div>
      </div>
    </div>
  </div>



  <hr>
  <hr>
  <hr>



</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
