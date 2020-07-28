<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>College</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
        <script>tinymce.init({selector:'textarea'});</script>
</head>
<body>
   <nav class="navbar navbar-expand navbar-dark text-dark" style="background-color:#c1bcbc">
       <a href="<?= base_url('user/index');?>" class="navbar-brand">
           <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Wikimedia-logo.png" alt="" width="5%"><h2 class="text-dark" style="display:inline">| Open Colleges</h2>
       </a>
    </nav>
    <div class="container-fluid mt-4">
       <?= $this->session->flashdata('success');?>
        <div class="row">
           <div class="col-lg-3">
              <a href="" class="list-group-item list-group-item-action text-white" style="background-color:rgba(76, 124, 214, 0.97)">Category</a>
               <a href="" class="list-group-item list-group-item-action">
                   
               </a>
           </div>
            <div class="col-lg-6">
                <div class="card shadow">
                   
                    <div class="card-header">
                        <div class="card-heading">Insert College</div>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('user/insert');?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="row mt-2">
                            <div class="col-lg-3"><label for="">College_name</label>
                       </div>
                            <div class="col-lg-6"> <input type="text" class="form-control border-dark" name="c_name" value="<?= set_value('c_name');?>">
                            <?= form_error('c_name');?></div>
                        </div>
                            </div>
                           <div class="row mt-2">
                            <div class="col-lg-3"><label for="">Category</label>
                       </div>
                            <div class="col-lg-6">
                               
                                <select name="c_cat" id="" class="form-control border-dark">
                                   <?php foreach($info as $i):?>
                                    <option value="<?= $i->cat;?>"><?= $i->cat;?></option>
                                    <?php endforeach;?>
                                </select>
                                <?= form_error('cat');?>
                                
                            </div>
                        </div>
                           <div class="row mt-2">
                            <div class="col-lg-3"><label for="">Address</label>
                               </div>
                            <div class="col-lg-6"> <input type="text" class="form-control border-dark" name="address" value="<?= set_value('address');?>">
                            <?= form_error('address');?></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-3"><label for="">Email</label>
                               </div>
                            <div class="col-lg-6"> <input type="text" class="form-control border-dark" name="email" value="<?= set_value('email');?>">
                            <?= form_error('email');?></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-3"><label for="">Mobile</label>
                               </div>
                            <div class="col-lg-6"> <input type="text" class="form-control border-dark" name="mobile" value="<?= set_value('mobile');?>">
                            <?= form_error('mobile');?>
                            </div>
                        </div>
                           <div class="row mt-2">
                            <div class="col-lg-3"><label for="">Fees</label>
                               </div>
                            <div class="col-lg-6"> <input type="text" class="form-control border-dark" name="fees" value="<?= set_value('fees');?>">
                            <?= form_error('fees');?>
                            </div>
                        </div>
                           <div class="row mt-2">
                            <div class="col-lg-3"><label for="">Rating</label>
                               </div>
                            <div class="col-lg-6"> <input type="text" class="form-control border-dark" name="rating" value="<?= set_value('rating');?>">
                            <?= form_error('rating');?>
                            </div>
                        </div>
                           <div class="row mt-2">
                            <div class="col-lg-3"><label for="">Website</label>
                               </div>
                            <div class="col-lg-6"> <input type="text" class="form-control border-dark" name="website" value="<?= set_value('website');?>">
                            <?= form_error('website');?>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-3"><label for="">Description</label>
                               </div>
                            <div class="col-lg-6">
                                <textarea name="descr" id="" class="form-control border-dark" value="<?= set_value('descr');?>"></textarea>
                                <?= form_error('descr');?>
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-lg-3">
                                <label for="">Image</label>
                            </div>
                            <div class="col-lg-6">
                                <input type="file" class="form-control border-dark" name="image">
                            </div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-lg-3"></div>
                            <div class="col-lg-3"> <input type="submit" class="btn btn-success form-control"></div>
                        </div> 
                        </form>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card-heading">Category</div>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('user/insert_cat');?>" method="post">
                            <div class="form-group">
                                <label for="">Cat</label>
                                <input type="text" class="form-control" name="cat">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-info">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>