<?php require_once 'header.php'; ?>
<body>
<div class="divider"></div>
    <div class="container">
        <?php require_once 'menu.php';?>
        <h3>The Uploader</h3>
        <form id="excelUploadForm" name="excelUploadForm" method="post" action="process.php" enctype="multipart/form-data">
            <div class="form-group">
                <label>Select Excel File:</label>
                <input type="file" name="xlsxfilename" value="" accept=".xlsx, .xls, .csv" />
            </div>
            <div class="form-group">
                <input type="submit" name="save" class="btn btn-primary" value="Upload and Save" />
            </div>
        </form>
        <div class="progress">
            <div id="uploadStatus"></div>
            <div class="progress-bar"></div>
        </div>
    </div>
    <div class="container">
        <div class="table-responsive">
            <table id="sitePress" class="table table-striped table-bordered table-hover table-condensed display">
                <thead>
                <tr class="info">
					<th> Last Name</th>
					<th> First Name</th>
					<th> Middle Name</th>
					<th> Street</th>
					<th> Barangay</th>
                    <th> City</th>
                    <th> Province</th>
                    <th> Phone Number</th>
                    <th> Mobile Number</th>
                    <th> Email Address</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach( $customerInfos as $info ):?>
                    <tr>
                        <td><?php echo $info['lastname'];?></td>
                        <td><?php echo $info['firstname'];?></td>
                        <td><?php echo $info['middlename'];?></td>
                        <td><?php echo $info['add_street'];?></td>
                        <td><?php echo $info['add_brgy'];?></td>
                        <td><?php echo $info['add_city'];?></td>
                        <td><?php echo $info['add_province'];?></td>
                        <td><?php echo $info['contact_phone'];?></td>
                        <td><?php echo $info['contact_mobile'];?></td>
                        <td><?php echo $info['contact_email'];?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
<?php require_once 'footer.php'; ?>