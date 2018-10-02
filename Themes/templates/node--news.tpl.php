<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <h2<?php print $title_attributes; ?>>
        <?php print $title; ?>
    </h2>

    <p class="submitted"><?php print $submitted; ?></p>
    
    <div class="content"<?php print $content_attributes; ?>>
        <?php print render($content['body']); ?>
    </div>
</article>