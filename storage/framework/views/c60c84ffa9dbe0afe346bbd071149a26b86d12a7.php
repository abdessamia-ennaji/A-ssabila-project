
<?php $__env->startSection('content'); ?>
    <div class ="container mt-3">
        <a href="/ajouter/transport">
            <button type="submit" class="btn btn-outline-success">Ajouter un transport</button>
        </a>
        <div class ="card">
            <div class ="card-header bg-danger text-white">liste des voitures</div>
                <div class ="card-body"> 
                    <form action="<?php echo e(route('liste.transport')); ?>" method="GET" class="d-flex" role="search">
                        <input type="text" name="q" class="form-control me-2" placeholder="Search...">
                        <button type="submit" class="btn btn-outline-success">Search</button>
                    </form>
                    <table class ="table table-bordered my-3 ">
                        <thead class="table-primary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Numero d'immatriculation </th>
                            <th scope="col">Licence </th>
                            <th scope="col">Carte grise</th>
                            <th scope="col">lettre de voiture</th>
                            <th scope="col">Kilometre</th>
                            <th scope="col">Chauffeur</th>
                            <th scope="col">Actions</th>
                          
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($transport) && $transport->count()): ?>
                        <?php $__currentLoopData = $transport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transports): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td> <?php echo e($transports->id); ?></td>
                            <td> <?php echo e($transports->numMatricule); ?></td>
                            <td> <?php echo e($transports->licence); ?></td>
                            <td> <?php echo e($transports->cartGrise); ?></td>
                            <td> <?php echo e($transports->lettrevoiture); ?></td>
                            <td> <?php echo e($transports->kilometre); ?></td>
                                
                            
                            
                            <?php $__currentLoopData = $chauffeur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chauffeurs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($chauffeurs->id == $transports->chauffeurId): ?>
                                    <td value="<?php echo e($chauffeurs->id); ?>" class="text-center">
                                                <?php echo e($chauffeurs->nomChfr); ?>

                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                            </td> 
                            

                            <td> 
                                <a href="<?php echo e(route('show-transport',$transports->id)); ?>" class ="btn btn-info" >Details</a>
                                <a href="<?php echo e(route('edit-transport',$transports->id)); ?>" class ="btn btn-warning" >Editer</a>
                                <a  onclick="return confirm('Do you want to delete it ');" href="<?php echo e(route('delete-transport',$transports->id )); ?>" class ="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?> 
                        <tr>
                            <td colspan="7">THERE ARE NO DATA !!</td>
                        </tr>
                    <?php endif; ?>
                


                    </table>
                    <?php echo e($transport->links()); ?>


                    
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\assabila-transport1\resources\views/transport/liste.blade.php ENDPATH**/ ?>