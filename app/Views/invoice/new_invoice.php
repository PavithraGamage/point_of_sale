<?php $this->extend("base") ?>

<?php $this->section("content") ?>
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
            <!-- /.row -->
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Create New Invoice</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label>Invoice Date:</label>
                                            <div class="input-group date" id="invoice_date" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" data-target="#invoice_date"  name="invoice_date"/>
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
                                                <input type="text" class="form-control datetimepicker-input" data-target="#invoice_due_date" name="due_date" />
                                                <div class="input-group-append" data-target="#invoice_due_date" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Client:</label>
                                            <div class="select2-blue">
                                                <select class="select2" data-placeholder="Select Client" data-dropdown-css-class="select2-blue" style="width: 100%;" name="client">
                                                    <option>- Select Client - </option>
                                                    <option>Sutotrims PVT LTD</option>
                                                    <option>C & D International</option>
                                                    <option>Eco Bathware PVT LTD</option>
                                                    <option>Eureka Printers</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label>Insert Client:</label><br>
                                            <button class="btn btn-primary"><i class="fas fa-user-plus"></i> Add Client</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Description:</label>
                                        <input class="form-control" type="text" placeholder="Service Name" aria-label="default input example" id="description">
                                    </div>
                                    <div class="col-2">
                                        <label>Expense LKR:</label>
                                        <input class="form-control" type="text" placeholder="Expense Amount" aria-label="default input example" id="expense">
                                    </div>
                                    <div class="col-2">
                                        <label>Price LKR:</label>
                                        <input class="form-control" type="text" placeholder="Service Price" aria-label="default input example" id="price" onchange="check_price()">
                                    </div>
                                    <div class="col-2">
                                        <label>Discount LKR:</label>
                                        <input class="form-control" type="text" placeholder="Discount Price" aria-label="default input example" id="discount" onchange="check_discount()">
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label>Insert Item:</label><br>
                                            <button class="btn btn-primary" id="add_item" type="submit" onclick="insert_table()"><i class="fas fa-tag"></i> Add Item</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Already Inserted Items</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="items_table" class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 40px;">Delete</th>
                                                <th style="width: 500px;">Description</th>
                                                <th style="width: 73px;">Price</th>
                                                <th style="width: 49px;">Qty</th>
                                                <th style="width: 66px;">Discount</th>
                                                <th style="width: 72px;">Total</th>
                                                <th style="width: 25px;">Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><i class="fas fa-trash" style="color:red ;"></i></td>
                                                <td>Design Research</td>
                                                <td>125,000.00</td>
                                                <td>100 </td>
                                                <td>255,000</td>
                                                <td> 999,999.00</td>
                                                <td><i class="fas fa-edit" style="color:blue"></i></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-trash" style="color:red ;"></i></td>
                                                <td>User Research</td>
                                                <td>125,000.00</td>
                                                <td>100 </td>
                                                <td>255,000</td>
                                                <td> 999,999.00</td>
                                                <td><i class="fas fa-edit" style="color:blue"></i></td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Delete</th>
                                                <th>Item Name</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Discount</th>
                                                <th>Total</th>
                                                <th>Edit</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Invoice Summary</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <h5><b>Client:</b></h5>
                                    <h6><b>Email:</b></h6>
                                    <h6><b>Address:</b></h6>
                                </div>
                                <div class="col-8">
                                    <h5> Sutotrims PVT LTD.</h5>
                                    <h6>sulalitha@sutospices.com</h6>
                                    <h6>No: 58/E, Kesbewa Road, Kamburugoda, Bandaragama</h6>
                                </div>
                            </div>
                            <div style="display: flex; flex-direction: row; justify-content: flex-end; margin-top: 15px">
                                <button class="btn btn-danger"><i class="fas fa-trash"></i> Remove Client</button>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <h6><b>Items Count:</b></h6>
                                    <h6><b>Sub Total:</b></h6>
                                    <h4><b>Total:</b></h4>
                                </div>
                                <div class="col-6">
                                    <h6>25</h6>
                                    <h6>LKR 35,000.00</h6>
                                    <h4><b>LKR 35,000.00</b></h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <h6><b>Payments Total:</b></h6>
                                    <h5><b>Amount Due:</b></h5>

                                </div>
                                <div class="col-6">
                                    <h6><b>LKR 15,000.00</b></h6>
                                    <h5><b>LKR 25,000.00</b></h5>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <h6 style="margin-top:10px;"><b>Payment Type:</b></h6>
                                    <h6 style="margin-top:10px;"><b>Amount Tendered:</b></h6>

                                </div>
                                <div class="col-6">
                                    <h6>
                                        <div class="select2-blue">
                                            <select class="select2" data-placeholder="Select Item" data-dropdown-css-class="select2-blue" style="width: 100%;">
                                                <option>Cash</option>
                                                <option>Bank Transfer</option>
                                                <option>Online Payment</option>
                                                <option>Check</option>
                                            </select>
                                        </div>
                                    </h6>
                                    <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->


<script>

    // check valid price with expense 
    function check_price(){

        var expense =  parseInt(document.getElementById('expense').value);
        var price =  parseInt(document.getElementById('price').value);

        if(price < expense){
            alert('Price is lower than the expense')
            document.getElementById('price').value = null;
        }

    }

    // check discount is valid
    function check_discount(){

        var expense =  parseInt(document.getElementById('expense').value);
        var price =  parseInt(document.getElementById('price').value);
        var discount =  parseInt(document.getElementById('discount').value)

        var price_error = price - discount;

        if(expense >= price_error){
            alert('discount amount is invalid');
            document.getElementById('discount').value = null
        }

    }

</script>

<?php $this->endsection("content") ?>