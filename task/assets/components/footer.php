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
' . $bootstrap_js . '
' . $js . '
</body>
</html>
';

?>
