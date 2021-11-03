<!DOCTYPE html> 
<html lang="en-US">

<head>
<meta charset ="utf-8">
<?php $this->load->view('templates/main-header') ?> 
    <title>Donation</title>

</head>

<body>
<div class ="container">
    <h2> Donate to GoTrip </h2>
    <div class ="row">
        <div class="col-lg-12">
        
            <!-- List all products -->
            <?php if(!empty($donates)){ foreach($donates as $row){ ?>
                <div class = "card">
                    <img src="<?php echo base_url('images/'.$row['image']);?>" width="500" height="350" />
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                        <p class="card-text">Donate to improve our social community </p>
                        <form action="https://www.paypal.com/donate" method="post"  target="_top">
                        <input type="hidden" name="business" value="3JVLTFLRVUPML" />
                        <input type="hidden" name="item_name" color="red" value="Support To GOTRIP" />
                        <input type="hidden" name="currency_code" value="AUD" />
                        <input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                        <img alt="" border="0" src="https://www.paypal.com/en_AU/i/scr/pixel.gif" width="1" height="1" />
                        </form>
                        </div>
                </div>
            <?php } }else{ ?>
                <p>Product(s) not found...</p>
            <?php } ?>
    </div>
</div>
</div>
<?php $this->load->view('templates/footer') ?> 



</body>
</html>