<?php
$comp_model = new SharedController;
$page_element_id = "list-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data From Controller
$view_data = $this->view_data;
$records = $view_data->records;
$record_count = $view_data->record_count;
$total_records = $view_data->total_records;
$field_name = $this->route->field_name;
$field_value = $this->route->field_value;
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_footer = $this->show_footer;
$show_pagination = $this->show_pagination;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="list"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container-fluid">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Rlt Geral</h4>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('rlt_geral'); ?>" method="get">
                        <div class="input-group">
                            <input value="<?php echo get_value('search'); ?>" class="form-control" type="text" name="search"  placeholder="Search" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary"><i class="material-icons">search</i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 comp-grid">
                        <div class="">
                            <!-- Page bread crumbs components-->
                            <?php
                            if(!empty($field_name) || !empty($_GET['search'])){
                            ?>
                            <hr class="sm d-block d-sm-none" />
                            <nav class="page-header-breadcrumbs mt-2" aria-label="breadcrumb">
                                <ul class="breadcrumb m-0 p-1">
                                    <?php
                                    if(!empty($field_name)){
                                    ?>
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none" href="<?php print_link('rlt_geral'); ?>">
                                            <i class="material-icons">arrow_back</i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <?php echo (get_value("tag") ? get_value("tag")  :  make_readable($field_name)); ?>
                                    </li>
                                    <li  class="breadcrumb-item active text-capitalize font-weight-bold">
                                        <?php echo (get_value("label") ? get_value("label")  :  make_readable(urldecode($field_value))); ?>
                                    </li>
                                    <?php 
                                    }   
                                    ?>
                                    <?php
                                    if(get_value("search")){
                                    ?>
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none" href="<?php print_link('rlt_geral'); ?>">
                                            <i class="material-icons">arrow_back</i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item text-capitalize">
                                        Search
                                    </li>
                                    <li  class="breadcrumb-item active text-capitalize font-weight-bold"><?php echo get_value("search"); ?></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </nav>
                            <!--End of Page bread crumbs components-->
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <div  class="">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-12 comp-grid">
                        <?php $this :: display_page_errors(); ?>
                        <div class="filter-tags mb-2">
                            <?php
                            if(!empty(get_value('rlt_geral_kode_tipu_komputer'))){
                            ?>
                            <div class="filter-chip card bg-light">
                                <b>Rlt Geral Kode Tipu Komputer :</b> 
                                <?php 
                                if(get_value('rlt_geral_kode_tipu_komputerlabel')){
                                echo get_value('rlt_geral_kode_tipu_komputerlabel');
                                }
                                else{
                                echo get_value('rlt_geral_kode_tipu_komputer');
                                }
                                $remove_link = unset_get_value('rlt_geral_kode_tipu_komputer', $this->route->page_url);
                                ?>
                                <a href="<?php print_link($remove_link); ?>" class="close-btn">
                                    &times;
                                </a>
                            </div>
                            <?php
                            }
                            ?>
                            <?php
                            if(!empty(get_value('rlt_geral_data_rejistu'))){
                            ?>
                            <div class="filter-chip card bg-light">
                                <b>Rlt Geral Data Rejistu :</b> 
                                <?php 
                                if(get_value('rlt_geral_data_rejistulabel')){
                                echo get_value('rlt_geral_data_rejistulabel');
                                }
                                else{
                                echo get_value('rlt_geral_data_rejistu');
                                }
                                $remove_link = unset_get_value('rlt_geral_data_rejistu', $this->route->page_url);
                                ?>
                                <a href="<?php print_link($remove_link); ?>" class="close-btn">
                                    &times;
                                </a>
                            </div>
                            <?php
                            }
                            ?>
                            <?php
                            if(!empty(get_value('rlt_geral_kode_avaria_diak'))){
                            ?>
                            <div class="filter-chip card bg-light">
                                <b>Rlt Geral Kode Avaria Diak :</b> 
                                <?php 
                                if(get_value('rlt_geral_kode_avaria_diaklabel')){
                                echo get_value('rlt_geral_kode_avaria_diaklabel');
                                }
                                else{
                                echo get_value('rlt_geral_kode_avaria_diak');
                                }
                                $remove_link = unset_get_value('rlt_geral_kode_avaria_diak', $this->route->page_url);
                                ?>
                                <a href="<?php print_link($remove_link); ?>" class="close-btn">
                                    &times;
                                </a>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div  class=" animated fadeIn page-content">
                            <div id="rlt_geral-list-records">
                                <div id="page-report-body" class="table-responsive">
                                    <table class="table  table-striped table-sm text-left">
                                        <thead class="table-header bg-light">
                                            <tr>
                                                <th class="td-sno">#</th>
                                                <th  class="td-id"> Id</th>
                                                <th  class="td-naran"> Naran</th>
                                                <th  class="td-data_rejistu"> Data Rejistu</th>
                                                <th  class="td-kode_komputer"> Kode Komputer</th>
                                                <th  class="td-kode_tipu_komputer"> Kode Tipu Komputer</th>
                                                <th  class="td-kode_avaria_diak"> Kode Avaria Diak</th>
                                                <th  class="td-kode_staff"> Kode Staff</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if(!empty($records)){
                                        ?>
                                        <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                            <!--record-->
                                            <?php
                                            $counter = 0;
                                            foreach($records as $data){
                                            $rec_id = (!empty($data['']) ? urlencode($data['']) : null);
                                            $counter++;
                                            ?>
                                            <tr>
                                                <th class="td-sno"><?php echo $counter; ?></th>
                                                <td class="td-id"> <?php echo $data['id']; ?></td>
                                                <td class="td-naran"> <?php echo $data['naran']; ?></td>
                                                <td class="td-data_rejistu"> <?php echo $data['data_rejistu']; ?></td>
                                                <td class="td-kode_komputer"> <?php echo $data['kode_komputer']; ?></td>
                                                <td class="td-kode_tipu_komputer"> <?php echo $data['kode_tipu_komputer']; ?></td>
                                                <td class="td-kode_avaria_diak"> <?php echo $data['kode_avaria_diak']; ?></td>
                                                <td class="td-kode_staff"> <?php echo $data['kode_staff']; ?></td>
                                            </tr>
                                            <?php 
                                            }
                                            ?>
                                            <!--endrecord-->
                                        </tbody>
                                        <tbody class="search-data" id="search-data-<?php echo $page_element_id; ?>"></tbody>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                    <?php 
                                    if(empty($records)){
                                    ?>
                                    <h4 class="bg-light text-center border-top text-muted animated bounce  p-3">
                                        <i class="material-icons">block</i> Dadus Laiha tabela
                                    </h4>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <?php
                                if( $show_footer && !empty($records)){
                                ?>
                                <div class=" border-top mt-2">
                                    <div class="row justify-content-center">    
                                        <div class="col-md-auto justify-content-center">    
                                            <div class="p-3 d-flex justify-content-between">    
                                                <div class="dropup export-btn-holder mx-1">
                                                    <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="material-icons">save</i> Export dadus
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <?php $export_print_link = $this->set_current_page_link(array('format' => 'print')); ?>
                                                        <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                                            <img src="<?php print_link('assets/images/print.png') ?>" class="mr-2" /> PRINT
                                                            </a>
                                                            <?php $export_pdf_link = $this->set_current_page_link(array('format' => 'pdf')); ?>
                                                            <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                                                <img src="<?php print_link('assets/images/pdf.png') ?>" class="mr-2" /> PDF
                                                                </a>
                                                                <?php $export_word_link = $this->set_current_page_link(array('format' => 'word')); ?>
                                                                <a class="dropdown-item export-link-btn" data-format="word" href="<?php print_link($export_word_link); ?>" target="_blank">
                                                                    <img src="<?php print_link('assets/images/doc.png') ?>" class="mr-2" /> WORD
                                                                    </a>
                                                                    <?php $export_csv_link = $this->set_current_page_link(array('format' => 'csv')); ?>
                                                                    <a class="dropdown-item export-link-btn" data-format="csv" href="<?php print_link($export_csv_link); ?>" target="_blank">
                                                                        <img src="<?php print_link('assets/images/csv.png') ?>" class="mr-2" /> CSV
                                                                        </a>
                                                                        <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                                                                        <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                                                            <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col">   
                                                                <?php
                                                                if($show_pagination == true){
                                                                $pager = new Pagination($total_records, $record_count);
                                                                $pager->route = $this->route;
                                                                $pager->show_page_count = true;
                                                                $pager->show_record_count = true;
                                                                $pager->show_page_limit =true;
                                                                $pager->limit_count = $this->limit_count;
                                                                $pager->show_page_number_list = true;
                                                                $pager->pager_link_range=5;
                                                                $pager->render();
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div  class="">
                                <div class="container-fluid">
                                    <div class="row ">
                                        <div class="col-md-4 comp-grid">
                                            <form method="get" action="<?php print_link($current_page) ?>" class="form filter-form">
                                                <div class="card mb-3">
                                                    <div class="card-header h4 h4">Filter by Tipu Komputer</div>
                                                    <div class="p-2">
                                                        <?php 
                                                        $rlt_geral_kode_tipu_komputer_options = $comp_model -> rlt_geral_rlt_geralkode_tipu_komputer_option_list();
                                                        if(!empty($rlt_geral_kode_tipu_komputer_options)){
                                                        $ci = 0;
                                                        foreach($rlt_geral_kode_tipu_komputer_options as $option){
                                                        $ci++;
                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                        $checked = $this->set_field_checked('rlt_geral_kode_tipu_komputer', $value);
                                                        ?>
                                                        <label class="custom-control custom-checkbox custom-control-inline">
                                                            <input id="" class="custom-control-input" <?php echo $checked; ?> value="<?php echo $value; ?>" type="checkbox" name="rlt_geral_kode_tipu_komputer[]"  />
                                                                <span class="custom-control-label"><?php echo $label; ?></span>
                                                            </label>
                                                            <?php
                                                            }
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                    <div class="form-group text-center">
                                                        <button class="btn btn-primary">Filter</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-4 comp-grid">
                                                <form method="get" action="<?php print_link($current_page) ?>" class="form filter-form">
                                                    <div class="card mb-3">
                                                        <div class="card-header h4 h4">Filter by Data Rejistu</div>
                                                        <div class="p-2">
                                                            <?php 
                                                            $rlt_geral_data_rejistu_options = $comp_model -> rlt_geral_rlt_geraldata_rejistu_option_list();
                                                            if(!empty($rlt_geral_data_rejistu_options)){
                                                            $ci = 0;
                                                            foreach($rlt_geral_data_rejistu_options as $option){
                                                            $ci++;
                                                            $value = (!empty($option['value']) ? $option['value'] : null);
                                                            $label = (!empty($option['label']) ? $option['label'] : $value);
                                                            $checked = $this->set_field_checked('rlt_geral_data_rejistu', $value);
                                                            ?>
                                                            <label class="custom-control custom-checkbox custom-control-inline">
                                                                <input id="" class="custom-control-input" <?php echo $checked; ?> value="<?php echo $value; ?>" type="checkbox" name="rlt_geral_data_rejistu[]"  />
                                                                    <span class="custom-control-label"><?php echo $label; ?></span>
                                                                </label>
                                                                <?php
                                                                }
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="form-group text-center">
                                                            <button class="btn btn-primary">Filter</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-4 comp-grid">
                                                    <form method="get" action="<?php print_link($current_page) ?>" class="form filter-form">
                                                        <div class="card mb-3">
                                                            <div class="card-header h4 h4">Filter by  Avaria Diak</div>
                                                            <div class="p-2">
                                                                <?php 
                                                                $rlt_geral_kode_avaria_diak_options = $comp_model -> rlt_geral_rlt_geralkode_avaria_diak_option_list();
                                                                if(!empty($rlt_geral_kode_avaria_diak_options)){
                                                                $ci = 0;
                                                                foreach($rlt_geral_kode_avaria_diak_options as $option){
                                                                $ci++;
                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                $checked = $this->set_field_checked('rlt_geral_kode_avaria_diak', $value);
                                                                ?>
                                                                <label class="custom-control custom-checkbox custom-control-inline">
                                                                    <input id="" class="custom-control-input" <?php echo $checked; ?> value="<?php echo $value; ?>" type="checkbox" name="rlt_geral_kode_avaria_diak[]"  />
                                                                        <span class="custom-control-label"><?php echo $label; ?></span>
                                                                    </label>
                                                                    <?php
                                                                    }
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <hr />
                                                            <div class="form-group text-center">
                                                                <button class="btn btn-primary">Filter</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
