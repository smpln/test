<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>Laravel AJAX</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Dependant Dropdown
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <select class="form-control" id="country-dropdown">
                                        <option value="">Select Country</option>
                                        <?php $__currentLoopData = $negara; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($country->Kod_Negara); ?>">
                                                <?php echo e($country->Keterangan); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="state">State</label>
                                        <select class="form-control" id="state-dropdown">
                                        </select>
                                    </div>
                                   <div class="form-group">
                                        <label for="institusi">Institusi</label>
                                        <select class="form-control" id="institusi-dropdown">
                                        </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
        $(document).ready(function() {
            $('#country-dropdown').on('change', function() {
                var country_id = this.value;
                $("#state-dropdown").html('');
                $.ajax({
                    url:"<?php echo e(route('get:states')); ?>",
                    type: "POST",
                    data: {
                        country_id: country_id,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    dataType : 'json',
                    success: function(result){
                        $('#state-dropdown').html('<option value="">Select State</option>');
                        $.each(result.states,function(key,value){
                            $("#state-dropdown").append('<option value="'+value.Kod_State+'">'+value.NamaState+'</option>');
                        });
                        $('#city-dropdown').html('<option value="">Select State First</option>');
                    }
                });
            });
            $('#state-dropdown').on('change', function() {
                var state_id = this.value;
                $("#city-dropdown").html('');
                $.ajax({
                    url:"<?php echo e(route('get:institusi')); ?>",
                    type: "POST",
                    data: {
                        state_id: state_id,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    dataType : 'json',
                    success: function(result){
                        $('#institusi-dropdown').html('<option value="">Select Institusi</option>');
                        $.each(result.institusi,function(key,value){
                            $("#institusi-dropdown").append('<option value="'+value.Kod_Institusi+'">'+value.NamaInstitusi+'</option>');
                        });
                    }
                });
            });
        });
        </script>
    </body>
</html>

<?php /**PATH C:\laragon\www\smpln2\resources\views/index.blade.php ENDPATH**/ ?>