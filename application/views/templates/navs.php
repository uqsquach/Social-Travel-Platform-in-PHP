
<ul class="nav flex-column w-25 position-fixed" id="left">
    <li class="nav-item">
        <a class=" nav-link navbar-brand" href="<?php echo base_url();?>home">
            <h3 class="font-weight-bold">
                <img src="<?php echo base_url();?>images/logo1.png" class="logo mb-2" width="50" height="40" title="Home"> 
                <span class="prof-text">GoTrip</span>
            </h3>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>profile">
            <img class="rounded-circle border ml-1 mr-2 border-primary" src="<?php echo base_url().'uploads/'.$profile['image'];?>" class="m-2" width="40" height="40" title="Profile">
            <span class="prof-text">Profile</span> 
        </a>
    </li>
    <li class="nav-item dropdown">
 
        <a class="nav-link dropdown-toggle" id="dropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="rounded-circle border ml-1 mr-2 border-primary" src="<?php echo base_url();?>images/setting-icon.jpg" class="m-2" width="40" height="40" title="Settings">
        <span class="prof-text">Settings</span></a>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="z-index: 3">
            <a class="dropdown-item" href="#change-password" data-target="#change-password" data-toggle="modal" >Change Password</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>logout">
        <img class="rounded-circle border ml-1 mr-2 border-primary" src="<?php echo base_url();?>images/logout-icon.png" class="m-2" width="40" height="40" title="Logout">
        <span class="prof-text">Logout</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>donates">      
        <img class="rounded-circle border ml-1 mr-2 border-primary" src="<?php echo base_url();?>images/donate-icon.jpg" class="m-2" width="40" height="40" title="Donate">
        <span class="prof-text">Donate</span></a>
    </li>
    

    <!-- divider line -->
    <li class="nav-item">
        <hr class="solid" color="red">
    </li>
    
    <div class="col-md-11 mt-3 m-1 ">
        <ul class="list-group shadow-sm">
            <li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                Most like post
            </li>
            <?php foreach ($trending as $key => $trends) {
                if($trends['post'] != ""){?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="<?php echo base_url().'gotrip/'.$trends['id'];?>"><?php echo substr($trends['post'], 0,20);?></a>
                    <span class="badge badge-primary badge-pill"><?php echo $trends['likes'];?></span>
                    <?php }?>
            </li>
            <?php } ?>
            
        </ul>
    </div>
    
</ul>

