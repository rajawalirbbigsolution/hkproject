<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">        
        <!-- BEGIN PAGE HEADER-->
        <!--<h3 class="page-title">
            Pengguna System <small>managed pengguna system</small>
        </h3>
        -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i><a href="<?php echo base_url(); ?>spadmin/dashboard">Dashboard</a><i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>spadmin/manage_agenda">Log</a>
            </ul>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-globe"></i>Log
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">&nbsp;
                                </div>
                                <div class="col-md-6">
                                    <div class="btn-group pull-right">
                                        <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i></button>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="<?php echo base_url() . 'spadmin/log_excel' ?>" target="_blank">Export to Excel </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered table-hover" id="sample_2">
                            <thead>
                                <tr>
                                    <th style="width:12px;">NO</th>
                                    <th >IP</th>
                                    <th >Tanggal/Waktu</th>
                                    <th >Keterangan</th>
                                    <th >Pengguna</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($statistik != null) {
                                    $no = 0;
                                    foreach ($statistik as $row):
                                        $no++;
                                        $pengguna = $this->Md_pengguna->getPenggunaById($row->pengguna_id);
                                        $member = $this->Md_member->getMemberById($row->member_id);
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $row->ip ?></td>
                                            <td><?php echo date('d', strtotime($row->tgl)) . " " . bulan(date('M', strtotime($row->tgl))) . " " . date('Y', strtotime($row->tgl)) . "/" . date('H:i:s', strtotime($row->jam)) ?></td>
                                            <td><?php echo $row->keterangan ?></td>
                                            <td><?php if ($pengguna == null) echo ucwords($member[0]->nama) ?>
                                                <?php if ($member == null) echo ucwords($pengguna[0]->nama) ?></td>
                                        </tr>
                                        <?php
                                    endforeach;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
        <!-- END PAGE CONTENT-->    
    </div>
</div>
<!-- END CONTENT -->
