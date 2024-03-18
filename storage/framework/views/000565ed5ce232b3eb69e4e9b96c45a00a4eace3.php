
<?php $__env->startSection('content'); ?>
    <div class ="container mt-3">

        <a href="/ajouter/arriveedepart">
            <button type="submit" class="btn btn-outline-success">Ajouter un arrivee,depart</button>
        </a>

        <div class ="card">
            <div class ="card-header bg-danger text-white">liste des Chauffeurs</div>
            
                <div class ="card-body"> 
                    <form action="<?php echo e(route('liste.arriveedepart')); ?>" method="GET" class="d-flex" role="search">
                        <select name="q" class="form-select me-2" aria-label="Search">
                          <option selected>Choose...</option>
                          <option value="Arrivee">Arrivee</option>
                          <option value="Depart">Depart</option>
                          
                        </select>
                        <button type="submit" class="btn btn-outline-success">Search</button>
                      </form>
                    <table class ="table table-bordered my-3 ">
                        <thead class="table-primary">
                            <tr>

                                <th scope="col">Id</th>
                                <th scope="col">Nom d'etudiant</th>
                                <th scope="col">Prenom d'etudiant</th>
                                <th scope="col">Situation</th>
                                <th scope="col">Date</th>
                                <th scope="col">Actions</th>


                                
                            
                                
                            </tr>
                        </thead>
                        <tbody>

                    

                            <?php $__currentLoopData = $arriveedepart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arriveedeparts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                    
                                <td> <?php echo e($arriveedeparts->id); ?></td>
                                <td> <?php echo e($arriveedeparts->nomEtu); ?></td>
                                <td> <?php echo e($arriveedeparts->prenomEtu); ?></td>
                                <td> <?php echo e($arriveedeparts->situation); ?></td>
                                <td> <?php echo e($arriveedeparts->date); ?></td>
                                
                                
                                </td> 
                                    
                                <td> 
                                    
                                    <a href="<?php echo e(route('edit-arriveedepart',$arriveedeparts->id)); ?>" class ="btn btn-warning" >Editer</a>
                                    <a  onclick="return confirm('Do you want to delete it ');" href="<?php echo e(route('delete-arriveedepart',$arriveedeparts->id)); ?>" class ="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    
                   
                    
                </div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\assabila-transport1\resources\views/arriveedepart/liste.blade.php ENDPATH**/ ?>