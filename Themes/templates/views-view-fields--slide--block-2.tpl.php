
<?php
    $ifid=$row->field_field_slideshow_image[0][raw][fid];
    $imgpath = file_load($ifid)->uri;
    $imageurl= file_create_url($imgpath);
?>

<div class="homeslidewrapper">
	<div class="homeslideImage" style="background-image: url('<?php  print $imageurl; ?>')">
        <div class="hometextwrapper">
            <div class="homeslidetitle">
                 <h1 class="bigText"><?php print $row->node_title; ?></h1>
            </div>
            <div class="homeslidetext"><?php print $row->field_body[0][raw][safe_value];?></div>
            <div class="homeslidereadmore">
                <a href="<?php print $row->field_field_learn_more_link[0][raw][safe_value];?>"><?php print $row->field_field_link_title[0][raw][safe_value];?></a>
            </div>
        </div>
    </div>
</div>