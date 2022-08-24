<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Biodata Pelamar</div>
    </div>
    <div class="block-content collapse in">
        <div class="span12">

            <h4>Data Detail Pelamar</h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width: 30%;">Posisi yang dilamar</th>
                        <th style="width: 70%;"><?= ($biodata['posisi_lamar']) ? $biodata['posisi_lamar'] : "-" ?></th>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Nama</th>
                        <th style="width: 70%;"><?= ($biodata['nama']) ? $biodata['nama'] : "-" ?></th>
                    </tr>
                    <tr>
                        <th style="width: 30%;">No. KTP</th>
                        <th style="width: 70%;"><?= ($biodata['ktp']) ? $biodata['ktp'] : "-" ?></th>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Tempat, Tanggal Lahir</th>
                        <th style="width: 70%;"><?= $biodata['tempat_lahir']; ?> - <?= ($biodata['tanggal_lahir']) ? $this->General_m->tanggal_indo($biodata["tanggal_lahir"], true) : "-" ?></th>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Jenis Kelamin</th>
                        <th style="width: 70%;"><?= ($biodata['jk'] == "1") ? "Laki - Laki" : "Perempuan" ?></th>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Agama</th>
                        <th style="width: 70%;"><?= ($biodata['agama']) ? $this->General_m->get_name($biodata['agama'], "nama_agama", "tm_agama", "id") : "" ?></th>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Golongan Darah</th>
                        <th style="width: 70%;"><?= ($biodata['gol_darah']) ? $biodata['gol_darah'] : "-" ?></th>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Agama</th>
                        <th style="width: 70%;"><?= ($biodata['status']) ? $this->General_m->get_name($biodata['status'], "status", "tm_status", "id") : "" ?></th>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Alamat KTP</th>
                        <th style="width: 70%;"><?= ($biodata['alamat_ktp']) ? $biodata['alamat_ktp'] : "-" ?></th>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Alamat Tinggal</th>
                        <th style="width: 70%;"><?= ($biodata['alamat_tinggal']) ? $biodata['alamat_tinggal'] : "-" ?></th>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Email</th>
                        <th style="width: 70%;"><?= ($biodata['email']) ? $biodata['email'] : "-" ?></th>
                    </tr>
                    <tr>
                        <th style="width: 30%;">No Tlp</th>
                        <th style="width: 70%;"><?= ($biodata['tlp']) ? $biodata['tlp'] : "-" ?></th>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Orang Terdekat yang bisa di hubungi</th>
                        <th style="width: 70%;"><?= ($biodata['tlp_org']) ? $biodata['tlp_org'] : "-" ?></th>
                    </tr>
                    <tr>
                        <th style="width: 30%;vertical-align:middle;">Pendidikan Terakhir</th>
                        <th style="width: 70%;">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;text-align:center;">No</th>
                                        <th style="width: 25%;text-align:center;">Jenjang Pendidikan Terakhir</th>
                                        <th style="width: 25%;text-align:center;">Nama Institusi Akademik</th>
                                        <th style="width: 15%;text-align:center;">Jurusan</th>
                                        <th style="width: 15%;text-align:center;">Tahun Lulus</th>
                                        <th style="width: 15%;text-align:center;">IPK</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($pendidikan as $pend) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $pend['jenjang_pendidikan']; ?></td>
                                            <td><?= $pend['nama_instansi']; ?></td>
                                            <td><?= $pend['jurusan']; ?></td>
                                            <td style="text-align:center;"><?= $pend['tahun_lulus']; ?></td>
                                            <td><?= $pend['ipk']; ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 30%;vertical-align:middle;">Riwayat Pelatihan</th>
                        <th style="width: 70%;">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;text-align:center;">No</th>
                                        <th style="width: 75%;text-align:center;">Nama Pelatihan</th>
                                        <th style="width: 20%;text-align:center;">Tahun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($pelatihan as $pel) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $pel['nama_pelatihan']; ?></td>
                                            <td style="text-align:center;"><?= $pel['tahun_pelatihan']; ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 30%;vertical-align:middle;">Riwayat Pekerjaan</th>
                        <th style="width: 70%;">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;text-align:center;">No</th>
                                        <th style="width: 35%;text-align:center;">Nama Perusahaan</th>
                                        <th style="width: 20%;text-align:center;">Posisi Terakhir</th>
                                        <th style="width: 20%;text-align:center;">Gaji Terakhir</th>
                                        <th style="width: 20%;text-align:center;">Tahun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($pekerjaan as $job) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $job['nama_perusahaan']; ?></td>
                                            <td style="text-align:center;"><?= $job['posisi_terakhir']; ?></td>
                                            <td style="text-align:right;">Rp. <?= number_format($job['gaji_terakhir'], 0, ',', '.'); ?></td>
                                            <td style="text-align:center;"><?= $job['tahun_pekerjaan']; ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Skill</th>
                        <th style="width: 70%;"><?= ($biodata['skill']) ? $biodata['skill'] : "-" ?></th>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Bersedia ditempatkan di seluruh kantor perusahaan</th>
                        <th style="width: 70%;"><?= ($biodata['kantor'] == "1") ? "YA" : "TIDAK" ?></th>
                    </tr>
                    <tr>
                        <th style="width: 30%;">Penghasilan yang di Harapkan</th>
                        <th style="width: 70%;"><?= ($biodata['gaji_harap']) ? "Rp. " . number_format($biodata['gaji_harap'], 0, ',', '.') : "-" ?></th>
                    </tr>
                </thead>
            </table>
            <a href="<?= base_url("admin"); ?>" class=" btn btn-inverse"><i class="icon-chevron-left icon-white"></i> Kembali</a>
        </div>
    </div>
</div>