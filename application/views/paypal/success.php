<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset ="utf-8">

<link href="<?php echo base_url('assets/css/mystyle.css'); ?>" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="status">
        <?php if(!empty($payment)){ ?>
            <h1 class="success">Your Payment has been Successful!</h1>
            <h4>Payment Information</h4>
            <p><b>Reference Number:</b> #<?php echo $payment['id']; ?></p>
            <p><b>Transaction ID:</b> <?php echo $payment['txn_id']; ?></p>
            <p><b>Paid Amount:</b> <?php echo $payment['payment_gross'].' '.$payment['currency_code']; ?></p>
            <p><b>Payment Status:</b> <?php echo $payment['status']; ?></p>
            
            <h4>Payer Information</h4>
            <p><b>Name:</b> <?php echo $payment['payer_name']; ?></p>
            <p><b>Email:</b> <?php echo $payment['payer_email']; ?></p>
            
            <h4>Product Information</h4>
            <p><b>Name:</b> <?php echo $donate['name']; ?></p>
            <p><b>Price:</b> <?php echo $donate['price'].' '.$donate['currency']; ?></p>
        <?php }else{ ?>
            <h1 class="error">Transaction has been failed!</h1>
        <?php } ?>
    </div>
</div>
</body>
</html>
