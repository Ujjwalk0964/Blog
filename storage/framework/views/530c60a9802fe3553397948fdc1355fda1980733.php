<?php $__env->startSection('page_title','Page Listing'); ?>

<?php $__env->startSection('container'); ?>

<div class="">
	  <div class="page-title">
		 <div class="title_left">
			<h4>Page</h4>
			<h2><a href="<?php echo e(url('/admin/page/add')); ?>">Add Page</a></h2>
		 </div>
	  </div>

	  <div class="clearfix"></div>
	  <div class="row">
		 <div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
			   <div class="x_content">
				  <div class="row">
				  
					 <div class="col-sm-12 flash_msg"><?php echo e(session('msg')); ?></div>
					 <div class="col-sm-12">
						<div class="card-box table-responsive">
						   <table id="datatable" class="table table-striped table-bordered" style="width:100%">
							  <thead>
								 <tr>
									<th width="2%">ID</th>
									<th width="45%">Name</th>
									<th width="35%">Slug</th>
									<th width="18%">Action</th>
								 </tr>
							  </thead>
							  <tbody>
								 <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								 <tr>
									<td><?php echo e($list->id); ?></td>
									<td><?php echo e($list->name); ?></td>
									<td><?php echo e($list->slug); ?></td>
									<td>
										<a class="btn btn-info color_white" href="<?php echo e(url('admin/page/edit/'.$list->id)); ?>">Edit</a>
										<a class="btn btn-danger color_white" href="<?php echo e(url('admin/page/delete/'.$list->id)); ?>">Delete</a>
									</td>
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
<?php echo $__env->make('admin/layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\blog\resources\views\admin\page\listing.blade.php ENDPATH**/ ?>