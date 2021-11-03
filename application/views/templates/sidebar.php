window.parent.location.href = "http://www.example.com"; 
<div class="row position-fixed">
    <div class="col-md-11 m-1">
        <form class="form-inline my-2 my-lg-0" action="<?php echo base_url();?>search" method="POST">
            <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search name..">
            <button class="btn btn-primary my-2 my-sm-0 rounded-pill " type="submit">Search</button>
        </form>
    </div>
    <div class="col-md-9 mt-4 m-0 ">
        <ul class="list-group shadow-sm">
            <li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                New Users:
            </li>
            <?php  foreach ($new_user as $key => $user) 
                    if(!empty($user['name'])){
            {?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="<?php echo base_url().'username/'.$user['username'];?>"><?php echo $user['name'];?></a>
                </li>
            <?php } } ?>
        </ul>
    </div>
    <div class="col-md-11 mt-3 m-1">
        <ul class="list-group shadow-sm">
            <li class="list-group-item d-flex justify-content-between align-items-center font-weight-bold">
                Trip Planning:
            </li>
                <img class="img-advertisement img img-fluid" src="<?php echo base_url();?>images/tour.jpeg"/>
                <span class="prof-text text-center">Gold Coast - NimBin - Byron Bay</span> 
                
            
        </ul>
    </div>
    <div class="col-md-12 text-center mt-5">
        <p class="text-muted">©2021-2021 GoTrip</p>
    </div>
</div>