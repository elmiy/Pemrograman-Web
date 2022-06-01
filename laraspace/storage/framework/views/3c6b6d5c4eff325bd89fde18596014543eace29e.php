<?php $__env->startSection('container'); ?>
<div class="container">
    <h1 class="my-3">Keranjang Kamu</h1>
    <?php if(session()->has('success')): ?>
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        Data Berhasil <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Barang</th>
                <th scope="col">jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
          <?php
              $i = 1;
              $total = 0;
          ?>
          <?php $__currentLoopData = $beli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th scope="row"><?php echo e($i); ?></th>
            <td><?php echo e($b->nama_barang); ?></td>
            <td><?php echo e($b->jumlah); ?></td>
            <td><?php
                $jumlah = $b->jumlah * $b->harga_barang;
                echo $jumlah;
            ?></td>
            <td><a href="/keranjang/hapus/<?php echo e($b->id); ?>" class="btn btn-danger">Delete</a></td>
          </tr>
          <?php
              $i++;
              $total += $jumlah;
          ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <td colspan="3" class="text-center">Jumlah</td> 
          <td colspan="1" class="text-start"><?php echo e($total); ?></td> 
          <td colspan="1"><button onclick="bayar()" class="btn btn-primary">Bayar</button></td> 
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?><?php /**PATH C:\xampp\htdocs\laraspace\resources\views/keranjang.blade.php ENDPATH**/ ?>