<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-2">
                <div class="text-right">
                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Permission create')): ?>
                    <a href="<?php echo e(route('admin.permissions.create')); ?>" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">New Permission</a>
                  <?php endif; ?>
                </div>

              <div class="bg-white shadow-md rounded my-6">
                <table class="text-left w-full border-collapse">
                  <thead>
                    <tr>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Permission Name</th>
                      
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Permission access')): ?>
                      <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light"><?php echo e($permission->name); ?></td>
                        <td class="py-4 px-6 border-b border-grey-light text-right">
                          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Permission edit')): ?>
                          <a href="<?php echo e(route('admin.permissions.edit',$permission->id)); ?>" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400">Edit</a>
                          <?php endif; ?>

                          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Permission delete')): ?>
                          <form action="<?php echo e(route('admin.permissions.destroy', $permission->id)); ?>" method="POST" class="inline">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('delete'); ?>
                              <button class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark text-red-400">Delete</button>
                          </form>
                          <?php endif; ?>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    
                  </tbody>
                </table>
              </div>
  
            </div>
        </main>
    </div>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\ngen_task\resources\views/setting/permission/index.blade.php ENDPATH**/ ?>