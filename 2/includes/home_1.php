<div class="container">
    <?php
    if (!isset($page))
        include("includes/p_daftar_buku.php");
    else
        include("includes/p_" . $page . ".php");
    ?>
</div><!--/span-->