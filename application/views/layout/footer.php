<link href="<?= base_url('global'); ?>/vendors/datepicker.css" rel="stylesheet" media="screen">
<link href="<?= base_url('global'); ?>/vendors/uniform.default.css" rel="stylesheet" media="screen">
<link href="<?= base_url('global'); ?>/vendors/chosen.min.css" rel="stylesheet" media="screen">

<link href="<?= base_url('global'); ?>/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

<script src="<?= base_url('global'); ?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url('global'); ?>/vendors/jquery.uniform.min.js"></script>
<script src="<?= base_url('global'); ?>/vendors/chosen.jquery.min.js"></script>
<script src="<?= base_url('global'); ?>/vendors/bootstrap-datepicker.js"></script>
<script src="<?= base_url('global'); ?>/vendors/datatables/js/jquery.dataTables.min.js"></script>

<script src="<?= base_url('global'); ?>/vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
<script src="<?= base_url('global'); ?>/vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

<script src="<?= base_url('global'); ?>/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

<script type="text/javascript" src="<?= base_url('global'); ?>/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="<?= base_url('global'); ?>/assets/form-validation.js"></script>

<script src="<?= base_url('global'); ?>/assets/scripts.js"></script>
<script src="<?= base_url('global'); ?>/assets/DT_bootstrap.js"></script>
<script>
    jQuery(document).ready(function() {
        FormValidation.init();
    });


    $(function() {
        $(".datepicker").datepicker();
        $(".uniform_on").uniform();
        $(".chzn-select").chosen();
        $('.textarea').wysihtml5();

        $('#rootwizard').bootstrapWizard({
            onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index + 1;
                var $percent = ($current / $total) * 100;
                $('#rootwizard').find('.bar').css({
                    width: $percent + '%'
                });
                // If it's the last tab then hide the last button and show the finish instead
                if ($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }
        });

        $('#rootwizard .finish').click(function() {
            alert('Finished!, Starting over!');
            $('#rootwizard').find("a[href*='tab1']").trigger('click');
        });

        // Jquery Dependency

        $("input[data-type='currency']").on({
            keyup: function() {
                formatCurrency($(this));
            },
            blur: function() {
                formatCurrency($(this), "blur");
            }
        });


        function formatNumber(n) {
            // format number 1000000 to 1,234,567
            return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        }


        function formatCurrency(input, blur) {
            // appends $ to value, validates decimal side
            // and puts cursor back in right position.

            // get input value
            var input_val = input.val();

            // don't validate empty input
            if (input_val === "") {
                return;
            }

            // original length
            var original_len = input_val.length;

            // initial caret position 
            var caret_pos = input.prop("selectionStart");

            // check for decimal
            if (input_val.indexOf(".") >= 0) {

                // get position of first decimal
                // this prevents multiple decimals from
                // being entered
                var decimal_pos = input_val.indexOf(".");

                // split number by decimal point
                var left_side = input_val.substring(0, decimal_pos);
                var right_side = input_val.substring(decimal_pos);

                // add commas to left side of number
                left_side = formatNumber(left_side);

                // validate right side
                right_side = formatNumber(right_side);

                // On blur make sure 2 numbers after decimal
                if (blur === "blur") {
                    right_side += "";
                }

                // Limit decimal to only 2 digits
                right_side = right_side.substring(0, 2);

                // join number by .
                input_val = left_side + "." + right_side;

            } else {
                // no decimal entered
                // add commas to number
                // remove all non-digits
                input_val = formatNumber(input_val);
                input_val = input_val;

                // final formatting
                if (blur === "blur") {
                    input_val += "";
                }
            }

            // send updated string to input
            input.val(input_val);

            // put caret back in the right position
            var updated_len = input_val.length;
            caret_pos = updated_len - original_len + caret_pos;
            input[0].setSelectionRange(caret_pos, caret_pos);
        }



    });
</script>
<script>
    $(function() {
        const flashData = $('.flash-data').data('flashdata');
        // sukses
        if (flashData) {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Berhasil',
                text: flashData,
                showConfirmButton: true
                // timer: 1500
            })
        }

        const flashDataGagal = $('.flash-data-gagal').data('flashdata');
        // gagal
        if (flashDataGagal) {
            Swal.fire({
                icon: 'error',
                title: flashDataGagal,
                text: 'Something went wrong!'
            })
        }

        $('.tombol-hapus').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href');
            Swal.fire({
                title: 'Konfirmasi Hapus Data',
                text: 'Klik hapus untuk menghapus data',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus'
            }).then((result) => {
                if (result.value) {
                    document.location.href = href;
                }
            })
        });
    });
</script>
</body>

</html>