<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>College</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('access/style.css');?>" class="">
    <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
</head>
<body class="bg-light">
   <nav class="navbar navbar-expand navbar-dark text-dark sticky-top" style="background-color:rgba(193, 188, 188, 0.83)">
       <a href="<?= base_url('user/index');?>" class="navbar-brand">
           <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Wikimedia-logo.png" alt="" width="5%"><h2 class="text-dark" style="display:inline">| Open Colleges</h2>
       </a>
       <form class="" method="get" action="<?= base_url('user/index');?>">
          <div class="input-group">
           <input class="form-control sm-2" type="search" name="search" placeholder="e.g medical college etc" style="border-radius:100px 0px 0px 80px;padding: 10px;" size="150%">
                <div class="input-group-append">
                    <button type="submit" class="" style="border-radius:0px 80px 80px 0px;padding: 5px;"><i class="fas fa-search"></i></button>
              </div>
           </div>
                   </form>
                </nav>
                <?php foreach($infor as $i);?>
                <div class="container-fluid mt-3">
                <img src="<?= base_url("access/".$i->image);?>" alt="" width="100%" height="370px">
                <p class="display-4 ml-5"><?= $i->c_name;?></p>
                <div class="card shadow">
                    <div class="card-body"><?= $i->descr;?></div>
                </div>
                <div class="card-footer">For More details Visit on this:-  <a href="<?= $i->website;?>" target="_blank"><?= $i->website;?></a></div>
                </div>
    </body>
</html>