
<?php $__env->startSection('content'); ?>
 
 
<div class="card">
  <div class="card-header">Books Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : <?php echo e($books->name); ?></h5>
        <p class="card-text">Author Name : <?php echo e($books->authorname); ?></p>
        <p class="card-text">Price : <?php echo e($books->price); ?></p>
  </div>
       
    </hr>
  
  </div>
</div>
<?php echo $__env->make('books.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\bookscrud-app\resources\views/books/show.blade.php ENDPATH**/ ?>