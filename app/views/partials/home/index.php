<?php 
$page_id = null;
$comp_model = new SharedController;
$current_page = $this->set_current_page_link();
?>
<style>
   body{
    background-image: url(assets/images/oo.png);
    background-repeat: no-repeat;
    background-size: cover;
   }
</style>
<div>
    <div  class="p-3 mb-3" style=" background-image: url(assets/images/ll.png);
    background-repeat: no-repeat;
    background-size: cover;">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
<center>                    <h4 ><b>SISTEMA INFORMASAUN REJISTU DADUS KOMPUTADOR IHA ESKOLA TECNIK VOKASIONAL AINARU <br> BAZEADU WEB</b></h4>
</center>
            </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_totaldadusavaria();  ?>
                    <a class="animated zoomIn record-count card bg-light text-dark"  href="<?php print_link("tb_avaria/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons">extension</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">TOTAL DADUS AVARIA</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_totaldaduskomputer();  ?>
                    <a class="animated zoomIn record-count card bg-light text-dark"  href="<?php print_link("tb_komputer/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons">extension</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">TOTAL DADUS KOMPUTER</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_totaldaduskomputer_2();  ?>
                    <a class="animated zoomIn record-count card bg-light text-dark"  href="<?php print_link("tb_staff/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons">extension</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">TOTAL DADUS KOMPUTER</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
            </div>
        </div>
    </div>
</div>
