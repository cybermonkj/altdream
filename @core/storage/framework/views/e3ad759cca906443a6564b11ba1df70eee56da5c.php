<?php  $value = ($value)?? ''; ?>
<div class="form-group">
    <label for="<?php echo e($name); ?>"><?php echo e($title); ?></label>
    <select name="<?php echo e($name); ?>"  class="form-control">
        <option <?php if($value === 'everyone'): ?> selected <?php endif; ?> value="everyone"><?php echo e(__('Everyone')); ?></option>
        <option <?php if($value === 'user'): ?> selected <?php endif; ?> value="user"><?php echo e(__('User')); ?></option>
    </select>
</div><?php /**PATH /home/bhpegejb/altdream.app/@core/resources/views/components/fields/page-show-type.blade.php ENDPATH**/ ?>