
<?php $__env->startSection('content'); ?>
    <div class="container ">
        <?php if(session ('success')): ?>
            <div class="alert alert-success mt-3 ">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <div class= "card">
            <div class="card-header bg-danger text-white">Editer un Reclamation </div>
                <div class="card-body">
                    <form action="<?php echo e(route('update.reclamation',$reclamation->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="">Chauffeur :</label>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="chauffeurId" value="<?php echo e($reclamation->chauffeurId); ?>">        
                                <option selected>Open this select menu</option>
                                <?php $__currentLoopData = $chauffeur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chauffeurs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                <option value="<?php echo e($chauffeurs->id); ?>" > <?php echo e($chauffeurs->nomChfr); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">reclamation :</label>
                            <input type="text" name ="reclamation" id="" class="form-control" value="<?php echo e($reclamation->reclamation); ?>">
                        </div>

                        
                        <div class="form-group">
                            <label for="">Date de Reclamation :</label>
                            <input type="date" name ="dateRec" id="" class="form-control" value="<?php echo e($reclamation->dateRec); ?>">
                        </div> 

                        
                        <div class="form-group">
                            <button class="btn btn-secondary">Modifier</button>
                        </div>
                    </form>  
                </div>
            </div>
        </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\assabila-transport1\resources\views/reclamation/editer.blade.php ENDPATH**/ ?>