<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("guru/add");
$can_edit = ACL::is_allowed("guru/edit");
$can_view = ACL::is_allowed("guru/view");
$can_delete = ACL::is_allowed("guru/delete");
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
                    <h4 class="record-title">My Account</h4>
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
                        $rec_id = (!empty($data['kodeguru']) ? urlencode($data['kodeguru']) : null);
                        $counter++;
                        ?>
                        <div class="bg-primary m-2 mb-4">
                            <div class="profile">
                                <div class="avatar"><img src="<?php print_link("assets/images/avatar.png") ?>" /> 
                                </div>
                                <h1 class="title mt-4"><?php echo $data['kodeguru']; ?></h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mx-3 mb-3">
                                    <ul class="nav nav-pills flex-column text-left">
                                        <li class="nav-item">
                                            <a data-toggle="tab" href="#AccountPageView" class="nav-link active">
                                                <i class="fa fa-user"></i> Account Detail
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a data-toggle="tab" href="#AccountPageEdit" class="nav-link">
                                                <i class="fa fa-edit"></i> Edit Account
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a data-toggle="tab" href="#AccountPageChangeEmail" class="nav-link">
                                                <i class="fa fa-envelope"></i> Change Email
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a data-toggle="tab" href="#AccountPageChangePassword" class="nav-link">
                                                <i class="fa fa-key"></i> Reset Password
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <div class="tab-content">
                                        <div class="tab-pane show active fade" id="AccountPageView" role="tabpanel">
                                            <table class="table table-hover table-borderless table-striped">
                                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                                    <tr  class="td-kodeguru">
                                                        <th class="title"> Kodeguru: </th>
                                                        <td class="value">
                                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['kodeguru']; ?>" 
                                                                data-pk="<?php echo $data['kodeguru'] ?>" 
                                                                data-url="<?php print_link("guru/editfield/" . urlencode($data['kodeguru'])); ?>" 
                                                                data-name="kodeguru" 
                                                                data-title="Enter Kodeguru" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="text" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" <?php } ?>>
                                                                <?php echo $data['kodeguru']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-nama">
                                                        <th class="title"> Nama: </th>
                                                        <td class="value">
                                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['nama']; ?>" 
                                                                data-pk="<?php echo $data['kodeguru'] ?>" 
                                                                data-url="<?php print_link("guru/editfield/" . urlencode($data['kodeguru'])); ?>" 
                                                                data-name="nama" 
                                                                data-title="Enter Nama" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="text" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" <?php } ?>>
                                                                <?php echo $data['nama']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-nip">
                                                        <th class="title"> Nip: </th>
                                                        <td class="value">
                                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['nip']; ?>" 
                                                                data-pk="<?php echo $data['kodeguru'] ?>" 
                                                                data-url="<?php print_link("guru/editfield/" . urlencode($data['kodeguru'])); ?>" 
                                                                data-name="nip" 
                                                                data-title="Enter Nip" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="text" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" <?php } ?>>
                                                                <?php echo $data['nip']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-tempatlahir">
                                                        <th class="title"> Tempatlahir: </th>
                                                        <td class="value">
                                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['tempatlahir']; ?>" 
                                                                data-pk="<?php echo $data['kodeguru'] ?>" 
                                                                data-url="<?php print_link("guru/editfield/" . urlencode($data['kodeguru'])); ?>" 
                                                                data-name="tempatlahir" 
                                                                data-title="Enter Tempatlahir" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="text" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" <?php } ?>>
                                                                <?php echo $data['tempatlahir']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-tanggallahir">
                                                        <th class="title"> Tanggallahir: </th>
                                                        <td class="value">
                                                            <span <?php if($can_edit){ ?> data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                                data-value="<?php echo $data['tanggallahir']; ?>" 
                                                                data-pk="<?php echo $data['kodeguru'] ?>" 
                                                                data-url="<?php print_link("guru/editfield/" . urlencode($data['kodeguru'])); ?>" 
                                                                data-name="tanggallahir" 
                                                                data-title="Enter Tanggallahir" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="flatdatetimepicker" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" <?php } ?>>
                                                                <?php echo $data['tanggallahir']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-alamat">
                                                        <th class="title"> Alamat: </th>
                                                        <td class="value">
                                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['alamat']; ?>" 
                                                                data-pk="<?php echo $data['kodeguru'] ?>" 
                                                                data-url="<?php print_link("guru/editfield/" . urlencode($data['kodeguru'])); ?>" 
                                                                data-name="alamat" 
                                                                data-title="Enter Alamat" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="text" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" <?php } ?>>
                                                                <?php echo $data['alamat']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-email">
                                                        <th class="title"> Email: </th>
                                                        <td class="value"> <?php echo $data['email']; ?></td>
                                                    </tr>
                                                    <tr  class="td-nohp">
                                                        <th class="title"> Nohp: </th>
                                                        <td class="value">
                                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['nohp']; ?>" 
                                                                data-pk="<?php echo $data['kodeguru'] ?>" 
                                                                data-url="<?php print_link("guru/editfield/" . urlencode($data['kodeguru'])); ?>" 
                                                                data-name="nohp" 
                                                                data-title="Enter No hp" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="text" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" <?php } ?>>
                                                                <?php echo $data['nohp']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-photo">
                                                        <th class="title"> Photo: </th>
                                                        <td class="value"><?php Html :: page_img($data['photo'],400,400,1); ?></td>
                                                    </tr>
                                                    <tr  class="td-user_role_id">
                                                        <th class="title"> User Role Id: </th>
                                                        <td class="value">
                                                            <a size="sm" class="btn btn-sm btn-primary page-modal" href="<?php print_link("roles/view/" . urlencode($data['user_role_id'])) ?>">
                                                                <i class="fa fa-eye"></i> <?php echo $data['user_role_id'] ?>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>    
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="AccountPageEdit" role="tabpanel">
                                            <div class=" reset-grids">
                                                <?php  $this->render_page("account/edit"); ?>
                                            </div>
                                        </div>
                                        <div class="tab-pane  fade" id="AccountPageChangeEmail" role="tabpanel">
                                            <div class=" reset-grids">
                                                <?php  $this->render_page("account/change_email"); ?>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="AccountPageChangePassword" role="tabpanel">
                                            <div class=" reset-grids">
                                                <?php  $this->render_page("passwordmanager"); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
