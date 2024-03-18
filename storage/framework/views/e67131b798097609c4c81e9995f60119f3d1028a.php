
<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(session('success')): ?>
            <div class="alert alert-success mt-3">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header bg-primary text-white">Ajouter un Reclamation</div>
            <div class="card-body">
                <form action="<?php echo e(route('store.reclamation')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                     <div class="form-group">
                        <label for="">Chauffeur :</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="chauffeurId">        
                            <option selected>Open this select menu</option>
                            <?php $__currentLoopData = $chauffeur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chauffeurs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                            <option value="<?php echo e($chauffeurs->id); ?>" > <?php echo e($chauffeurs->nomChfr); ?> <?php echo e($chauffeurs->prenomChfr); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </select>
                    </div> 

                    <div class="form-group">
                        <label for="">lettre de voiture:</label>
                        <select name="lettrevoiture" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                            <option value="I">I</option>
                            <option value="J">J</option>
                            <option value="K">K</option>
                            <option value="L">L</option>
                            <option value="M">M</option>
                            <option value="N">N</option>
                        </select>
                    </div>

                    
                    <div class="form-group">
                        <label for="">Reclamation :</label>
                        <input type="text" name="reclamation" id="" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Date de Reclamation :</label>
                        <input type="date" name="dateRec" id="" class="form-control">
                    </div>
                    
                   
                    
                    
                    
                    
                    <div class="form-group">
                        <button class="btn btn-secondary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\assabila-transport1\resources\views/reclamation/ajouter.blade.php ENDPATH**/ ?>