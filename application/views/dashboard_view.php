<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Weonly Health Exercise">
    <meta name="author" content="Weonly">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Dashboard Weonly</title>

    <!-- Sweetalert2 core CSS -->
    <link href="<?php echo base_url("vendor/swal/css/sweetalert2.min.css") ?>" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("vendor/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('vendor/datatable/datatables.min.css'); ?>">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/fontawesome.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/owl.css") ?>">
  </head>

  <body>
    <div class="container">
        <div class="card my-3">
            <div class="card-header">
                <center>
                    <h2>
                        Dashboard We Only Health Exercise
                    </h2>
                    <a href="<?php echo base_url('dashboard/logout') ?>"> << Logout</a>
                    <hr/>
                    <br/>
                    <h4>
                        Data Customer
                    </h4>
                </center>
            </div>

            <div class="card-body">
                <table id="dataTable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Date Create</th>
                            <th scope="col">Message</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url("vendor/jquery/jquery.min.js") ?>"></script>
    <script src="<?php echo base_url("vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
    <script src="<?php echo base_url('vendor/datatable/datatables.min.js'); ?>"></script>

    <!-- Sweetalert2 core JavaScript -->
    <script src="<?php echo base_url("vendor/swal/sweetalert2.all.min.js") ?>"></script>

    <script type="text/javascript">
        var table;
        $(document).ready(function () {
            $.fn.dataTable.Responsive.breakpoints.push({
                name: 'fablet',
                width: 667
            });

            table = $('#dataTable').DataTable({
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "responsive": true,
                "dom": '<"mb-3"<"pull-left"l><"pull-right datatable-search"f><"clearfix">><rt><"mt-3"<"pull-left"i><"pull-right datatable-pagination"p>><"clearfix">',
                "bStateSave": true, // save datatable state(pagination, sort, etc) in cookie.
                "length": [
                    [10, 20, 50, 100, 150, -1],
                    [10, 20, 50, 100, 150, "All"] // change per page values here
                ],

                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?php echo base_url("dashboard/getData") ?>",
                    "type": "POST"
                },
                "columnDefs": [
                    {"targets": [0, -1],"orderable": false},
                    {"targets":[0,1,2,3,4], "className": "desktop"},
                    {"targets":[0,1,2,3,4], "className": "tablet"},
                    {"targets":[0,1,2,3], "className": "fablet"},
                    {"targets":[0,1], "className": "mobile"},
                ],
                "createdRow": function (row, data, dataIndex) {
                    // Add a class to the cell in the second column
                    $(row).find("td").css("vertical-align", "middle");
                },
                "order": [],
                drawCallback: function () {
                },
            });
        });

        function reload_table() {
            table.ajax.reload(null, false);
        }

        function deleteData(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'Deleted data cannot be recovered',
                showDenyButton: true,
                confirmButtonText: 'Yes',
                denyButtonText: 'No',
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?php echo base_url('dashboard/deleteData/'); ?>"+id,
                        method: "GET",
                        dataType: "JSON",
                        success: function(data){
                            if(data.status){
                                Swal.fire(
                                    'Success',
                                    'Successfully delete data',
                                    'success'
                                )

                                reload_table();
                            }else{
                                Swal.fire(
                                    'Warning',
                                    'Failed to delete data',
                                    'warning'
                                )
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown){
                            Swal.fire(
                                'Error',
                                'Error delete data',
                                'error'
                            )
                        }
                    });
                }
            })
        }
    </script>
  </body>
</html>