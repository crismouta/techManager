<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Event Details')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <!-- component -->
<div class="flex justify-between m-6">
  <div class="flex flex-col h-full w-4/5 mx-auto bg-green-100 rounded-lg">
          <img
            class="rounded-lg rounded-b-none"
            src="<?php echo e(asset('storage').'/'.$event->image); ?>"
            alt="thumbnail"
            loading="lazy"
          />
          <div class="flex justify-between -mt-4 px-4">
            <span
              class="inline-block ring-4 bg-green-500 ring-gray-800 rounded-sm text-sm font-medium tracking-wide text-gray-100 px-3 pt-0.5"
              >TED Talk</span>

            <span
              class="flex h-min space-x-1 items-center rounded-full text-gray-400 bg-gray-800 py-1 px-2 text-xs font-medium">

              <!--<svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 text-blue-500"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                />
              </svg>-->
              
              <p class="text-gren-500 font-semibold text-xs">
                5 / <?php echo e($event->capacity); ?>

              </p>
            </span>
          </div>
          <div class="py-2 px-4">
            <h1
              class="text-xl font-medium leading-6 tracking-wide text-black hover:text-blue-500 cursor-pointer">
              <?php echo e($event->title); ?>

            </h1>
          </div>
          <div class="px-4 space-y-2">
            <p class="text-gray-600 font-normal leading-5 tracking-wide">
              <?php echo e($event->description); ?>

            </p>
          </div>
          <div class="flex flex-row items-end h-full w-full px-4 mt-4">
            <div class="flex border-t border-gray-700 w-full py-4">
              <div
                class="flex items-center space-x-3 border-r border-gray-700 w-full"
              >
                <img
                  class="object-cover h-14 w-14 h-8 border-2 border-white rounded-full"
                  src="https://scontent-mad1-1.xx.fbcdn.net/v/t1.6435-9/48367594_2254870701505746_1892060332294144000_n.png?_nc_cat=110&ccb=1-3&_nc_sid=973b4a&_nc_ohc=RTQYj1zVyXUAX9P_14R&_nc_ht=scontent-mad1-1.xx&oh=911d3d8bc253e459c5460962a04e66b3&oe=60E8458A"
                  alt="profile users"
                  loading="lazy"
                />
                <div class="">
                  <p class="text-sm font-semibold tracking-wide text-black">
                    Author
                  </p>
                  <p class="text-xs font-light tracking-wider text-gray-600">
                    08/12/2021
                  </p>
                </div>
              </div>
              <div class="flex items-center flex-shrink-0 px-2">
                <div class="flex items-center space-x-1 text-gray-400">
                  <a href="<?php echo e(url('/admin/edit/'.$event->id)); ?>" class="border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline">Edit</a>
                </div>
                
                <div class="flex items-center space-x-1 text-gray-400">
                  <form action="<?php echo e(url('/admin/edit/'.$event->id)); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <?php echo e(method_field('DELETE')); ?>

                    <input type="submit" class="border border-red-500 text-red-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-red-600 focus:outline-none focus:shadow-outline"
                      onclick="return confirm('Are you sure you want to permanently remove this item?')" value="Delete">
                  </form>
                </div>
                
              </div>
            </div>
          </div>
        </div>
</div>

    

              <!--Edit-->
              
              
              
            </tr>
            
          </tbody>
            
        </table>
        
      </div>
      
    </div>
    
  </div>
  
</div>

            </div>
        </div>

        <div class="flex justify-center pt-8">
         
        </div>
    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\techManager\resources\views/admin/show.blade.php ENDPATH**/ ?>