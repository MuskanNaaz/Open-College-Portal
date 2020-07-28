<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>College</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('access/style.css');?>">
</head>
<body class="bg-light">
   <nav class="navbar navbar-expand navbar-dark bg-light text-dark shadow-lg" style="background-color:#c1bcbc">
       <a href="<?= base_url('user/index');?>" class="navbar-brand">
           <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Wikimedia-logo.png" alt="" width="5%"><h2 class="text-dark" style="display:inline">| Open Colleges</h2>
       </a>
   </nav> 
   
   <div class="jumbotron text-white rounded-0 bg-image">
      
       <div class="container">
           <div class="row">
               <div class="col-lg-8 mx-auto text-center">
                  <h2 class="display-4">Search Your Best College</h2>
                   <form class="mt-3" method="get" action="<?= base_url('user/index');?>">
          <div class="md-form my-0">
            <div class="input-group">
                <input class="form-control sm-2" type="search" name="search" placeholder="e.g medical college etc" style="border-radius:100px 0px 0px 80px;padding: 10px;">
                <div class="input-group-append">
                    <button type="submit" class="" style="border-radius:0px 80px 80px 0px;padding: 5px;"><i class="fas fa-search"></i></button>
                </div>
            </div>
          </div>
                   </form>
                   <div class="col-lg-12 mt-3">
                      <h2 class="lead">Top Searchs</h2>
                       <a href="" class="badge badge-light badge-pill">Engineering College</a>
                       <a href="" class="badge badge-light badge-pill">Medical College</a>
                       <a href="" class="badge badge-light badge-pill">Music College</a>
                       <a href="" class="badge badge-light badge-pill">Dance College</a>
                       <a href="" class="badge badge-light badge-pill">Programming College</a>
                       
                   </div>
               </div>
           </div>
       </div>
       </div>
       <div class="container-fluid">
           <div class="row">
             <div class="col-lg-3">
                <a href="" class="list-group-item list-group-item-action text-white" style="background-color:rgba(76, 124, 214, 0.97)">Stream</a>
                
                <!--Search stream-->
                
                <form class="" method="get" action="<?= base_url('user/search_cat');?>">
          <div class="input-group">
          <div class="input-group-prepend">
           <span class="input-group-text"><i class="fas fa-search"></i></span></div>
                <input class="form-control" type="search" name="stream" placeholder="Search stream">
                </div>
                   </form>
                 <?php foreach($cat as $n):?>
                 <a href="" class="list-group-item list-group-item-action"><i class="fas fa-graduation-cap"></i>| <?= $n->cat;?></a>
                 <?php endforeach;?>
             </div>
             <div class="col-lg-9">
                    <nav class="navbar navbar-expand navbar-dark bg-light text-dark">
                        <ul class="navbar-nav ml-auto"><li class="nav-item mr-5"><a href="nav-link" class="disabled"><strong>Sort By</strong></a></li>
                    <li class="nav-item mr-5"><a href="nav-link">Popularity</a></li>
                    <li  class="nav-item mr-5"><a href="nav-link">Reviews Rating</a></li>
                    <li id="fees_desc" class="nav-item mr-5"><a href="nav-link">Highest Fees</a></li>
                    <li id="fees_asc" class="nav-item mr-5"><a href="nav-link">Lowest Fees</a></li></ul>
                    </nav>
                     <div class="row">
              <?php foreach($info as $i):?>
               <div class="col-lg-3 mt-2">
                   <a href="<?= base_url('user/view/'.$i->id);?>" class="card-link text-dark">
                   <div class="card shadow">
               <div class="card-img-top">
               <img src="<?= base_url("access/".$i->image);?>" alt="" width="100%" height="230px">
               </div>
               <div class="card-body">
                   <?= $i->c_name;?>
                   <p class=""> ₹<?= $i->fees;?>/sem |<?= $i->rating;?> /10 </p>
                   <div class="text-muted m-0 p-0" style=" float: right;font-size: 13px"><i class="fas fa-map-marker-alt"></i> <?= $i->address;?></div>
               </div>
           </div>
              </a> 
               </div>
               <?php endforeach;?>
               </div>
               </div>
           </div>
    </div>
   
</body>
</html>