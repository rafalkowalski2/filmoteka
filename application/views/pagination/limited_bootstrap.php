<ul class="pagination pagination-sm">


    <?php if ($previous_page !== FALSE): ?>
        <li>
            <a href="<?php echo URL::site(Request::current()->param('language').'/'.Request::current()->controller().'/'.Request::current()->action().'/page/'.$previous_page) ?>" rel="prev">
                <?php echo __('PREVIOUS') ?></a>
        </li>
    <?php else: ?>
        <li class="disabled">
            <a rel="prev"><?php echo __('PREVIOUS') ?></a>
        </li>
    <?php endif ?>

    <?php
    /* max left links */
    $offset = $total_pages - ($total_pages - $current_page);

    $left = $offset > $max_left_pages ? $max_left_pages : $offset;

    if ($offset > 1)
        for ($i = $offset - $left + 1; $i < $offset; $i++):
            ?>
            <li>
                <a href="<?php echo URL::site(Request::current()->param('language').'/'.Request::current()->controller().'/'.Request::current()->action().'/page/'.$i) ?>">
                    <?php echo abs($i) ?></a>
            </li>

        <?php endfor ?>

    <?php
    /* max right links */
    $right = $current_page + $max_right_pages;

    for ($i = $current_page; $i <= $right && $i <= $total_pages; $i++):
        ?>

        <?php if ($i == $current_page): ?>
            <li class="active">
                <a><strong><?php echo $i ?></strong></a>
            </li>
        <?php else: ?>
            <li>
                <a href="<?php echo URL::site(Request::current()->param('language').'/'.Request::current()->controller().'/'.Request::current()->action().'/page/'.$i) ?>">
                    <?php echo $i ?></a>
            </li>
        <?php endif ?>

    <?php endfor ?>

    <?php if ($next_page !== FALSE): ?>
        <li>
            <a href="<?php echo URL::site(Request::current()->param('language').'/'.Request::current()->controller().'/'.Request::current()->action().'/page/'.$next_page) ?>" rel="next">
                <?php echo __('NEXT') ?></a>
        </li>
    <?php else: ?>
        <li class="disabled">
            <a rel="next"><?php echo __('NEXT') ?></a>
        </li>
    <?php endif ?>


</ul>