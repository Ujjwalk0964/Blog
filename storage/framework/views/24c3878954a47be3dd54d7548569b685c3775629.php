<?php $__env->startSection('page_title','Post Listing'); ?>

<?php $__env->startSection('container'); ?>

<div class="">
	  <div class="page-title">
		 <div class="title_left">
			<h4>Post</h4>
			<h2><a href="/admin/post/add">Add Post</a></h2>
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
									<th width="55%">Title</th>
									<th width="15%">Image</th>
									<th width="10%">Date</th>
									<th width="18%">Action</th>
								 </tr>
							  </thead>
							  <tbody>
								 <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								 <tr>
									<td><?php echo e($list->id); ?></td>
									<td><?php echo e($list->title); ?></td>
									<td><img src="<?php echo e(asset('storage/post/'.$list->image)); ?>" width="100px"/></td>
									<td><?php echo e($list->post_date); ?></td>
									<td>
										<a class="btn btn-info color_white" href="<?php echo e(url('admin/post/edit/'.$list->id)); ?>">Edit</a>
										<a class="btn btn-danger color_white" href="<?php echo e(url('admin/post/delete/'.$list->id)); ?>">Delete</a>
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
<?php echo $__env->make('admin/layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\blog\resources\views\admin\post\listing.blade.php ENDPATH**/ ?>