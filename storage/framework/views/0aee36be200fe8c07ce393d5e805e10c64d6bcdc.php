
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
                            <?php if($chauffeurs->id == $transport->chauffeurId): ?>
                                <p class="form-control-static"><?php echo e($chauffeurs->nomChfr); ?></p>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Numero d'immatriculation :</label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo e($transport->numMatricule); ?></p>
                    </div>
                </div>

                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">licence :</label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo e($transport->licence); ?></p>
                    </div>
                </div>

                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">La visite :</label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo e($transport->laVisite); ?></p>
                    </div>
                </div>

                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">carte grise :</label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo e($transport->cartGrise); ?></p>
                    </div>
                </div>
                
                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Date debut d'assurance :</label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo e($transport->dateDebutAssurance); ?></p>
                    </div>
                </div>

                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Date fin d'assurance :</label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo e($transport->dateFinAssurance); ?></p>
                    </div>
                </div>

                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">lettre de voiture :</label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo e($transport->lettrevoiture); ?></p>
                    </div>
                </div>
                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">lettre de voiture :</label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo e($transport->kilometre); ?></p>
                    </div>
                </div>



                
            
            

                <div class="text-center mt-4">
                    <a href="<?php echo e(route('transport.pdf', $transport->id)); ?>" class="btn btn-primary" target="_blank">Imprimer PDF</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\assabila-transport1\resources\views/transport/show.blade.php ENDPATH**/ ?>