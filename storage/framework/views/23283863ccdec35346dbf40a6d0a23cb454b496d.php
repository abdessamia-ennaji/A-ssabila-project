
<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(session('success')): ?>
            <div class="alert alert-success mt-3">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header bg-primary text-white">Ajouter un ??????</div>
            <div class="card-body">
                <form action="<?php echo e(route('store.arriveedepart')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="">Nom :</label>
                        <input type="text" name="nomEtu" id="" class="form-control">
                    </div>
                    
                    <div class="col-md-6">
                        <label for="">Prenom :</label>
                        <input type="text" name="prenomEtu" id="" class="form-control">
                    </div>
                </div>
                    <div class="form-group">
                        <label for="">Situation:</label>
                        <select name="situation" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
                            <option value="Arrivee">Arrivee</option>
                            <option value="Depart">Depart</option>
                            
                        </select>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\assabila-transport1\resources\views/arriveedepart/ajouter.blade.php ENDPATH**/ ?>