<?php
    $section1_image1 = file_create_url($node->field_section_image_1['und'][0]['uri']);
    $section1_image2 = file_create_url($node->field_section_image_2['und'][0]['uri']);
    $section1_text1 = $node->field_section_text_for_image_1['und'][0][safe_value];

    $section2_image = file_create_url($node->field_section_2_image['und'][0]['uri']);
    $section2_title = $node->field_section_2_text_tile['und'][0][safe_value];
    $section2_imagetext = $node->field_section_2_text_for_image['und'][0][safe_value];

    $section3_image1 = file_create_url($node->field_section_3_image_1['und'][0]['uri']);
    $section3_textforimage1 = $node->field_ssection_3_text_for_image_['und'][0][safe_value];
    $section3_title1 = $node->field_section_3_text_title['und'][0][safe_value];
    $section3_image2 = file_create_url($node->field_section_3_image_2['und'][0]['uri']);

    $section4_text1 = $node->field_section_4_text_1['und'][0][safe_value];
    $section4_title1 = $node->field_section_4_text_1_title['und'][0][safe_value];
    $section4_image1 = file_create_url($node->field_section_4_image_1['und'][0]['uri']);
    $section4_image1title = $node->field_section_4_image_1_title['und'][0][safe_value];
    $section4_image1text = $node->field_section_4_image_1_text['und'][0][safe_value];

    $section4_image2 = file_create_url($node->field_section_4_image_2['und'][0]['uri']);
    $section4_image2title = $node->field_section_4_image_2_title['und'][0][safe_value];
    $section4_image2text = $node->field_section_4_image_2_text['und'][0][safe_value];

    $section4_image3 = file_create_url($node->field_section_4_image_3['und'][0]['uri']);
    $section4_image3title = $node->field_section_4_image_3_title['und'][0][safe_value];
    $section4_image3text = $node->field_section_4_image_3_text['und'][0][safe_value];

    $section4_image4 = file_create_url($node->field_section_4_image_4['und'][0]['uri']);
    $section4_image4title = $node->field_ssection_4_image_4_title['und'][0][safe_value];
    $section4_image4text = $node->field_section_4_image_4_text['und'][0][safe_value];

    $section4_image5 = file_create_url($node->field_section_4_image_5['und'][0]['uri']);
    $section4_image5title = $node->field_section_4_image_5_title['und'][0][safe_value];
    $section4_image5text = $node->field_section_4_image_5_text['und'][0][safe_value];
?>

<div class="wrapperOurStory">
    <div class="container ">
        <div class="row">
            <div class="col-md-12 ">
                <h1>THE ZAZEN BEAR STORY</h1>
            </div>
        </div>
    </div>
</div>

<div class="wrapperOurStory-1">
    <div class="col-md-8" style="background-image:url('<?php print $section1_image1; ?>') ">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h1>Our story is your story</h1>
                <p><?php print $section1_text1; ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-4 emptyText" style="background-image:url('<?php print $section1_image2; ?>') "></div>
</div>

<div class="wrapperOurStory-2">
    <div class="col-md-12" style="background-image:url('<?php print $section2_image; ?>') ">
        <div class="row">
            <div class="col-md-2 col-md-offset-8">
                <h1><?php print $section2_title; ?></h1>
                <p><?php print $section2_imagetext; ?>  </p>
            </div>
        </div>
    </div>
</div>

<div class="wrapperOurStory-3">
    <div class="col-md-8" style="background-image:url('<?php print $section3_image1; ?>') ">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h1><?php print $section3_title1; ?></h1>
                <p><?php print $section3_textforimage1; ?>  </p>
            </div>
        </div>
    </div>
    <div class="col-md-4 emptyText" style="background-image:url('<?php print $section3_image2; ?>') "></div>
</div>

<div class="container simpleDisplay">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-5 doubleBorder">
                    <div class="doubleBorder">
                        <h1><?php print $section4_title1; ?></h1>
                        <p><?php print $section4_text1; ?> </p>
                    </div>

                </div>
                <div class="col-md-5 col-md-offset-1">
                    <img src="<?php print $section4_image1; ?>" alt="">

                    <h1><?php print $section4_image1title; ?></h1>
                    <p><?php print $section4_image1text; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <img src="<?php print $section4_image3; ?>" class="reziseImg" alt="">

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h1><?php print $section4_image3title; ?></h1>
                            <p><?php print $section4_image3text; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 lightweigth">
            <img src="<?php print $section4_image2; ?>" alt="">
            <h1><?php print $section4_image2title; ?></h1>
            <p><?php print $section4_image2text; ?> </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 zenLayers">

            <img src="<?php print $section4_image4; ?>" alt="">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1><?php print $section4_image4title; ?></h1>
                    <p><?php print $section4_image4text; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="<?php print $section4_image5; ?>" alt="">

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1><?php print $section4_image5title; ?></h1>
                    <p><?php print $section4_image5text; ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 nothingExplain">
            <img src="/sites/all/themes/zazenbear/images/our-story-img-12.jpg" alt="our story">
            <!--                <h1>nothing to explain</h1>-->
        </div>
    </div>
</div>

 

