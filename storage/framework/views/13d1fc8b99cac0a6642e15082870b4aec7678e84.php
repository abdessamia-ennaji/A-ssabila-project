
<?php $__env->startSection('content'); ?>
    <div class ="container mt-3">

        <a href="/ajouter/reclamation">
            <button type="submit" class="btn btn-outline-success">Ajouter un reclamation</button>
        </a>

        <div class ="card">
            <div class ="card-header bg-danger text-white">liste des Chauffeurs</div>
            
                <div class ="card-body"> 
                    <form action="<?php echo e(route('liste.reclamation')); ?>" method="GET" class="d-flex" role="search">
                        <input type="text" name="q" class="form-control me-2" placeholder="Search...">
                        <button type="submit" class="btn btn-outline-success">Search</button>
                    </form>
                    <table class ="table table-bordered my-3 ">
                        <thead class="table-primary">
                            <tr>

                                <th scope="col">#</th>
                                <th scope="col">Lettre de voiture</th>
                                <th scope="col">Nom de Chauffeur</th>
                                <th scope="col">Reclamation</th>
                                <th scope="col">Date de reclamation</th>
                                <th scope="col">Actions</th>
                                
                            
                                
                            </tr>
                        </thead>
                        <tbody>

                    <?php if(!empty($reclamation) && $reclamation->count()): ?>

                            <?php $__currentLoopData = $reclamation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reclamations): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td> <?php echo e($reclamations->id); ?></td>
                                <td> <?php echo e($reclamations->lettrevoiture); ?></td>
                                    <?php $__currentLoopData = $chauffeur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chauffeurs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($chauffeurs->id == $reclamations->chauffeurId): ?>
                                            <td value="<?php echo e($chauffeurs->id); ?>" class="text-center">
                                                        <?php echo e($chauffeurs->nomChfr); ?>

                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <td> <?php echo e($reclamations->reclamation); ?></td>
                                <td> <?php echo e($reclamations->dateRec); ?></td>
                                
                                
                                
                                </td> 
                                    
                                <td> 
                                    <a href="<?php echo e(route('show-reclamation',$reclamations->id)); ?>" class ="btn btn-info" >Details</a>
                                    <a href="<?php echo e(route('edit-reclamation',$reclamations->id)); ?>" class ="btn btn-warning" >Editer</a>
                                    <a  onclick="return confirm('Do you want to delete it ');" href="<?php echo e(route('delete-reclamation',$reclamations->id)); ?>" class ="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    
                   <?php echo e($reclamation->links()); ?>  
                    <?php else: ?> 
                        <tr>
                            <td colspan="7">THERE ARE NO DATA !!</td>
                        </tr>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\assabila-transport1\resources\views/reclamation/liste.blade.php ENDPATH**/ ?>