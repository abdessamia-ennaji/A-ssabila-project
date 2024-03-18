
<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(session('success')): ?>
            <div class="alert alert-success mt-3">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header bg-primary text-white">Ajouter un Escorte</div>
            <div class="card-body">
                <form action="<?php echo e(route('store.escorte')); ?>" method="post">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <label for="">Nom :</label>
                        <input type="text" name="nomEsc" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Prenom :</label>
                        <input type="text" name="prenomEsc" id="" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="">CIN :</label>
                        <input type="text" name="CIN" id="" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="">Date :</label>
                        <input type="date" name="date" id="" class="form-control">
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        <button class="btn btn-secondary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\assabila-transport1\resources\views/escorte/ajouter.blade.php ENDPATH**/ ?>