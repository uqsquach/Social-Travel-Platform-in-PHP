<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-3 pl-5 border-right">
            <?php $this->load->view('templates/navs');?>
        </div>
    
        <div class="col-6 pl-0 pr-0" style="background-color: #FFCCCB;">
            <a href='<?php echo base_url();?>home'>
            <div class="bg-secondary position-fixed home-top w-100 border-bottom" style="height:50px; z-index:1;">
                <h4><i class="fas fa-arrow-left"></i></h4>
            </div>
            </a>
            <div class="col p-0">
                <img class="img-fluid w-100 mt-5 h-75" src="<?php echo base_url().'uploads/'.$user_profile['cover'];?>"/>
                <img class="profile-pic rounded-circle" src="<?php echo base_url().'uploads/'.$user_profile['image'];?>"/>
                <div class="card bg-secondary ml-1 mr-1">
                    <div class="card-header text-primary font-weight-bold">Personal Info

                    </div>
                    <div class="card-body">
                        <h4 class="card-title font-weight-bold"><?php echo $user_profile['name'];?></h4>
                        <p class="card-text">Bio : <?php echo $user_profile['bio'];?></p>
                        <p class="card-text">Location : <?php echo $user_profile['address'];?></p>
                        <p class="card-text">Birthday : <?php $time = strtotime($user_profile['birthdate']); echo date("M d, Y",$time);?></p>
                    </div>
                </div>
                <?php 
                if(!empty($post) ){
                    foreach($post as $k => $posts) { ?>
                        <div class="card bg-secondary mt-3 ml-1 mr-1">
                            <div class="card-header" style="height:75px">
                                <img class="rounded-circle border mr-2" src="<?php echo base_url().'uploads/'.$posts['image']; ?>" width="50" height="50"/>
                                <a href="<?php echo base_url().'username/'.$posts['user'];?>">
                                    <span class=" font-weight-bold"><?php echo $posts['name']; ?></span>
                                </a>
                            </div>
                            <a href="<?php echo base_url().'gotrip/'.$posts['id'];?>" id="body-post" style="text-decoration:none;">
                            <div class="card-body">
                                <p class="card-text"><?php echo $posts['post'];?></p>
                                <?php if(!empty($posts['post_image'])) { ?>
                                    <div class="w-100 text-center">
                                        <img class="border p-1" src="<?php echo base_url().'uploads/'.$posts['post_image']; ?>"/>
                                    </div>
                                <?php }?>
                                </a>
                                <div class="row w-100 bg-danger mt-3 ml-1">
                                    <div class="col-md-6 pl-0 pr-0">
                                        <?php if(!is_null($posts['l'])) { ?>
                                            <button class="col-md-12 border-0 bg-secondary claps text-primary" type="submit">Like</button>
                                        <?php } else { ?>
                                        <form method="post" action="<?php echo base_url().'claps/'.$posts['id'];?>">
                                            <input type="hidden" value="<?php echo $_SERVER['PATH_INFO']; ?>" name="identifier"/>
                                            <button class="col-md-12 border-0 bg-secondary claps " type="submit">Like</button>     
                                        </form>                              
                                        <?php } ?>
                                    </div> 
                                    <?php if($posts['comments'] == 0) { ?>
                                    <button class="col-md-6 border-0 bg-secondary">Comments</button>
                                    <?php } else { ?>
                                    <button class="col-md-6 border-0 bg-secondary text-primary" onclick="location.href='<?php echo base_url().'gotrip/'.$posts['id'];?>'">Comments(<?php echo $posts['comments'];?>)</button>
                                        <?php }?>
                                </div>
                                <div>
                                        <?php if(!is_null($posts['l'])) {
                                                if($posts['claps'] == 1) { ?> 
                                                    <p class="text-muted">You liked the post..</p>
                                            <?php } else { ?>
                                                    <p class="text-muted">You and <?php echo $posts['claps'] - 1;?> others liked the post..</p>
                                                <?php }
                                            } elseif ($posts['claps'] > 0) {
                                            ?>
                                                <p class="text-muted"><?php echo $posts['claps'] - 1;?> other liked the post..</p>
                                            <?php }else{ ?>
                                                <p></p>
                                            <?php } ?>
                                    </div>
                            </div>
                            <div class="card-footer">
                            <div class="row">
                                    <div class="col-md-1">
                                        <img class="mt-2 rounded-circle border-primary border" src="<?php echo base_url().'uploads/'.$profile['image']; ?>" width="40" height="40"/>
                                    </div>
                                    <div class="col-md-9">
                                        <form action="<?php echo base_url().'comment/'.$posts['id'];?>" method="POST" class="w-100">
                                            <textarea class="form-control" id="exampleTextarea" name="comment" placeholder="Write something about the post."></textarea>
                                            <input type="hidden" value="<? echo $_SERVER['PATH_INFO']; ?>" name="identifier"/>                          
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary mt-2 rounded-pill">Comment</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php } 
                } else { ?>
                    <div class="mt-5 w-100"><center><h5 class="text-muted font-italic font-weight-light">You don't have any gotrip.</h5></center></div>
                <?php } ?>
                <nav aria-label="Page navigation example">
                    <p><?php echo $links;?></p>
                </nav>
            </div>
        </div>
        <div class="col-3 bg-light border-left" style="z-index:2;">
            <?php $this->load->view('templates/sidebar');?>
        </div>
    </div>
</div>
 <?php $this->load->view('modals/edit_profile');?>