
<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(session('success')): ?>
            <div class="alert alert-success mt-3"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <div class="card">
            <div class="card-header bg-danger text-white">Détails de la commande</div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Chauffeur :</label>
                    <div class="col-sm-9">
                        <?php $__currentLoopData = $chauffeur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chauffeurs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($chauffeurs->id == $reclamation->chauffeurId): ?>
                                <p class="form-control-static"><?php echo e($chauffeurs->nomChfr); ?> <?php echo e($chauffeurs->prenomChfr); ?> </p>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Reclamation :</label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo e($reclamation->reclamation); ?></p>
                    </div>
                </div>
                 
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">date de reclamation :</label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo e($reclamation->dateRec); ?></p>
                    </div>
                </div>

                
                
            
            </p>

                <div class="text-center mt-4">
                    <a href="<?php echo e(route('reclamation.pdf', $reclamation->id)); ?>" class="btn btn-primary" target="_blank">Imprimer PDF</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\assabila-transport1\resources\views/reclamation/show.blade.php ENDPATH**/ ?>