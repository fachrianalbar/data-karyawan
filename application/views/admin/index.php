<div class="flash-data" data-flashdata="<?= $this->session->flashdata('sukses'); ?>"></div>
<div class="flash-data-gagal" data-flashdata="<?= $this->session->flashdata('gagal'); ?>"></div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span10" id="content">
            <div class="row-fluid">
                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Data Calon Pelamar</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <div class="table-toolbar">
                                <?php if ($this->session->userdata('role') == "1") : ?>
                                    <div class="btn-group">
                                        <a href="<?= base_url("user"); ?>"><button class="btn btn-success">Add New <i class="icon-plus icon-white"></i></button></a>
                                    </div>
                                <?php endif; ?>

                            </div>

                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;text-align:center;">No</th>
                                        <th style="width: 25%;text-align:center;">Nama</th>
                                        <th style="width: 15%;text-align:center;">Posisi yang dilamar</th>
                                        <th style="width: 15%;text-align:center;">Tempat Lahir</th>
                                        <th style="width: 20%;text-align:center;">Tanggal Lahir</th>
                                        <th style="width: 15%;text-align:center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($biodata as $bio) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $bio["nama"]; ?></td>
                                            <td><?= $bio["posisi_lamar"]; ?></td>
                                            <td><?= $bio["tempat_lahir"]; ?></td>
                                            <td><?= $this->General_m->tanggal_indo($bio["tanggal_lahir"], true); ?></td>
                                            <td style="text-align:center;">
                                                <a href="<?= base_url("detail"); ?>/<?= $bio['uuid']; ?>" class="btn"><i class=" icon-eye-open"></i> Detail</a>
                                                <a href="<?= base_url("delete"); ?>/<?= $bio['uuid']; ?>" class="btn btn-danger tombol-hapus"><i class="icon-remove icon-white"></i> Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /block -->
            </div>
        </div>
    </div>
</div>