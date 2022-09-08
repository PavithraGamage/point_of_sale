<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Point of Sale | Add New Invoice</title>

    <!-- header links -->
    <?php include "header_links.php" ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- top nav bar -->
        <?php include "nav_bar.php" ?>

        <!-- left side bar -->
        <?php include "sidebar.php" ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>New Invoice</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">New Invoice</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">

                            <div class="card">

                                <div class="card-header">
                                    <h3 class="card-title">Create New Invoice</h3>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="form-group">
                                                        <label>Invoice Date:</label>
                                                        <div class="input-group date" id="invoice_date" data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input" data-target="#invoice_date" />
                                                            <div class="input-group-append" data-target="#invoice_date" data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-group">
                                                        <label>Invoice Due Date:</label>
                                                        <div class="input-group date" id="invoice_due_date" data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input" data-target="#invoice_due_date" />
                                                            <div class="input-group-append" data-target="#invoice_due_date" data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label>Client:</label>
                                                        <select class="select2" style="width: 100%;">
                                                            <option>- Select Client -</option>
                                                            <option>Sulalitha Perera</option>
                                                            <option>Anju Warnakula</option>
                                                            <option>Shan Dias</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="form-group">
                                                        <label>New Client:</label><br>
                                                        <button class="btn btn-primary"><i class="fas fa-user-plus"></i> Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="form-group">
                                                        <label>Add Item:</label>
                                                        <select class="select2" style="width: 100%;">
                                                            <option>- Select Item -</option>
                                                            <option>Web Design</option>
                                                            <option>Web Apps</option>
                                                            <option>Web Development</option>
                                                            <option>Facebook Page Setup</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="form-group">
                                                        <label>New Item:</label><br>
                                                        <button class="btn btn-primary"><i class="fas fa-tag"></i> Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Invoice Summary</h3>
                                                </div>
                                                <div class="card-body">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">



                                    </div>
                                    <!-- item add -->
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Already Insert Items</h3>

                                                    <div class="card-tools">
                                                        <div class="input-group input-group-sm" style="width: 150px;">
                                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                                            <div class="input-group-append">
                                                                <button type="submit" class="btn btn-default">
                                                                    <i class="fas fa-search"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body table-responsive p-0" style="height: 400px;">
                                                    <table class="table table-head-fixed text-nowrap table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 75px;">Delete</th>
                                                                <th style="width: 65px;">ID</th>
                                                                <th style="width: 575px;">Item Name</th>
                                                                <th style="width: 125px;">Price LKR</th>
                                                                <th style="width: 66px;">Qty</th>
                                                                <th style="width: 85px;">Discount</th>
                                                                <th style="width: 100px;">Total LKR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><i class="fas fa-trash-alt" style="color:red;"></i></td>
                                                                <td>1500</td>
                                                                <td>Design Research</td>
                                                                <td><input type="text" class="form-control" value="955,000.00"></td>
                                                                <td><input type="text" class="form-control" value="1"></td>
                                                                <td><input type="text" class="form-control" placeholder="0"></td>
                                                                <td>925,000.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="fas fa-trash-alt" style="color:red;"></i></td>
                                                                <td>1500</td>
                                                                <td>Design Research</td>
                                                                <td><input type="text" class="form-control" value="955,000.00"></td>
                                                                <td><input type="text" class="form-control" value="1"></td>
                                                                <td><input type="text" class="form-control" placeholder="0"></td>
                                                                <td>925,000.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="fas fa-trash-alt" style="color:red;"></i></td>
                                                                <td>1500</td>
                                                                <td>Design Research</td>
                                                                <td><input type="text" class="form-control" value="955,000.00"></td>
                                                                <td><input type="text" class="form-control" value="1"></td>
                                                                <td><input type="text" class="form-control" placeholder="0"></td>
                                                                <td>925,000.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="fas fa-trash-alt" style="color:red;"></i></td>
                                                                <td>1500</td>
                                                                <td>Design Research</td>
                                                                <td><input type="text" class="form-control" value="955,000.00"></td>
                                                                <td><input type="text" class="form-control" value="1"></td>
                                                                <td><input type="text" class="form-control" placeholder="0"></td>
                                                                <td>925,000.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="fas fa-trash-alt" style="color:red;"></i></td>
                                                                <td>1500</td>
                                                                <td>Design Research</td>
                                                                <td><input type="text" class="form-control" value="955,000.00"></td>
                                                                <td><input type="text" class="form-control" value="1"></td>
                                                                <td><input type="text" class="form-control" placeholder="0"></td>
                                                                <td>925,000.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="fas fa-trash-alt" style="color:red;"></i></td>
                                                                <td>1500</td>
                                                                <td>Design Research</td>
                                                                <td><input type="text" class="form-control" value="955,000.00"></td>
                                                                <td><input type="text" class="form-control" value="1"></td>
                                                                <td><input type="text" class="form-control" placeholder="0"></td>
                                                                <td>925,000.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="fas fa-trash-alt" style="color:red;"></i></td>
                                                                <td>1500</td>
                                                                <td>Design Research</td>
                                                                <td><input type="text" class="form-control" value="955,000.00"></td>
                                                                <td><input type="text" class="form-control" value="1"></td>
                                                                <td><input type="text" class="form-control" placeholder="0"></td>
                                                                <td>925,000.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="fas fa-trash-alt" style="color:red;"></i></td>
                                                                <td>1500</td>
                                                                <td>Design Research</td>
                                                                <td><input type="text" class="form-control" value="955,000.00"></td>
                                                                <td><input type="text" class="form-control" value="1"></td>
                                                                <td><input type="text" class="form-control" placeholder="0"></td>
                                                                <td>925,000.00</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>


                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->
    <?php include "footer.php" ?>
    <script>
        $(function() {
            //invoice date picker
            $('#invoice_date').datetimepicker({
                format: 'L'
            });

            //invoice due date picker
            $('#invoice_due_date').datetimepicker({
                format: 'L'
            });

            //select 2  
            $('.select2').select2()
        });
    </script>