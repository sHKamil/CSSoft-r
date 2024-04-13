<?php echo $header ?>

    <?php $navbar ?>
    <div class="container">
        <?php if(!isset($data)) {?>
            <div class="d-flex justify-content-center align-items-center">
                <span class="alert alert-info">Brak danych do wyświetlenia.</span>
            </div>
        <?php }else{ ?>
            data
        <?php } ?>
    </div>

<?php echo $footer ?>
