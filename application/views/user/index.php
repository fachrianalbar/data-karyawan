<div class="flash-data" data-flashdata="<?= $this->session->flashdata('sukses'); ?>"></div>
<div class="flash-data-gagal" data-flashdata="<?= $this->session->flashdata('gagal'); ?>"></div>
<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Data Pelamar</div>
    </div>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal" method="post" action="<?= base_url('DashboardController/save'); ?>">
                <fieldset>
                    <legend>Form Data Pelamar</legend>
                    <div class="control-group <?= (form_error('posisi')) ? "error" : "" ?>">
                        <label class="control-label" for="posisi">Posisi yang dilamar</label>
                        <div class="controls">
                            <input class="input-xlarge focused span6" id="posisi" type="text" name="posisi" placeholder="Posisi yang dilamar" value="<?php echo set_value('posisi'); ?>">
                            <?php echo form_error('posisi', '<span class="help-inline">', '</span>'); ?>

                        </div>
                    </div>
                    <div class="control-group <?= (form_error('nama')) ? "error" : "" ?>">
                        <label class="control-label" for="nama">Nama</label>
                        <div class="controls">
                            <input class="input-xlarge focused span6" id="nama" type="text" name="nama" placeholder="Nama" value="<?php echo set_value('nama'); ?>">
                            <?php echo form_error('nama', '<span class="help-inline">', '</span>'); ?>

                        </div>
                    </div>
                    <div class="control-group <?= (form_error('ktp')) ? "error" : "" ?>">
                        <label class="control-label" for="ktp">No. KTP</label>
                        <div class="controls">
                            <input class="input-xlarge focused span6" id="ktp" type="text" name="ktp" placeholder="ktp" maxlength="16" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" value="<?php echo set_value('ktp'); ?>">
                            <?php echo form_error('ktp', '<span class="help-inline">', '</span>'); ?>

                        </div>
                    </div>
                    <div class="control-group <?= (form_error('tmp_lahir')) ? "error" : "" ?>">
                        <label class="control-label" for="tmp_lahir">Tempat Lahir</label>
                        <div class="controls">
                            <input class="input-xlarge focused span6" id="tmp_lahir" type="text" name="tmp_lahir" placeholder="Tempat Lahir" value="<?php echo set_value('tmp_lahir'); ?>">
                            <?php echo form_error('tmp_lahir', '<span class="help-inline">', '</span>'); ?>

                        </div>
                    </div>
                    <div class="control-group <?= (form_error('tgl_lahir')) ? "error" : "" ?>">
                        <label class="control-label" for="tgl_lahir">Tanggal Lahir</label>
                        <div class="controls">
                            <input class="input-xlarge focused span6" id="tgl_lahir" type="date" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo set_value('tgl_lahir'); ?>">
                            <?php echo form_error('tgl_lahir', '<span class="help-inline">', '</span>'); ?>

                        </div>
                    </div>
                    <div class="control-group <?= (form_error('jk')) ? "error" : "" ?>">
                        <label class="control-label" for="jk">Jenis Kelamin</label>
                        <div class="controls">
                            <input type="radio" id="jk" name="jk" value="1"> Laki - Laki
                            &nbsp;&nbsp;&nbsp;
                            <input type="radio" id="jk" name="jk" value="2"> Perempuan
                            <?php echo form_error('jk', '<span class="help-inline">', '</span>'); ?>

                        </div>
                    </div>
                    <div class="control-group <?= (form_error('agama')) ? "error" : "" ?>">
                        <label class=" control-label" for="agama">Agama</label>
                        <div class="controls">
                            <select id="agama" class="chzn-select" name="agama" data-placeholder="Pilih Agama">
                                <option></option>
                                <?php foreach ($agama as $agm) : ?>
                                    <option value="<?= $agm['id']; ?>"><?= $agm['nama_agama']; ?></option>
                                <?php endforeach ?>
                            </select>
                            <?php echo form_error('agama', '<span class="help-inline">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="control-group <?= (form_error('gol_darah')) ? "error" : "" ?>">
                        <label class="control-label" for="gol_darah">Golongan Darah</label>
                        <div class="controls">
                            <input class="input-xlarge focused span6" id="gol_darah" type="text" name="gol_darah" placeholder="Golongan Darah" value="<?php echo set_value('gol_darah'); ?>">
                            <?php echo form_error('gol_darah', '<span class="help-inline">', '</span>'); ?>

                        </div>
                    </div>
                    <div class="control-group <?= (form_error('status')) ? "error" : "" ?>">
                        <label class=" control-label" for="status">Status</label>
                        <div class="controls">
                            <select id="status" class="chzn-select" name="status" data-placeholder="Pilih Status">
                                <option></option>
                                <?php foreach ($status as $st) : ?>
                                    <option value="<?= $st['id']; ?>"><?= $st['status']; ?></option>
                                <?php endforeach ?>
                            </select>
                            <?php echo form_error('status', '<span class="help-inline">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="control-group <?= (form_error('alamat_ktp')) ? "error" : "" ?>">
                        <label class=" control-label" for="alamat_ktp">Alamat KTP</label>
                        <div class="controls">
                            <textarea class="input-xlarge span6" placeholder="Isi Alamat KTP" rows="4" name="alamat_ktp" id="alamat_ktp"><?php echo set_value('alamat_ktp'); ?></textarea>
                            <?php echo form_error('alamat_ktp', '<span class="help-inline">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="control-group <?= (form_error('alamat_tinggal')) ? "error" : "" ?>">
                        <label class=" control-label" for="alamat_tinggal">Alamat Tempat Tinggal</label>
                        <div class="controls">
                            <textarea class="input-xlarge span6" placeholder="Alamat Tempat Tinggal" rows="4" name="alamat_tinggal" id="alamat_tinggal"><?php echo set_value('alamat_tinggal'); ?></textarea>
                            <?php echo form_error('alamat_tinggal', '<span class="help-inline">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="control-group <?= (form_error('email')) ? "error" : "" ?>">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <input class="input-xlarge focused span6" id="email" type="email" name="email" placeholder="Email" value="<?= $email; ?>">
                            <?php echo form_error('email', '<span class="help-inline">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="control-group <?= (form_error('tlp')) ? "error" : "" ?>">
                        <label class="control-label" for="tlp">Telepon</label>
                        <div class="controls">
                            <input class="input-xlarge focused span6" id="tlp" type="text" name="tlp" placeholder="No Telepon" maxlength="16" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                            <?php echo form_error('tlp', '<span class="help-inline">', '</span>'); ?>

                        </div>
                    </div>
                    <div class="control-group <?= (form_error('hporg')) ? "error" : "" ?>">
                        <label class="control-label" for="org">Orang terdekat yang bisa di Hubungi</label>
                        <div class="controls">
                            <input class="input-xlarge focused span6" id="hporg" type="text" name="hporg" placeholder="No Tlp" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                            <?php echo form_error('hporg', '<span class="help-inline">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class=" control-label" for="pendidikan">Pendidikan Terakhir</label>
                        <div class="controls" style="padding-bottom: 10px;">
                            <a id="btn_pendidikan" class="btn btn-success" href="javascript:void(0);">
                                Tambah Pendidikan
                            </a>
                        </div>
                        <div class="controls">
                            <div>
                                <table class="table table-bordered" id="table_pendidikan">
                                    <thead>
                                        <tr>
                                            <th style="width: 30%;">Jenjang Pendidikan Terakhir</th>
                                            <th style="width: 25%;">Nama Institusi Akademik</th>
                                            <th style="width: 15%;">Jurusan</th>
                                            <th style="width: 15%;">Tahun Lulus</th>
                                            <th style="width: 15%;">IPK</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input class="input-xlarge focused span3" id="pend_terakhir" type="text" name="pend_terakhir[]" placeholder="Pendidikan Terakhir"></td>
                                            <td><input class="input-xlarge focused span3" id="pend_nama" type="text" name="pend_nama[]" placeholder="Nama Institusi"></td>
                                            <td><input class="input-xlarge focused span2" id="pend_jurusan" type="text" name="pend_jurusan[]" placeholder="Jurusan"></td>
                                            <td><input class="input-xlarge focused span2" id="tahun_lulus" type="text" name="tahun_lulus[]" placeholder="Tahun Lulus" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"></td>
                                            <td><input class="input-xlarge focused span1" id="pend_ipk" type="text" name="pend_ipk[]" placeholder="IPK"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class=" control-label" for="pendidikan">Riwayat Pelatihan</label>
                        <div class="controls" style="padding-bottom: 10px;">
                            <a id="btn_pelatihan" class="btn btn-success" href="javascript:void(0);">
                                Tambah Pelatihan
                            </a>
                        </div>
                        <div class="controls">
                            <div>
                                <table class="table table-bordered" id="table_pelatihan">
                                    <thead>
                                        <tr>
                                            <th style="width: 30%;">Nama Khursus / Seminar</th>
                                            <th style="width: 15%;">Tahun</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input class="input-xlarge focused span9" id="seminar" type="text" name="seminar[]" placeholder="Nama Khursus / Seminar"></td>
                                            <td><input class="input-xlarge focused span2" id="tahun_seminar" type="text" name="tahun_seminar[]" placeholder="Tahun" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class=" control-label" for="pendidikan">Riwayat Pekerjaan</label>
                        <div class="controls" style="padding-bottom: 10px;">
                            <a id="btn_pekerjaan" class="btn btn-success" href="javascript:void(0);">
                                Tambah Pekerjaan
                            </a>
                        </div>
                        <div class="controls">
                            <div>
                                <table class="table table-bordered" id="table_pekerjaan">
                                    <thead>
                                        <tr>
                                            <th style="width: 30%;">Nama Perusahaan</th>
                                            <th style="width: 25%;">Posisi Terakhir</th>
                                            <th style="width: 15%;">Gaji Terakhir</th>
                                            <th style="width: 15%;">Tahun</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input class="input-xlarge focused span3" id="perusahaan" type="text" name="perusahaan[]" placeholder="Nama Khursus / Seminar"></td>
                                            <td><input class="input-xlarge focused span3" id="posisi_terakhir" type="text" name="posisi_terakhir[]" placeholder="Sertifikat Ada/Tidak"></td>
                                            <td><input type="number" name="gaji[]" id="gaji" placeholder="Gaji Terakhir"></td>
                                            <td><input class="input-xlarge focused span2" id="tahun_pekerjaan" type="text" name="tahun_pekerjaan[]" placeholder="Tahun" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="control-group <?= (form_error('skill')) ? "error" : "" ?>">
                        <label class=" control-label" for="skill">Skill</label>
                        <div class="controls">
                            <textarea class="input-xlarge span6" placeholder="Skill" rows="4" name="skill" id="skill"><?php echo set_value('skill'); ?></textarea>
                            <?php echo form_error('skill', '<span class="help-inline">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="control-group <?= (form_error('kantor')) ? "error" : "" ?>">
                        <label class="control-label" for="jk">Bersedia ditempatkan diseluruh Kantor Perusahaan</label>
                        <div class="controls">
                            <input type="radio" id="kantor" name="kantor" value="1"> Ya
                            &nbsp;&nbsp;&nbsp;
                            <input type="radio" id="kantor" name="kantor" value="0"> Tidak
                            <?php echo form_error('kantor', '<span class="help-inline">', '</span>'); ?>

                        </div>
                    </div>
                    <div class="control-group <?= (form_error('gaji_harap')) ? "error" : "" ?>">
                        <label class="control-label" for="gaji_harap">Gaji yang di Harapkan</label>
                        <div class="controls">
                            <input type="text" name="gaji_harap" id="gaji_harap" data-type="currency" placeholder="Gaji yang di harapkan">
                            <?php echo form_error('gaji_harap', '<span class="help-inline">', '</span>'); ?>

                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <a href="<?= base_url('admin'); ?>" class="btn">Cancel</a>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
</div>

<script type="text/javascript">
    var no_urut = 1;
    $("#btn_pendidikan").click(function() {
        var html = `<tr>
            <td><input class="input-xlarge focused span3" id="pend_terakhir" type="text" name="pend_terakhir[]" placeholder="Pendidikan Terakhir"></td>
            <td><input class="input-xlarge focused span3" id="pend_nama" type="text" name="pend_nama[]" placeholder="Nama Institusi"></td>
            <td><input class="input-xlarge focused span2" id="pend_jurusan" type="text" name="pend_jurusan[]" placeholder="Jurusan"></td>
            <td><input class="input-xlarge focused span2" id="tahun_lulus" type="number" name="tahun_lulus[]" placeholder="Tahun Lulus" maxlength="4"></td>
        <td><input class="input-xlarge focused span1" id="pend_ipk" type="text" name="pend_ipk[]" placeholder="IPK"></td>
        </tr>`;
        $("#table_pendidikan").append(html);
    });

    $("#btn_pelatihan").click(function() {
        no_urut++;
        var html = `<tr>
                        <td><input class="input-xlarge focused span9" id="seminar" type="text" name="seminar[]" placeholder="Nama Khursus / Seminar"></td>
                        <td><input class="input-xlarge focused span2" id="tahun_seminar" type="number" name="tahun_seminar[]" placeholder="Tahun"></td>
                    </tr>`;
        $("#table_pelatihan").append(html);
    });

    $("#btn_pekerjaan").click(function() {
        var html = `<tr>
                        <td><input class="input-xlarge focused span3" id="perusahaan" type="text" name="perusahaan[]" placeholder="Nama Khursus / Seminar"></td>
                        <td><input class="input-xlarge focused span3" id="posisi_terakhir" type="text" name="posisi_terakhir[]" placeholder="Sertifikat Ada/Tidak"></td>
                        <td><input type="number" name="gaji[]" id="gaji" placeholder="Gaji Terakhir"></td>
                        <td><input class="input-xlarge focused span2" id="tahun_pekerjaan" type="number" name="tahun_pekerjaan[]" placeholder="Tahun" maxlength="4"></td>
                    </tr>`;
        $("#table_pekerjaan").append(html);
    });
</script>