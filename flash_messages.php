<?php

if (isset($_GET['error'])) {
?>

    <div class="alert alert-danger"><?php echo $_GET['error']; ?></div>

<?php
}
