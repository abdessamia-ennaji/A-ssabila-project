
<?php $__env->startSection('content'); ?>
    <div class ="container mt-3">
        <a href="/ajouter/chauffeur">
            <button type="submit" class="btn btn-outline-success">Ajouter un chauffeur</button>
        </a>
        <div class ="card">
            
            
            <div class ="card-header bg-danger text-white">liste des Chauffeurs</div>
                <div class ="card-body"> 
                    <form action="<?php echo e(route('liste.chauffeur')); ?>" method="GET" class="d-flex" role="search">
                        <input type="text" name="q" class="form-control me-2" placeholder="Search...">
                        <button type="submit" class="btn btn-outline-success">Search</button>
                    </form>
                    <table class ="table table-bordered my-3 ">
                        <thead class="table-primary">
                            <tr>

                                <th scope="col">Id Chauffeur</th>
                                <th scope="col">Nom de Chauffeur</th>
                                <th scope="col">Prenom de Chauffeur</th>
                                <th scope="col">CIN de Chauffeur</th>
                                <th scope="col">Date debut</th>
                                <th scope="col">Action</th>
                                
                            
                                
                            </tr>
                        </thead>
                        <tbody>

                    <?php if(!empty($chauffeur) && $chauffeur->count()): ?>
                            <?php $__currentLoopData = $chauffeur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chauffeurs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td> <?php echo e($chauffeurs->id); ?></td>
                                <td> <?php echo e($chauffeurs->nomChfr); ?></td>
                                <td> <?php echo e($chauffeurs->prenomChfr); ?></td>
                                <td> <?php echo e($chauffeurs->CIN); ?></td>
                                <td> <?php echo e($chauffeurs->date); ?></td>
                                
                                
                                </td> 
                                    
                                <td> 
                                    <a href="<?php echo e(route('edit-chauffeur',$chauffeurs->id)); ?>" class ="btn btn-warning" >Editer</a>
                                    <a  onclick="return confirm('Do you want to delete it ');" href="<?php echo e(route('delete-chauffeur',$chauffeurs->id)); ?>" class ="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    
                    <?php echo e($chauffeur->links()); ?> 
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\assabila-transport1\resources\views/chauffeur/liste.blade.php ENDPATH**/ ?>