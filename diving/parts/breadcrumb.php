<?php
// 条件に応じて適用するクラス名を決定
$breadcrumbClass = is_404() ? 'breadcrumb breadcrumb--white layout-breadcrumb layout-breadcrumb--white' : 'breadcrumb layout-breadcrumb';
?>

<div class="<?php echo $breadcrumbClass; ?>">
    <div class="breadcrumb__inner inner">
        <?php
        // bcn_display関数が存在するかチェックし、存在すればブレッドクラムを表示
        if (function_exists('bcn_display')) {
            bcn_display();
        }
        ?>
    </div>
</div>