
<div style="height: ;" class="d-flex justify-content-center align-items-center flex-column">
    <div class="d-flex justify-content-center my-3">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Specializations
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#" wire:click.prevent="idd('')">All</a></li>
                <li><a class="dropdown-item" href="#" wire:click.prevent="idd(1)">Developer</a></li>
                <li><a class="dropdown-item" href="#" wire:click.prevent="idd(2)">Programmer</a></li>
                <li><a class="dropdown-item" href="#" wire:click.prevent="idd(3)">Analyst</a></li>
                <li><a class="dropdown-item" href="#" wire:click.prevent="idd(4)">Designer</a></li>
            </ul>
        </div>
    </div>
    <div class="my-3"> 
        <table class="table table-striped-columns">
            <thead>
                <tr>
                <th scope="col">Officer Name</th>
                <th scope="col">Specialisation</th>
                </tr>
            </thead>
            <tbody>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $officers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $officer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($officer->item_name); ?></td>
                        <td><?php echo e($officer->category->category_name); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
            </tbody>
            </table>
    </div>
</div>
<?php /**PATH D:\LARAVEL\categorizingSample\resources\views/livewire/officer-component.blade.php ENDPATH**/ ?>