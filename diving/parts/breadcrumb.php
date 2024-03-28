<?php if (is_404()) : ?>
    <div class="breadcrumb breadcrumb--white layout-breadcrumb layout-breadcrumb--white">
        <div class="breadcrumb__inner inner">
            <?php if (function_exists('bcn_display')) { bcn_display(); } ?>
        </div>
    </div>
<?php else : ?>
    <div class="breadcrumb layout-breadcrumb">
        <div class="breadcrumb__inner inner">
        <?php if (function_exists('bcn_display')) { bcn_display(); } ?>
        </div>
    </div>
<?php endif; ?>