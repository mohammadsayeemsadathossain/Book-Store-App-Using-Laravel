
<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">Books Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('book')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Author Name</label></br>
        <input type="text" name="authorname" id="authorname" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('books.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\bookscrud-app\resources\views/books/create.blade.php ENDPATH**/ ?>