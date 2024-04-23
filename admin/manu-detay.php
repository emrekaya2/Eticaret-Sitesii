<?php
include("header.php");

//Belirli veriyi seçme işlemi
$menusor=$db->prepare("SELECT * FROM menu where menu_sef=:sef");
$menusor->execute(array(
  'sef' =>$_GET['sef']
  ));
$menucek=$menusor->fetch(PDO::FETCH_ASSOC);
?>

<div class="container">
	
	<div class="row">
		<div class="col-md-9"><!--Main content-->
			<div class="title-bg">
				<div class="title"><?php echo $menucek['menu_ad']?></div>
			</div>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $menucek['menu_video'] ?>" frameborder="0" allowfullscreen></iframe>

			
			<div class="page-content">
				<p>
				<?php echo $menucek['menu_detay']?>
                </p>
			</div>
			

        
		<!-- Sidebar alanı-->
        <?php
        include('sidebar.php');
        ?>
	
	<div class="spacer"></div>
</div>

<?php
include("footer.php");
?>