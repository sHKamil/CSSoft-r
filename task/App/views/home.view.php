<?php echo $header ?>

    <?php echo $navbar ?>

    <div class="container">
        <?php if(!isset($data)) {?>
            <div class="d-flex justify-content-center align-items-center mt-5">
                <span class="alert alert-info">Brak danych do wyświetlenia.</span>
            </div>
        <?php }else{ ?>
            data
        <?php } ?>
    </div>

<?php echo $footer ?>
