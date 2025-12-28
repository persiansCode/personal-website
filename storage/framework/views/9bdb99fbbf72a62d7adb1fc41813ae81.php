<div
    wire:ignore
    x-data
    x-init="
        setTimeout(() => {
           $('.datepickerInput').persianDatepicker({
                format: '<?php echo e($format ?? 'YYYY-MM-DD'); ?>',
                calendar: {
                    persian: {
                        locale: 'en',
                        leapYearMode: 'astronomical'
                    }
                },
                timePicker: {
                    enabled: <?php echo e($withTime ?? 'false'); ?>,
                    meridiem: { enabled: true }
                },
                onSelect: function(unix) {
                    let val = new persianDate(unix).format('<?php echo e($format ?? 'YYYY-MM-DD'); ?>');
                    window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('<?php echo e($attributes->get('wire:model')); ?>', val);
        }
            });
        }, 300);
    "
>
    <input
        type="text"
        autocomplete="off"
        <?php echo e($attributes->except('wire:model')->merge(['class' => 'datepickerInput w-full rounded-md border p-2'])); ?>

    />
</div>
<?php /**PATH G:\programming\code\liara\resources\views\vendor\livewire-jalali-datepicker\components\jalali-datepicker.blade.php ENDPATH**/ ?>