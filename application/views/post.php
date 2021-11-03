<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-3 pl-5 border-right">
            <?php $this->load->view('templates/navs');?>
        </div>
        <div class="col-6 pl-0 pr-0" style="background-color: #ff8583;">
            <div class="bg position-fixed home-top w-100 border-bottom" style="height:50px; z-index:1;">
                <h4 class="mt-2 ml-2 font-weight-bold text-primary">Post</h4>
            </div>
            <div class="col mt-5 pt-1 pl-1 pr-1">
                <?php if(!empty($post)){?> 
                    <?php foreach($post as $k => $posts){?>
                        <div class="card bg mt-3" >
                        <!-- circle imagge profile of user post -->
                        <div class="card-header" style="height:75px">
                            <img class="rounded-circle border mr-2" src="<?php echo base_url().'uploads/'.$posts['image']; ?>" width="50" height="50"/>
                            <a href="<?php echo base_url().'username/'.$posts['user'];?>">
                                <span class=" font-weight-bold"><?php echo $posts['name']; ?></span>
                            </a>
                        </div>
                        <div class="card-body">
                        <!-- users' posts --->
                            <p class="card-text"><?php echo $posts['post'];?></p>
                            <?php if(!empty($posts['post_image'])){?>
                                <div class="w-100 text-center">
                                <img class="img img-fluid border p-1" src="<?php echo base_url().'uploads/'.$posts['post_image']; ?>"/>
                        </div>
                            <?php }?>
                            <div class="row w-100 bg-danger mt-3 ml-1">
                                <div class="col-md-6 pl-0 pr-0">                        
                                        <?php if(!is_null($posts['l'])){?>
                                        <button class="col-md-12 border-0 bg claps text-primary" type="submit">Like</button>
                                    <?php }else{ ?>
                                        <form method="post" action="<?php echo base_url().'claps/'.$posts['id'];?>">
                                            <button class="col-md-12 border-0 bg claps " type="submit">Like</button>     
                                        </form>                              
                                    <?php } ?>
                                </div>
                                <?php if($posts['comments'] == 0){?>
                                <button class="col-md-6 border-0 bg">Comments</button>
                                <?php } else{?>
                                <button class="col-md-6 border-0 bg text-primary" onclick="location.href='<?php echo base_url().'gotrip/'.$posts['id'];?>'">Comments(<?php echo $posts['comments'];?>)</button>
                                    <?php }?>
                            </div>
                            <div>
                                <?php  if(!is_null($posts['l'])){
                                        if($posts['claps'] == 1){ ?> 
                                            <p class="text-muted">You liked the post..</p>
                                    <?php } else { ?>
                                            <p class="text-muted">You and <?php echo $posts['claps'] - 1;?> others liked the post..</p>
                                        <?php }
                                    }else if ($posts['claps'] > 0) {
                                        ?>
                                        <p class="text-muted"><?php echo $posts['claps'] - 1;?> other liked the post..</p>
                                    <?php }else{ ?>
                                        <p></p>
                                    <?php } ?>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <!-- circle image profile -->
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
                    <?php }?>
                <?php }else{?>
                    <h3 class="font-italic text-center mt-3 text-muted">----Not found-----</h3>
                <?php }?>
                <div class="card bg mt-3" >
                    <div class="card-header font-weight-bold text-primary">Comments
                    </div>
                </div>
                <?php if(!empty($comments)) {
                    foreach($comments as $k => $comment) { ?>
                        <div class="card bg mt-3 mb-2" >
                            <!-- circle image profile on users'comment-->
                            <div class="card-header" style="height:75px">
                                <img class="rounded-circle border mr-2" src="<?php echo base_url().'uploads/'.$comment['image']; ?>" width="50" height="50"/>
                                <a href="<?php echo base_url().'username/'.$comment['username'];?>">
                                    <span class=" font-weight-bold"><?php echo $comment['name']; ?></span>
                                </a>
                            </div>
                            <div class="card-body font-weight-bold form-inline">
                                <p><?php echo $comment['comments'];?></p>
                            </div>
                        </div>
                    <?php }?>
                <?php } else {?>
                    <div class="text-center mt-2">
                        <small class="font-italic mt-3 text-muted">-----No comment found-----</small>
                    </div>
                <?php }?>
            </div>
        </div>
        <div class="col-3 bg-light border-left" style="z-index:2;">
            <?php $this->load->view('templates/sidebar');?>
        </div>
    </div>
</div>
<?php $this->load->view('modals/edit_profile');?>