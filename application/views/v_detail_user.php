<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?php ?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card card-default color-palette-box">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <table class="table table-borderd">

                        <tr>
                            <td>Posisi yang dilamat</td>
                            <td>:</td>
                            <td><?php echo $data[0]->BIODATA_POSISI; ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?php echo $data[0]->BIODATA_NAMA; ?></td>
                        </tr>
                        <tr>
                            <td>No. KTP</td>
                            <td>:</td>
                            <td><?php echo $data[0]->BIODATA_KTP; ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><?php echo $data[0]->BIODATA_JENIS_KELAMIN; ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td><?php echo $data[0]->BIODATA_AGAMA; ?></td>
                        </tr>
                        <tr>
                            <td>Golongan Darah</td>
                            <td>:</td>
                            <td><?php echo $data[0]->BIODATA_GOLONGAN_DARAH; ?></td>
                        </tr>
                        <tr>
                            <td>Status/td>
                            <td>:</td>
                            <td><?php echo $data[0]->BIODATA_STATUS; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat KTP</td>
                            <td>:</td>
                            <td><?php echo $data[0]->BIODATA_ALAMAT_KTP; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat Tinggal</td>
                            <td>:</td>
                            <td><?php echo $data[0]->BIODATA_ALAMAT_TINGGAL; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php echo $data[0]->BIODATA_EMAIL; ?></td>
                        </tr>
                        <tr>
                            <td>No Telp</td>
                            <td>:</td>
                            <td><?php echo $data[0]->BIODATA_TELP; ?></td>
                        </tr>
                        <tr>
                            <td>Orang Terdekat</td>
                            <td>:</td>
                            <td><?php echo $data[0]->BIODATA_ORANG_TERDEKAT; ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <table class="table">
                                    <thead>
                                        <th>Pendidikan Terakhir</th>
                                        <th>Nama Instansi Akademik</th>
                                        <th>Jurusan</th>
                                        <th>Tahun Lulus</th>
                                        <th>IPK</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($pendidikan as $row) { ?>
                                            <td><?php echo $row->PENDIDIKAN_TERAKHIR; ?></td>
                                            <td><?php echo $row->PENDIDIKAN_AKADEMIK; ?></td>
                                            <td><?php echo $row->PENDIDIKAN_JURUSAN; ?></td>
                                            <td><?php echo $row->PENDIDIKAN_TAHUN_LULUS; ?></td>
                                            <td><?php echo $row->PENDIDIKAN_IPK; ?></td>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <table class="table">
                                    <thead>
                                        <th>Nama Kursus</th>
                                        <th>Sertifikat</th>
                                        <th>Tahun</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($pelatihan as $row) { ?>
                                            <td><?php echo $row->PELATIHAN_NAMA; ?></td>
                                            <td><?php echo $row->PELATIHAN_SERTIFIKAT; ?></td>
                                            <td><?php echo $row->PELATIHAN_TAHUN; ?></td>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <table class="table">
                                    <thead>
                                        <th>Nama Perusahaan</th>
                                        <th>Posisi Terakhir</th>
                                        <th>Pendapatan Terakhir</th>
                                        <th>Tahun</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($pekerjaan as $row) { ?>
                                            <td><?php echo $row->PEKERJAAN_NAMA; ?></td>
                                            <td><?php echo $row->PEKERJAAN_POSISI; ?></td>
                                            <td><?php echo $row->PEKERJAAN_PENDAPATAN; ?></td>
                                            <td><?php echo $row->PEKERJAAN_TAHUN; ?></td>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td>Skill</td>
                            <td>:</td>
                            <td><?php echo $data[0]->BIODATA_SKILL; ?></td>
                        </tr>
                        <tr>
                            <td>Bersedia Ditempatkan diseluruh kantor perusahaan</td>
                            <td>:</td>
                            <td><?php echo $data[0]->BIODATA_BERSEDIA_DITEMPATKAN; ?></td>
                        </tr>
                        <tr>
                            <td>Penghasil yang diharapkan</td>
                            <td>:</td>
                            <td><?php echo $data[0]->BIODATA_PENGHASILAN; ?></td>
                        </tr>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->