<?php
    $blogimage = $node->field_image['und']['0']['uri'];
    $title = $node->title;
    $blogdate = date('F t, Y', ($node->field_article_date));
    $blogcontent = $node->body['und'][0]['value'];;
    $large = 'large';
?>

<div class="blogtitle">
    <?php print $title; ?>
</div>
<div class="blogpostdate">
    Posted By <span class="blogauthor">Zazebear</span><?php print $blogdate; ?>
</div>
<div class="blogpostimage">
    <image src="<?php print image_style_url($large, $blogimage); ?>"></image>
</div>
<div class="blogpostcontnet">
    <?php print $blogcontent; ?>
</div>
