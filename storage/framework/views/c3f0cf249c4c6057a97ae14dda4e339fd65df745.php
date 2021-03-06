  <?php $__env->startSection('title'); ?> <?php echo e($title); ?> :: ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>  <?php $__env->startSection('styles'); ?> ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##
<style type="text/css">
.run-table{
  margin-top: 640px;
}

.border{
  border: 2px solid #000000;
  padding: 20px;
}
.run-backg{
        background-image: url('/img/cache/original/runsoft-bg.jpg');
        background-repeat: no-repeat;
        background-size: cover;
            /*color: #fdfdfd;*/
      background-position: center;

    }
.panel-flat > .panel-heading{
     background-color: transparent;
}
.btn{
  padding: 7px 34px;
}
.alert{
    display: block;
    margin-top: -150px;
    background-color: #fff;
    width: 470px;
    padding: 20px;
    border-radius: 3px;
    text-align: center;
    position: fixed;
    left: 50%;
    top: 50%;
    margin-left: -235px;
    /* margin-top: -200px; */
    overflow: hidden;
    /* display: none; */
    z-index: 1060;
}

@media (min-width:1025px) and (max-width:1081px) {
 
  .btn {
    padding: 7px 29px;
}
}
@media (min-width:769px) and (max-width:828px) {
 
  .btn {
    padding: 7px 26px;
}
}
@media (min-width: 320px) and (max-width:926px) {
.run-backg{
height: 358px;
}
.run-table {
/*margin-top: 129px;*/
margin-top: 137px;
} 
}
</style>
<?php $__env->stopSection(); ?> <?php $__env->startSection('main'); ?>

<?php echo $__env->make('utils.errors.list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="panel panel-flat run-backg">
    <div class="panel-heading">
        <h4 class="panel-title">
          Run Software
        </h4>
    </div>

    <div class="panel-body">
 
      <div class="row">
     <!--    <div class="col-sm-12">
          
          <img src="<?php echo e(url('img/cache/original/runsoftware.jpg')); ?>" width="100%" height="300px">
        </div> -->

      <div class="run-table">
<!--     <div class="col-sm-6">

       <?php if(count($broker_users) > 0): ?>

                     <table class="table" id="table">
                                <thead>
                                    <tr>

                                     
                                        <th>Broker</th> 
                                        <th>URL</th>
                                      

                                    </tr>

                                </thead>
                                    <tbody>

                                            <?php $__currentLoopData = $broker_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $busers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <tr>

                                             
                                                <td><?php echo e($busers->name); ?></td>
                                                  <td> <a href="<?php echo e($busers->url); ?>" target="_blank"> <?php echo e($busers->url); ?></a></td>
                                                 
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  

                                              

                                                          

                                    </tbody>
                            </table>
                            <?php else: ?>
                            No data Found
                            <?php endif; ?>

     
      
    </div> -->
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center border" style="margin-top: -550px;" >
      <p><h4 style="color:#ffffff; font-weight: 600;">Run Software</h4></p>
   

          <?php if($status == "stopped"): ?>
       <!--  <a class="btn btn-success" data-toggle="modal" data-target="#myModalstart">Start</span> </a> -->
        <div>
            <form action="<?php echo e(url('user/runsoftware')); ?>" method="post" data-parsley-validate="true" name="form-wizard">
             <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
              <input type="hidden" name="privateKey"  value="c553fef5bf159f3a57e984db2be954ce">
              <input type="hidden" name="issuer_key"  value="38da33fe1a9092e3ca4a0bc7be832cfd">
              <button type="submit" class="btn btn-success">Download</button>
            </form>
        </div>
        &nbsp

      
       
              <!-- Modal -->

                <div id="myModalstart" class="modal fade" role="dialog">
                <div class="modal-dialog">

              <!-- Modal content-->

                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>

                <div class="modal-body" style="overflow: auto !important;">
           <form action="<?php echo e(url('user/savebrokerdetails')); ?>" class="smart-wizard form-horizontal" method="post"  >
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                <div class="form-group">
                <label class="col-sm-4 control-label" for="username">
                    Choose Broker: <span class="symbol required"></span>
                </label>
                <div class="col-sm-5">
                    <select name="user" id="user" class="form-control" required="true">
                      <option value="">Choose User</option>
                      <?php $__currentLoopData = $broker_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $busers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                      <option value="<?php echo e($busers->id); ?>"><?php echo e($busers->name); ?> - <?php echo e($busers->url); ?></option>
                      
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
     
            <div class="form-group">
                <label class="col-sm-4 control-label" for="account">
                    Number Account: <span class="symbol required"></span>
                </label>
                <div class="col-sm-5">
                    <input type="text" id="account" name="account" class="form-control" required="true">
                </div>
            </div>
     
              <div class="form-group">
                <label class="col-sm-4 control-label" for="current_password">
                      Password Account
                </label>
                 <div class="col-sm-5">
                <input class="form-control" name="password" id="password"  type="password" required="true">
                </input>
                </div>
            </div>
         
   
                <div class="modal-footer">
                <div class="row">
              <button class="btn btn-info" tabindex="4" name="start" id="start" type="submit" value="start"> Start</button >       
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>
        </form>
                </div>
                </div>
                </div>




                 <?php endif; ?>

                <?php if($status == "started"): ?>

                 <a href="<?php echo e(url('user/changestatus')); ?>" class="btn btn-danger">Stop</span> </a>
                 <?php endif; ?>
    </div>
        
      </div>

 
        </div>
      </div>
        </div>

      
</div>




<?php if(session()->has('success')): ?>
        <div class="alert alert-success">
            <img src="/images/smile.png" style="width: 100px; margin-top: 25px;">
           
            <p style="margin: 25px; font-size: 20px;">Become a Marketer to download</p>
            <a type="button" href="purchasedashboard" class="btn btn-primary" id="alerting">Ok</a>
        </div>
<?php endif; ?>

<?php $__env->stopSection(); ?> <?php $__env->startSection('overscripts'); ?> ##parent-placeholder-cf3aa7a97dccc92dae72236fb07ec31668edf210##

<?php $__env->stopSection(); ?> 
<?php $__env->startSection('scripts'); ?>
##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##

<script type="text/javascript"> 

   $(document).ready(function() {
            $('.summernote').summernote();
        });
</script>

<script type="text/javascript"> 

   $(document).ready(function() {
            $('#alerting').click(function(){
              $(this).parent().remove();
            });
        });
</script>

 <script type="text/javascript">
$(document).on('submit', 'form', function() {
   $(this).find('button:submit, input:submit').attr('disabled','disabled');
 });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app.user.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>