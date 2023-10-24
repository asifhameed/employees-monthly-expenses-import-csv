<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Monthly Expenses</h4>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Monthly Expenses sheet upload</h5>
            <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"></div>
            <?php
            if($this->session->flashdata('message')):
            ?>
                <div class="alert alert-success">
                    <strong>Success!</strong> <?php echo $this->session->flashdata('message')?>
                </div>
            <?php
            endif;

            if($this->session->flashdata('error')):
            ?>
                <div class="alert alert-danger">
                    <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php endif;?>
            <div class="outer-scontainer">
                <form class="form-horizontal" action="<?php echo base_url();?>welcome/upload_csv" method="post" name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">
                    <div class="input-row">
                        <label class="col-md-2 control-label">Choose CSV File</label>
                        <input type="file" name="file" id="file" accept=".csv">
                        <button type="submit" id="submit" name="import" class="btn-submit">Import</button>
                        <br />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Monthly Expenses List</h5>
            <div class="table-responsive">
                <table id="monthly_expenses" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Monty</th>
                            <th>Total pre-amount expenses</th>
                            <th>Detail</th>
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
                                <td><?php echo date("F Y", strtotime($rows->exp_month));?></td>
                                <td>$<?php echo $rows->pamount;?></td>
                                <td><a href="<?php echo base_url();?>welcome/monthly_detail/<?php echo date("Y-m", strtotime($rows->exp_month));?>" class="btn btn-info">Detail</a></td>
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