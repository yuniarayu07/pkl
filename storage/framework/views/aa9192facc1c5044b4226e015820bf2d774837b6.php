<?php $__env->startSection('content'); ?>
<section class="panel panel-transparent">
<body>
<div class="form-center">
  <center><h2>INPUT JENIS</h2></center>
             <hr><div class="col-md-8 form-group">
              <div class="heading"></hr>
                Jenis Kesehatan:
              </div>
              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
             <div class="col-md-8 form-group">
             <div class="heading">
               Keterangan :
              </div>
              <input type="tel" class="form-control" name="phone" id="phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
    
  </div>
           <br><input type='submit' name='tombol' value='Kirim' /></br>
  </body>							
		</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>