    <!-- Food Area starts -->
    <section id="menu" class="bg-no-repeat bg-[right_top_15rem] md:bg-right-top pt-8 md:pt-32 w-full" style="background-image: url(<?php echo e($foodBg); ?>)">
      <div class="flex flex-col justify-around items-center food-sm:items-start max-w-[980px] mx-auto">
        <div class="food-sm:text-left m-4 max-w-sm mt-5 p-4 text-center">
          <h3 class="font-bold font-cursive-merie text-4xl leading-normal capitalize">
            <span class="text-green-400 leading-snug">Kami menyediakan</span> <br /><span class="leading-normal">makanan enak</span>
          </h3>
          <p class="pt-4 text-[14px] font-sans-lato text-slate-600 leading-relaxed">100 ribu Dungu Poin bisa ditukarkan dengan 1 pc bebek utuh di bebek goreng h. slamet (asli) terdekat di kotamu
          </p>
        </div>
        <div class="flex flex-wrap justify-center lg:justify-between  mt-5">
          <?php $__currentLoopData = $fooddata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="max-w-[290px] m-4 shadow-md group transition">
            <img class="w-full h-auto" src=<?php echo e($data['img']); ?> alt=<?php echo e($data['name']."-image"); ?>>
            <div class="p-7 bg-slate-100 group-hover:bg-green-400 transition duration-300 min-h-[170px]">
              <div class="flex flex-wrap justify-between font-bold font-cursive-merie text-lg">
                <h5 class='p-1 leading-normal capitalize'><?php echo e($data['name']); ?></h5>
                <span class="text-green-400 group-hover:text-slate-600 p-1 text-right">$<?php echo e($data['price']); ?></span>
              </div>
              <p class="pt-4 text-[14px] font-sans-lato text-slate-600 leading-relaxed"><?php echo e($data['desc']); ?></p>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </section>
    <!-- Food Area End -->
<?php /**PATH D:\Tugas\ENTERPRISE\restaurant\resources\views/home/partials/food.blade.php ENDPATH**/ ?>