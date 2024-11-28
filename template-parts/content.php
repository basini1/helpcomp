<article id="post-<?php the_ID(); ?>" class="pprose max-w-none">

    <?php
    $blocks = parse_blocks(get_the_content());

    foreach ($blocks as $block) {
        // Sprawdź czy blok jest domyślnym blokiem Gutenberg
        if (strpos($block['blockName'], 'core/') === 0) {
            echo '<div class="wrapper">';
            echo render_block($block);
            echo '</div>';
        } else {
            // Jeśli to Twój blok, renderuj go pełnoekranowo
            echo render_block($block);
        }
    }
    ?>

</article>