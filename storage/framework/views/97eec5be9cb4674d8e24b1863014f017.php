<?php $__env->startSection('title', 'Form Kategori'); ?>

<?php $__env->startSection('contents'); ?>
  <form action="<?php echo e(isset($kategori) ? route('kategori.tambah.update', $kategori->id) : route('kategori.tambah.simpan')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo e(isset($kategori) ? 'Form Edit Kategori' : 'Form Tambah Kategori'); ?></h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="nama">Nama Kategori</label>
              <input class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-5" type="text" name="nama" id="nama" value="<?php echo e(isset($kategori) ? $kategori->nama : ''); ?>" placeholder="Masukan nama kategori">
              <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="invalid-feedback"><?php echo e($message); ?></div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\arafl\raflyyuts\resources\views/kategori/form.blade.php ENDPATH**/ ?>