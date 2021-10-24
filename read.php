<?php
$vid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from client where	idclient  =$vid");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<div class="card">
  <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
    <a href="javascript:;" class="d-block">
      <img src="assets/uploads/photoIdentite/<?php  echo $row['lienphoto'];?>" class="img-fluid border-radius-lg">
    </a>
  </div>

  <div class="card-body pt-2">
    <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2"><?php  echo $row['nom'];?><?php  echo $row['prenom'];?></span>
    <!-- <a href="javascript:;" class="card-title h5 d-block text-darker">
      Shared Coworking
    </a> -->
    <p class="card-description mb-4">
        N°CNI : <?php  echo $row['CNI'];?> <br />
        N°CARTE : <br />
        DATE DE NAISSANCE : <?php  echo $row['datenaiss'];?> <br />
        LIEU DE NAISSANCE : <?php  echo $row['lieunaiss'];?> <br />  
        SOLDE : <br />  
        N°TELEPHONE : <?php  echo $row['telephone'];?><br />  
        N°EMAIL : <?php  echo $row['email'];?><br />  
     </p>
    <div class="author align-items-center">
      <img src="assets\uploads\signature\<?php  echo $row['liensignature'];?>" alt="..." class="avatar shadow">
      <div class="name ps-3">
        <span>Mathew Glock</span>
        <div class="stats">
          <small>Posted on 28 February</small>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$cnt=$cnt+1;
} ?>
