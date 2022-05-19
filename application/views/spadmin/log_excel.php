<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Laporan_Log_WebPCR.xls");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
?>
<style type="text/css">
    .judul{
        font-weight:700;
        font-size:18px;
        margin-bottom:10px;
        width:100%;
        height:26px;
        background:blue;
        color:#111;
        padding-top:2px;
        margin-top:4px;
        text-align:center;
        -moz-border-radius-topleft:2px;
        -moz-border-radius-topright:2px;
        -moz-border-radius-bottomleft:2px;
        -moz-border-radius-bottomright:2px;
        -webkit-border-top-left-radius:2px;
        -webkit-border-top-right-radius:2px;
        -webkit-border-bottom-left-radius:2px;
        -webkit-border-bottom-right-radius:2px;
    }
</style>
<div class="judul">
    &nbsp;Laporan Statistik Website Politeknik Caltex Riau
</div>
<div class="bloc">
    <div class="title">
        &nbsp;
    </div>
    <div class="content">
        <table  class="sortable resizable"  width="100%" style="font-size:12px;" border="1">
            <thead>
                <tr bgcolor="#DDDDDD">
                    <th class="sortfirstasc" width="30">No.</th>
                    <th width="120">IP</th>
                    <th >Tanggal/Waktu</th>
                    <th >Keterangan</th>
                    <th >Pengguna</th>                       
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                if (isset($data)) {
                    foreach ($data as $row) {
                        $no++;
                        $pengguna = $this->Md_pengguna->getPenggunaById($row->pengguna_id);
                        ?>
                        <tr>                         
                            <td><?php echo $no ?></td>
                            <td><?php echo $row->ip ?></td>
                            <td><?php echo date('d', strtotime($row->tgl)) . " " . bulan(date('M', strtotime($row->tgl))) . " " . date('Y', strtotime($row->tgl)) . "/" . date('H:i:s', strtotime($row->jam)) ?></td>
                            <td><?php echo $row->keterangan ?></td>
                            <td><?php echo ucwords($pengguna[0]->nama) ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
