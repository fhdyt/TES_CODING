<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Admin</h1>
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
                    <table class="table table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Tempat Tanggal Lahir</th>
                            <th>Posisi</th>
                            <th></th>
                        </thead>
                        <tbody id="user">
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
    $(function() {
        user_list();
    });

    function user_list() {
        $.ajax({
            type: 'ajax',
            url: "<?php echo base_url() ?>index.php/admin/user_list",
            async: false,
            dataType: 'json',
            success: function(data) {
                $("tbody#user").empty();
                if (data.length === 0) {} else {
                    var no = 1
                    for (i = 0; i < data.length; i++) {
                        $("tbody#user").append("<tr>" +
                            "<td>" + no++ + ".</td>" +
                            "<td>" + data[i].BIODATA_NAMA + "</td>" +
                            "<td>" + data[i].BIODATA_TEMPAT_LAHIR + ", " + data[i].BIODATA_TANGGAL_LAHIR + "</td>" +
                            "<td>" + data[i].BIODATA_POSISI + "</td>" +
                            "<td><a target='_blank'class='btn btn-primary btn-sm mb-2' href='<?php echo base_url(); ?>admin/detail_user/" + data[i].USER_ID + "'>Detail</a></td>" +
                            "</tr>");
                    }
                }
            },
            error: function(x, e) {
                console.log("Gagal")
            }
        });
    }
</script>