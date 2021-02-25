<div class="modal fade" id="pendidikanModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Pendidikan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="pendidikan">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pendidikan Terakhir</label>
                        <input type="text" class="form-control" name="pendidikan_terakhir" value="" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Instansi Akademik</label>
                        <input type="text" class="form-control" name="instansi" value="" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" value="" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tahun Lulus</label>
                        <input type="text" class="form-control" name="tahun" value="" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">IPK</label>
                        <input type="text" class="form-control" name="ipk" value="" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
<!-- /.modal -->





<div class="modal fade" id="pelatihanModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Pelatihan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="pelatihan">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kursus</label>
                        <input type="text" class="form-control" name="nama" value="" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sertifikat</label>
                        <div class="icheck-primary">
                            <input type="radio" name="sertifikat" id="sertifikat1" value="ya">
                            <label for="sertifikat1">
                                Ya
                            </label>
                        </div>
                        <div class="icheck-primary">
                            <input type="radio" name="sertifikat" id="sertifikat2" value="tidak">
                            <label for="sertifikat2">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tahun</label>
                        <input type="text" class="form-control" name="tahun" value="" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
<!-- /.modal -->






<div class="modal fade" id="pekerjaanModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Pekerjaan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="pekerjaan">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Perusahaan</label>
                        <input type="text" class="form-control" name="nama" value="" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Posisi Terakhir</label>
                        <input type="text" class="form-control" name="posisi" value="" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pendapatan Terakhir</label>
                        <input type="text" class="form-control" name="pendapatan" value="" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tahun</label>
                        <input type="text" class="form-control" name="tahun" value="" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
<!-- /.modal -->

<?php if (!empty($tersimpan)) {
    //$nama_lengkap_pria = $tersimpan[0]->KONF_PENGANTIN_PRIA_NAMA_LENGKAP;
    $posisi = $tersimpan[0]->BIODATA_POSISI;
    $nama = $tersimpan[0]->BIODATA_NAMA;
    $no_ktp = $tersimpan[0]->BIODATA_KTP;
    $tempat_lahir = $tersimpan[0]->BIODATA_TEMPAT_LAHIR;
    $tanggal_lahir = $tersimpan[0]->BIODATA_TANGGAL_LAHIR;
    $jenis_kelamin = $tersimpan[0]->BIODATA_JENIS_KELAMIN;

    $agama = $tersimpan[0]->BIODATA_AGAMA;
    $golongan_darah = $tersimpan[0]->BIODATA_GOLONGAN_DARAH;
    $status = $tersimpan[0]->BIODATA_STATUS;
    $alamat_ktp = $tersimpan[0]->BIODATA_ALAMAT_KTP;
    $alamat_tinggal = $tersimpan[0]->BIODATA_ALAMAT_TINGGAL;
    $email = $tersimpan[0]->BIODATA_EMAIL;
    $no_telp = $tersimpan[0]->BIODATA_TELP;
    $orang_terdekat = $tersimpan[0]->BIODATA_ORANG_TERDEKAT;
    $skill = $tersimpan[0]->BIODATA_SKILL;
    $bersedia_ditempatkan = $tersimpan[0]->BIODATA_BERSEDIA_DITEMPATKAN;
    $penghasilan = $tersimpan[0]->BIODATA_PENGHASILAN;
} else {
    $posisi = "";
    $nama = "";
    $no_ktp = "";
    $tempat_lahir = "";
    $tanggal_lahir = "";
    $jenis_kelamin = "";

    $agama = "";
    $golongan_darah = "";
    $status = "";
    $alamat_ktp = "";
    $alamat_tinggal = "";
    $email = "";
    $no_telp = "";
    $orang_terdekat = "";
    $skill = "";
    $bersedia_ditempatkan = "";
    $penghasilan = "";
}

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Biodata</h1>
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
                    <form action="dashboard/simpan" method="post">
                        <div class="row">
                            <div class="col-md-12">

                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Posisi yang dilamar</label>
                                    <input value="<?php echo $posisi; ?>" type="text" class="form-control" name="posisi">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input value="<?php echo $nama; ?>" type="text" class="form-control" name="nama">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>No KTP</label>
                                    <input value="<?php echo $no_ktp; ?>" type="text" class="form-control" name="nomor_ktp">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input value="<?php echo $tempat_lahir; ?>" type="text" class="form-control" name="tempat_lahir">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input value="<?php echo $tanggal_lahir; ?>" type="date" class="form-control" name="tanggal_lahir">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <div class="icheck-primary">
                                        <input <?php if ($jenis_kelamin == "pria") {
                                                    echo "checked";
                                                } else {
                                                    echo "";
                                                } ?> type="radio" name="jenis_kelamin" id="radioDanger1" value="pria">
                                        <label for="radioDanger1">
                                            Pria
                                        </label>
                                    </div>
                                    <div class="icheck-primary">
                                        <input <?php if ($jenis_kelamin == "wanita") {
                                                    echo "checked";
                                                } else {
                                                    echo "";
                                                } ?> type="radio" name="jenis_kelamin" id="radioDanger2" value="wanita">
                                        <label for="radioDanger2">
                                            Wanita
                                        </label>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Agama</label>
                                    <input value="<?php echo $agama; ?>" type="text" class="form-control" name="agama">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Golongan Darah</label>
                                    <input value="<?php echo $golongan_darah; ?>" type="text" class="form-control" name="gol_darah">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Status</label>
                                    <input value="<?php echo $status; ?>" type="text" class="form-control" name="status">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alamat KTP</label>
                                    <input value="<?php echo $alamat_ktp; ?>" type="text" class="form-control" name="alamat_ktp">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alamat Tinggal</label>
                                    <input value="<?php echo $alamat_tinggal; ?>" type="text" class="form-control" name="alamat_tinggal">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input value="<?php echo $email; ?>" type="email" class="form-control" name="email">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>No. Telp</label>
                                    <input value="<?php echo $no_telp; ?>" type="text" class="form-control" name="telp">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Orang terdekat yang dapat dihubungi </label>
                                    <input value="<?php echo $orang_terdekat; ?>" type="text" class="form-control" name="orang_telp">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <hr>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Pendidikan</label>
                                    <br>
                                    <a class="btn btn-primary btn-xs tambah_pendidikan mb-2">Tambah Pendidikan</a>
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>#</th>
                                            <th>Pendidikan Terakhir</th>
                                            <th>Nama Instansi Akademik</th>
                                            <th>Jurusan</th>
                                            <th>Tahun Lulus</th>
                                            <th>IPK</th>
                                            <th></th>
                                        </thead>
                                        <tbody id="pendidikan">
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <hr>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Riwayat Pelatihan</label>
                                    <br>
                                    <a class="btn btn-primary btn-xs tambah_pelatihan mb-2">Tambah Pelatihan</a>
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>#</th>
                                            <th>Nama Kursus</th>
                                            <th>Sertifikat</th>
                                            <th>Tahun</th>
                                            <th></th>
                                        </thead>
                                        <tbody id="pelatihan">
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <hr>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Riwayat Pekerjaan</label>
                                    <br>
                                    <a class="btn btn-primary btn-xs tambah_pekerjaan mb-2">Tambah Pekerjaan</a>
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>#</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Posisi Terakhir</th>
                                            <th>Pendapatan Terakhir</th>
                                            <th>Tahun</th>
                                        </thead>
                                        <tbody id="pekerjaan">
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <hr>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Skill</label>
                                    <input value="<?php echo $skill; ?>" type="text" class="form-control" name="skill">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Bersedia ditempatkan diseluruh kantor perusahaan</label>
                                    <div class="icheck-primary">
                                        <input <?php if ($bersedia_ditempatkan == "ya") {
                                                    echo "checked";
                                                } else {
                                                    echo "";
                                                } ?> type="radio" name="bersedia_ditempatkan" id="radioDanger3" value="ya">
                                        <label for="radioDanger3">
                                            Ya
                                        </label>
                                    </div>
                                    <div class="icheck-primary">
                                        <input <?php if ($bersedia_ditempatkan == "tidak") {
                                                    echo "checked";
                                                } else {
                                                    echo "";
                                                } ?> type="radio" name="bersedia_ditempatkan" id="radioDanger4" value="tidak">
                                        <label for="radioDanger4">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Penghasil yang diharapkan</label>
                                    <input value="<?php echo $penghasilan; ?>" type="text" class="form-control" name="penghasilan">
                                </div>
                                <!-- /.form-group -->
                            </div>

                            <!-- /.col -->
                            <!-- /.col -->
                        </div>
                        <button type="submit" class="btn btn-secondary change_password">Simpan</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
    $(".tambah_pendidikan").on("click", function() {
        $("#pendidikanModal").modal("show")
    })

    $(function() {
        pendidikan_list();
    });

    $('#pendidikan').submit(function(e) {
        $.ajax({
            url: '<?php echo base_url(); ?>index.php/dashboard/pendidikan_simpan',
            type: "post",
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            success: function(data) {
                pendidikan_list();
                $("#pendidikanModal").modal("hide")
            }
        });
    })


    function pendidikan_list() {
        $.ajax({
            type: 'ajax',
            url: "<?php echo base_url() ?>index.php/dashboard/pendidikan_list",
            async: false,
            dataType: 'json',
            success: function(data) {
                $("tbody#pendidikan").empty();
                if (data.length === 0) {} else {
                    var no = 1
                    for (i = 0; i < data.length; i++) {
                        $("tbody#pendidikan").append("<tr>" +
                            "<td>" + no++ + ".</td>" +
                            "<td>" + data[i].PENDIDIKAN_TERAKHIR + "</td>" +
                            "<td>" + data[i].PENDIDIKAN_AKADEMIK + "</td>" +
                            "<td>" + data[i].PENDIDIKAN_JURUSAN + "</td>" +
                            "<td>" + data[i].PENDIDIKAN_TAHUN_LULUS + "</td>" +
                            "<td>" + data[i].PENDIDIKAN_IPK + "</td>" +
                            "<td><a class='btn btn-danger btn-sm mb-2' onclick='hapus_pendidikan(\"" + data[i].PENDIDIKAN_ID + "\")'><i class='fas fa-trash'></i></a></td>" +
                            "</tr>");
                    }
                }
            },
            error: function(x, e) {
                console.log("Gagal")
            }
        });
    }

    function hapus_pendidikan(id) {
        Swal.fire({
            title: 'Hapus Pendidikan ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: `Hapus`,
            denyButtonText: `Batal`,
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'ajax',
                    url: '<?php echo base_url() ?>index.php/dashboard/hapus_pendidikan/' + id,
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        if (data.length === 0) {} else {
                            pendidikan_list();
                            Swal.fire('Terhapus!', 'Pendidikan telah terhapus', 'success')
                        }
                    },
                    error: function(x, e) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Proses Gagal'
                        })
                    } //end error
                });

            }
        })
    }









    $(".tambah_pelatihan").on("click", function() {
        $("#pelatihanModal").modal("show")
    })

    $(function() {
        pelatihan_list();
    });

    $('#pelatihan').submit(function(e) {
        $.ajax({
            url: '<?php echo base_url(); ?>index.php/dashboard/pelatihan_simpan',
            type: "post",
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            success: function(data) {
                pelatihan_list();
                $("#pelatihanModal").modal("hide")
            }
        });
    })


    function pelatihan_list() {
        $.ajax({
            type: 'ajax',
            url: "<?php echo base_url() ?>index.php/dashboard/pelatihan_list",
            async: false,
            dataType: 'json',
            success: function(data) {
                $("tbody#pelatihan").empty();
                if (data.length === 0) {} else {
                    var no = 1
                    for (i = 0; i < data.length; i++) {
                        $("tbody#pelatihan").append("<tr>" +
                            "<td>" + no++ + ".</td>" +
                            "<td>" + data[i].PELATIHAN_NAMA + "</td>" +
                            "<td>" + data[i].PELATIHAN_SERTIFIKAT + "</td>" +
                            "<td>" + data[i].PELATIHAN_TAHUN + "</td>" +
                            "<td><a class='btn btn-danger btn-sm mb-2' onclick='hapus_pelatihan(\"" + data[i].PELATIHAN_ID + "\")'><i class='fas fa-trash'></i></a></td>" +
                            "</tr>");
                    }
                }
            },
            error: function(x, e) {
                console.log("Gagal")
            }
        });
    }

    function hapus_pelatihan(id) {
        Swal.fire({
            title: 'Hapus Pelatihan ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: `Hapus`,
            denyButtonText: `Batal`,
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'ajax',
                    url: '<?php echo base_url() ?>index.php/dashboard/hapus_pelatihan/' + id,
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        if (data.length === 0) {} else {
                            pelatihan_list();
                            Swal.fire('Terhapus!', 'Pelatihan telah terhapus', 'success')
                        }
                    },
                    error: function(x, e) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Proses Gagal'
                        })
                    } //end error
                });

            }
        })
    }
















    $(".tambah_pekerjaan").on("click", function() {
        $("#pekerjaanModal").modal("show")
    })

    $(function() {
        pekerjaan_list();
    });

    $('#pekerjaan').submit(function(e) {
        $.ajax({
            url: '<?php echo base_url(); ?>index.php/dashboard/pekerjaan_simpan',
            type: "post",
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            success: function(data) {
                pekerjaan_list();
                $("#pekerjaanModal").modal("hide")
            }
        });
    })


    function pekerjaan_list() {
        $.ajax({
            type: 'ajax',
            url: "<?php echo base_url() ?>index.php/dashboard/pekerjaan_list",
            async: false,
            dataType: 'json',
            success: function(data) {
                $("tbody#pekerjaan").empty();
                if (data.length === 0) {} else {
                    var no = 1
                    for (i = 0; i < data.length; i++) {
                        $("tbody#pekerjaan").append("<tr>" +
                            "<td>" + no++ + ".</td>" +
                            "<td>" + data[i].PEKERJAAN_NAMA + "</td>" +
                            "<td>" + data[i].PEKERJAAN_POSISI + "</td>" +
                            "<td>" + data[i].PEKERJAAN_PENDAPATAN + "</td>" +
                            "<td>" + data[i].PEKERJAAN_TAHUN + "</td>" +
                            "<td><a class='btn btn-danger btn-sm mb-2' onclick='hapus_pekerjaan(\"" + data[i].PEKERJAAN_ID + "\")'><i class='fas fa-trash'></i></a></td>" +
                            "</tr>");
                    }
                }
            },
            error: function(x, e) {
                console.log("Gagal")
            }
        });
    }

    function hapus_pekerjaan(id) {
        Swal.fire({
            title: 'Hapus pekerjaan ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: `Hapus`,
            denyButtonText: `Batal`,
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'ajax',
                    url: '<?php echo base_url() ?>index.php/dashboard/hapus_pekerjaan/' + id,
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        if (data.length === 0) {} else {
                            pekerjaan_list();
                            Swal.fire('Terhapus!', 'pekerjaan telah terhapus', 'success')
                        }
                    },
                    error: function(x, e) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Proses Gagal'
                        })
                    } //end error
                });

            }
        })
    }
</script>