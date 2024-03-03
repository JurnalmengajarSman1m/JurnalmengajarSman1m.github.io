<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("agenda/add");
$can_edit = ACL::is_allowed("agenda/edit");
$can_view = ACL::is_allowed("agenda/view");
$can_delete = ACL::is_allowed("agenda/delete");
?>
<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">View  Agenda</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['kodeagenda']) ? urlencode($data['kodeagenda']) : null);
                        $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <tr  class="td-tanggal">
                                        <th class="title"> Tanggal: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['tanggal']; ?>" 
                                                data-pk="<?php echo $data['kodeagenda'] ?>" 
                                                data-url="<?php print_link("agenda/editfield/" . urlencode($data['kodeagenda'])); ?>" 
                                                data-name="tanggal" 
                                                data-title="Enter Tanggal" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['tanggal']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-waktu">
                                        <th class="title"> Waktu: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['waktu']; ?>" 
                                                data-pk="<?php echo $data['kodeagenda'] ?>" 
                                                data-url="<?php print_link("agenda/editfield/" . urlencode($data['kodeagenda'])); ?>" 
                                                data-name="waktu" 
                                                data-title="Enter Waktu" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="time" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['waktu']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-kodeguru">
                                        <th class="title"> Guru: </th>
                                        <td class="value">
                                            <a size="sm" class="btn btn-sm btn-primary page-modal" href="<?php print_link("guru/view/" . urlencode($data['kodeguru'])) ?>">
                                                <i class="fa fa-eye"></i> <?php echo $data['guru_nama'] ?>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr  class="td-kodemapel">
                                        <th class="title"> Mata Pelajaran: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-source='<?php print_link('api/json/agenda_kodemapel_option_list'); ?>' 
                                                data-value="<?php echo $data['kodemapel']; ?>" 
                                                data-pk="<?php echo $data['kodeagenda'] ?>" 
                                                data-url="<?php print_link("agenda/editfield/" . urlencode($data['kodeagenda'])); ?>" 
                                                data-name="kodemapel" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['kodemapel']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-kelas">
                                        <th class="title"> Kelas: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-source='<?php print_link('api/json/agenda_kelas_option_list'); ?>' 
                                                data-value="<?php echo $data['kelas']; ?>" 
                                                data-pk="<?php echo $data['kodeagenda'] ?>" 
                                                data-url="<?php print_link("agenda/editfield/" . urlencode($data['kodeagenda'])); ?>" 
                                                data-name="kelas" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['kelas']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-materi">
                                        <th class="title"> Materi: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-pk="<?php echo $data['kodeagenda'] ?>" 
                                                data-url="<?php print_link("agenda/editfield/" . urlencode($data['kodeagenda'])); ?>" 
                                                data-name="materi" 
                                                data-title="Enter Materi" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['materi']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-jumlahsiswa">
                                        <th class="title"> Jumlah siswa: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['jumlahsiswa']; ?>" 
                                                data-pk="<?php echo $data['kodeagenda'] ?>" 
                                                data-url="<?php print_link("agenda/editfield/" . urlencode($data['kodeagenda'])); ?>" 
                                                data-name="jumlahsiswa" 
                                                data-title="Enter Jumlah Siswa" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['jumlahsiswa']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-tidakhadir">
                                        <th class="title"> Tanpa keterangan: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['tidakhadir']; ?>" 
                                                data-pk="<?php echo $data['kodeagenda'] ?>" 
                                                data-url="<?php print_link("agenda/editfield/" . urlencode($data['kodeagenda'])); ?>" 
                                                data-name="tidakhadir" 
                                                data-title="Enter Tanpa Keterangan" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['tidakhadir']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-ijin">
                                        <th class="title"> Ijin: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['ijin']; ?>" 
                                                data-pk="<?php echo $data['kodeagenda'] ?>" 
                                                data-url="<?php print_link("agenda/editfield/" . urlencode($data['kodeagenda'])); ?>" 
                                                data-name="ijin" 
                                                data-title="Enter Ijin" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['ijin']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-photo">
                                        <th class="title"> Photo Kegiatan: </th>
                                        <td class="value"><?php Html :: page_img($data['photo'],100,100,1); ?></td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <div class="dropup export-btn-holder mx-1">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-save"></i> Export
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
                                                <?php if($can_edit){ ?>
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("agenda/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <?php } ?>
                                                <?php if($can_delete){ ?>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("agenda/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                    <i class="fa fa-times"></i> Delete
                                                </a>
                                                <?php } ?>
                                            </div>
                                            <?php
                                            }
                                            else{
                                            ?>
                                            <!-- Empty Record Message -->
                                            <div class="text-muted p-3">
                                                <i class="fa fa-ban"></i> No Record Found
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
