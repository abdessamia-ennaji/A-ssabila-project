
<?php $__env->startSection('content'); ?>
    <div class ="container mt-3">
        <a href="/ajouter/escorte">
            <button type="submit" class="btn btn-outline-success">Ajouter un escorte / assistance</button>
        </a>
        <div class ="card">
            <div class ="card-header bg-danger text-white">liste des Chauffeurs</div>
                <div class ="card-body"> 
                    <form action="<?php echo e(route('liste.escorte')); ?>" method="GET" class="d-flex" role="search">
                        <input type="text" name="q" class="form-control me-2" placeholder="Search...">
                        <button type="submit" class="btn btn-outline-success">Search</button>
                    </form>
                    <table class ="table table-bordered my-3 ">
                        <thead class="table-primary">
                            <tr>

                                <th scope="col">Id Escorte</th>
                                <th scope="col">Nom de Escorte</th>
                                <th scope="col">Prenom de Escorte</th>
                                <th scope="col">CIN de Escorte</th>
                                <th scope="col">Date </th>
                                <th scope="col">Actions </th>
                                
                            
                                
                            </tr>
                        </thead>
                        <tbody>

                    <?php if(!empty($escorte) && $escorte->count()): ?>
                            <?php $__currentLoopData = $escorte; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $escortes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td> <?php echo e($escortes->id); ?></td>
                                <td> <?php echo e($escortes->nomEsc); ?></td>
                                <td> <?php echo e($escortes->prenomEsc); ?></td>
                                <td> <?php echo e($escortes->CIN); ?></td>
                                <td> <?php echo e($escortes->date); ?></td>
                                
                                
                                </td> 
                                    
                                <td> 
                                    <a href="<?php echo e(route('edit-escorte',$escortes->id)); ?>" class ="btn btn-warning" >Editer</a>
                                    <a  onclick="return confirm('Do you want to delete it ');" href="<?php echo e(route('delete-escorte',$escortes->id)); ?>" class ="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    
                    <?php echo e($escorte->links()); ?> 
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\assabila-transport1\resources\views/escorte/liste.blade.php ENDPATH**/ ?>