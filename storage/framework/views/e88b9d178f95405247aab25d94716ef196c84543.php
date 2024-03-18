
<?php $__env->startSection('content'); ?>
    <div class ="container mt-3">
        <a href="/ajouter/kilometrage">
            <button type="submit" class="btn btn-outline-success">Ajouter un kilometrage</button>
        </a>
        <div class ="card">
            <div class ="card-header bg-danger text-white">liste des Chauffeurs</div>
                <div class ="card-body"> 
                    <form action="<?php echo e(route('liste.kilometrage')); ?>" method="GET" class="d-flex" role="search">
                        <input type="text" name="q" class="form-control me-2" placeholder="Search...">
                        <button type="submit" class="btn btn-outline-success">Search</button>
                    </form>
                    <table class ="table table-bordered my-3 ">
                        <thead class="table-primary">
                            <tr>

                                <th scope="col">Id</th>
                                <th scope="col">Date</th>
                                <th scope="col">lettre de voiture</th>
                                <th scope="col">Ancienne KM</th>
                                <th scope="col">Nouveau KM</th>
                                <th scope="col">kilometrage qui past</th>
                                <th scope="col">Action</th>
                                
                            
                                
                            </tr>
                        </thead>
                        <tbody>

                    <?php if(!empty($kilometrage) && $kilometrage->count()): ?>
                            <?php $__currentLoopData = $kilometrage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kilometrages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td> <?php echo e($kilometrages->id); ?></td>
                                <td> <?php echo e($kilometrages->date); ?></td>
                                <td> <?php echo e($kilometrages->lettreVoiture); ?></td>
                                <td> <?php echo e($kilometrages->ancienKM); ?></td>
                                <td> <?php echo e($kilometrages->nouveauKM); ?></td>
                                <td class="text-danger"><b> <?php echo e($kilometrages->nouveauKM - $kilometrages->ancienKM); ?> </b></td>
                                
                                
                                </td> 
                                    
                                <td> 
                                    
                                    <a  onclick="return confirm('Do you want to delete it ');" href="<?php echo e(route('delete-kilometrage',$kilometrages->id)); ?>" class ="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    
                    <?php echo e($kilometrage->links()); ?> 
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\assabila-transport1\resources\views/kilometrage/liste.blade.php ENDPATH**/ ?>