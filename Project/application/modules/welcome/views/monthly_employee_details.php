<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title"><?php echo $month_date;?> - Expenses List</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Monthly Expenses</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $month_date;?> - Expenses List</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo $month_date;?> - Employees List</h5>
            <div class="table-responsive">
                <table id="monthly_expenses" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Category</th>
                            <th>Employee Name</th>
                            <th>Employee Email Address</th>
                            <th>Expense Description</th>
                            <th>Pre-tax Amount</th>
                            <th>Tax Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php       
                    if($result != null)
                    {
                        foreach($result as $rows)
                        {                       
                            ?>
                            <tr>
                                <td><?php echo date("d F, Y", strtotime($rows->date));?></td>
                                <td><?php echo $rows->category;?></td>
                                <td><?php echo $rows->employee_name;?></td>
                                <td><?php echo $rows->employee_email_address;?></td>
                                <td><?php echo $rows->expense_description;?></td>
                                <td>$<?php echo $rows->pre_tax_amount;?></td>
                                <td>$<?php echo $rows->tax_amount;?></td>
                            </tr>
                            <?php           
                        }  
                    }
                    ?>
                </table>
            </div>

        </div>
    </div>
</div>