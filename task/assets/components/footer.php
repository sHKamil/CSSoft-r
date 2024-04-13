<?php
$config = require base_path('config/config.php');

return '
<footer class="footer mt-auto py-3 bg-light">
    <div class="container text-muted d-flex justify-content-center align-items-center gap-4 flex-column flex-md-row " bis_skin_checked="1">
        <span>
            Copyright - &copy' . $config['user_initials'] . '
        </span>
        <span>
            Wersja PHP: ' . $config['php_version'] . '
        </span>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
' . $js . '
</body>
</html>
';
?>
