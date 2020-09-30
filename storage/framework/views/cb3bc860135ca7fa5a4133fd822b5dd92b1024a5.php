<?php $__env->startSection('content'); ?>
<section class="panel panel-transparent">
	<body>
	<div class="form-center">
  <center><h2>INPUT RUMAH SAKIT</h2></center>
             <hr><div class="col-md-8 form-group">
              <div class="heading"></hr>
                Nama Rumah Sakit :
              </div>
              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
             <div class="col-md-8 form-group">
             <div class="heading">
               Nomor Telepon :
              </div>
              <input type="tel" class="form-control" name="phone" id="phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
             <div class="col-md-8 form-group">
              <div class="heading">
                Email :
              </div>
              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="heading"></div>
             </div>
            </div>
           
             <div class=" col-md-8 form-group">
              <div class="validate">
              <br>Fasilitas Yang Tersedia : </br>
              </div>
              <select name="doctor" id="doctor" class="form-control">
			  	    <option value="silahkan pilih">silahkan pilih</option>
			  	    <option value="Rawat Inap">Rawat Inap</option>
                <option value="Laboratorium">Laboratorium</option>
                <option value="Ruang UGD">Ruang UGD </option>
                <option value="Radiologi">Radiologi</option>
                <option value="Poli Umum">Poli Umum</option>
                <option value="Poli Anak">Poli Anak</option>
                <option value="Apotek">Apotek</option>
                <option value="Kebidanan">Kebidanan</option>
              </select>   
              <div class="w-full dis-none js-show-service">
                <div class="wrap-contact100-form-radio">
                  <span class="label-input100"><br>Jenis Test :</br></span>
                  <div class="contact100-form-radio m-t-15">
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                  <label for="vehicle1"> PCR / Swab</label><br>
                </div>
                <div class="contact100-form-radio">
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> Rapid Test</label><br>
                </div>
		      	<br><input type='submit' name='tombol' value='Kirim' /></br>

	</body>							
		</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>