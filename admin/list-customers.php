<?php
include('../db.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	

    <style>
        .top {
            font-size: 28px;
            background-color: #e6e6e6;
            text-align: center;
            padding: 8px 0;
            margin-bottom: 20px;
            box-shadow: 0 -20px 15px -10px rgba(155, 155, 155, 0.3) inset,
                0 20px 15px -10px rgba(155, 155, 155, 0.3) inset,
                0 0 10px rgba(0, 0, 0, 0.1);
        }
		
		
		*{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    background: rgba(235,235,235,1);
}
h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: white;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #404040;
    background: #e6e6e6;
}


.fl-table thead th:nth-child(odd) {
    color: #404040;
    background: #e6e6e6;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}
    </style>


</head>

<body>

    <div class="row">
        <div class="col-lg-12">
            <div class="top">
                <i class="fa fa-dashboard fa-fw">
                </i> <a href="index.php">Fashion Store Dashboard </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> Client List
                    </h3>
                </div>
	
	
	
<div class="table-wrapper">
    <table class="fl-table">
	<?php
				
				$get_items = "select * from customer ORDER BY customer_name DESC";
				$run_items = mysqli_query($con, $get_items);
				echo "
        <thead>
        <tr>
            <th>Client name</th>
                <th>Email</th>
                <th> Contact</th>
                <th>Address</th>
        </tr>
        </thead>";
		?>
		
        <tbody>
		<?php
        while ($row_items = mysqli_fetch_array($run_items)) {
        $o_id = $row_items['customer_name'];
        $o_qty = $row_items['customer_email'];
        $o_price = $row_items['customer_contact'];
        $o_date = $row_items['customer_address'];

        echo

            "<tr>
        <td >$o_id</td>
        <td '>
            $o_price
        </td>
        <td >$o_qty</td>
        <td >
            $o_date
        </td>
    </tr>";
    } ?>
        <tbody>
    </table>
</div>


</div></div></div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="tinymce/tinymce.min.js"></script>

</body>

</html>
