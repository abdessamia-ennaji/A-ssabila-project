
<?php $__env->startSection('content'); ?>
    <div class="container ">
        <?php if(session ('success')): ?>
            <div class="alert alert-success mt-3 ">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <div class= "card">
            <div class="card-header bg-danger text-white">Editer un Voiture </div>
                <div class="card-body ">
                    <form action="<?php echo e(route('update.transport',$transport->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label for="">lettre de voiture:</label>
                            <select name="lettrevoiture" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" value="<?php echo e($transport->lettrevoiture); ?>">
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
                            <label for="">Numero d'immatriculation :</label>
                            <input type="text" name="numMatricule" id="" class="form-control" value="<?php echo e($transport->numMatricule); ?>">
                        </div>
    
                        <div class="form-group">
                            <label for="">Licence :</label>
                            <input type="text" name="licence" id="" class="form-control" value="<?php echo e($transport->licence); ?>">
                        </div>
    
                        <div class="form-group">
                            <label for="">La visite :</label>
                            <input type="text" name="laVisite" id="" class="form-control" value="<?php echo e($transport->laVisite); ?>">
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="">dateDebutlaVisite :</label>
                                <input type="date" name="dateDebutlaVisite" id="" class="form-control" value="<?php echo e($transport->dateDebutlaVisite); ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="">dateFinlaVisite :</label>
                                <input type="date" name="dateFinlaVisite" id="" class="form-control" value="<?php echo e($transport->dateFinlaVisite); ?>">
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label for="">Carte grise :</label>
                            <input type="text" name="cartGrise" id="" class="form-control" value="<?php echo e($transport->cartGrise); ?>">
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="">Date debut Carte grise :</label>
                                <input type="date" name="dateDebutcartGrise" id="" class="form-control" value="<?php echo e($transport->dateDebutcartGrise); ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="">Date fin Carte grise :</label>
                                <input type="date" name="dateFincartGrise" id="" class="form-control" value="<?php echo e($transport->dateFincartGrise); ?>">
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label for="">Date de début d'assurance :</label>
                            <input type="date" name="dateDebutAssurance" id="" class="form-control" value="<?php echo e($transport->dateDebutAssurance); ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Date de fin d'assurance :</label>
                            <input type="date" name="dateFinAssurance" id="" class="form-control" value="<?php echo e($transport->dateFinAssurance); ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Trajet :</label>
                            <input type="text" name="trajet" id="" class="form-control" value="<?php echo e($transport->trajet); ?>">
                        </div>
    
                        <div class="form-group">
                            <label for="">Nombre des Chaises :</label>
                            <input type="number" name="nbrChaises" id="" class="form-control" value="<?php echo e($transport->nbrChaises); ?>">
                        </div>
                        
                        
    
    
                        <div class="form-group">
                            <label for="">Chauffeur :</label>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="chauffeurId" value="<?php echo e($transport->chauffeurId); ?>">        
                                <option selected>Open this select menu</option>
                                <?php $__currentLoopData = $chauffeur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chauffeurs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                <option value="<?php echo e($chauffeurs->id); ?>" > <?php echo e($chauffeurs->nomChfr); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="">Assistante :</label>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="escorteId" value="<?php echo e($transport->escorteId); ?>">        
                                <option selected>Open this select menu</option>
                                <?php $__currentLoopData = $escorte; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $escortes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                <option value="<?php echo e($escortes->id); ?>" > <?php echo e($escortes->nomEsc); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </select>
                        </div>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\assabila-transport1\resources\views/transport/editer.blade.php ENDPATH**/ ?>