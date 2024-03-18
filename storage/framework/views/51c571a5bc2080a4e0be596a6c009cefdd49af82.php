
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
                    <form action="<?php echo e(route('update.arriveedepart',$arriveedepart->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        

                        <div class="form-group">
                            <label for="">Nom :</label>
                            <input type="text" name ="nomEtu" id="" class="form-control" value="<?php echo e($arriveedepart->nomEtu); ?>">
                        </div>

                        
                        <div class="form-group">
                            <label for="">Prenom :</label>
                            <input type="text" name ="prenomEtu" id="" class="form-control" value="<?php echo e($arriveedepart->prenomEtu); ?>">
                        </div> 

                        <div class="form-group">
                            <label for="">Situation:</label>
                            <select name="situation" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"  value="<?php echo e($arriveedepart->situation); ?>"  >
                                <option value="Arrivee">Arrivee</option>
                                <option value="Depart">Depart</option>
                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Date :</label>
                            <input type="date" name="date" id="" class="form-control" value="<?php echo e($arriveedepart->date); ?>">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\assabila-transport1\resources\views/arriveedepart/editer.blade.php ENDPATH**/ ?>