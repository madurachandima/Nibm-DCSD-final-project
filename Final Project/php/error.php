<html>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</html>

<?php if (count($errors) > 0) : ?>

    <?php foreach ($errors as $error) : ?>
        <script>
            toastr.error("<?php echo $error ?>");
        </script>'


    <?php endforeach ?>




<?php endif ?>


;