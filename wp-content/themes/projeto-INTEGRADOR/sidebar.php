<?php // CÓDIGO LATERAL ?>
<div id="local-sidebar">
SIDEBAR


<div id="sidebar">
    <?php // IMPRIMIR SIDEBAR MySidebar  ?>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('MySidebar') ) : ?>
    <?php endif; ?>
</div>

<div id="sidebar">
    <?php // IMPRIMIR SIDEBAR MySidebar2  ?>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('MySidebar2') ) : ?>
    <?php endif; ?>
</div>

</div>



