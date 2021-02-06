<?php $__env->startSection('page_title','Contact Listing'); ?>

<?php $__env->startSection('container'); ?>

<div class="">
	  <div class="page-title">
		 <div class="title_left">
			<h4>Contact</h4>
		 </div>
	  </div>

	  <div class="clearfix"></div>
	  <div class="row">
		 <div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
			   <div class="x_content">
				  <div class="row">
				  
					 <div class="col-sm-12">
						<div class="card-box table-responsive">
						   <table id="datatable" class="table table-striped table-bordered" style="width:100%">
							  <thead>
								 <tr>
									<th width="2%">ID</th>
									<th width="15%">Name</th>
									<th width="15%">Email</th>
									<th width="10%">Mobile</th>
									<th width="48%">Message</th>
									<th width="10%">Added On</th>
								 </tr>
							  </thead>
							  <tbody>
								 <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								 <tr>
									<td><?php echo e($list->id); ?></td>
									<td><?php echo e($list->name); ?></td>
									<td><?php echo e($list->email); ?></td>
									<td><?php echo e($list->mobile); ?></td>
									<td><?php echo e($list->message); ?></td>
									<td><?php echo e($list->added_on); ?></td>
								 </tr>
								 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							  </tbody>
						   </table>
						</div>
					 </div>
				  </div>
			   </div>
			</div>
		 </div>
	  </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\blog\resources\views\admin\contact\listing.blade.php ENDPATH**/ ?>