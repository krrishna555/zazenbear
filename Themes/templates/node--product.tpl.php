<script>
    jQuery(document).ready(function () {
        jQuery("#view").click(function () {
            jQuery('.lgboxVideo, .VideoFrame').css('display', 'block');
        });

        jQuery('a.close-video').click(function () {
            jQuery('.lgboxVideo, .VideoFrame').css('display', 'none');
            /* $(this).unbind("click"); ?autoplay=1*/
        });

        jQuery('.lg-left-a').click(function () {
            var src_img = jQuery(this).attr('data-image');
            jQuery('.lg-right-img').attr('src', src_img);
        });
    });
</script>

<div class="lgboxVideo"></div>
<div class="VideoFrame">
    <a href="javascript:void(0)" class="close-video">Close</a>

    <div class="lg-left">
        <?php
            global $base_url;
            $image_array_chunks = array_chunk($node->uc_product_image['und'], 1);
            echo '<ul id="lg-ul">';
            foreach ($image_array_chunks as $chunk) {
                foreach ($chunk as $scene) {
                    print '<li><a class="lg-left-a" href="javascript:void(0)" data-image=' . file_create_url($scene['uri']) . '> <img height="50" width="50" class="lg-left-img" src=' . file_create_url($scene['uri']) . ' /> </a></li>';
                }
            }
            echo '</ul>';
        ?>
    </div>

    <div class="lg-right">
        <img src="<?php print file_create_url($node->uc_product_image['und'][0]['uri']); ?>" height="400" width="450" class="lg-right-img"/>
    </div>
</div>

<div class="wrapperProductItem">
    <div id="imageProduct" class="col-md-6 col-sm-6">
        <script type="text/javascript">
            CloudZoom.quickStart();
        </script>
        <div class="row">
            <div class="col-md-6 col-md-offset-3" id="imageBox">
                <img src="<?php print file_create_url($node->uc_product_image['und'][0]['uri']); ?>" data-cloudzoom="zoomImage: '<?php print file_create_url($node->uc_product_image['und'][0]['uri']); ?>'" id="product_img" class="img-responsive image-product cloudzoom"/>

            </div>
        </div>
        <?php
            $image_array_chunks = array_chunk($node->uc_product_image['und'], 1);
        ?>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 bordered" style="width: 363px;
				margin-left: auto;
				margin-right: auto;
				float: none;
				padding-left: 0;
				padding-right: 0;">
                <div id="rollover" class="rollover-to-zoom">Rollover to zoom</div>
                <div id="view" class="view-full">View fullscreen</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div id="wrapperThumbnailImages">
                    <?php
                        $image_array_chunks = array_chunk($node->uc_product_image['und'], 1);

                        foreach ($image_array_chunks as $chunk) {
                            foreach ($chunk as $scene) {
                                //print "<div class='changeImage'><img class='img-responsive' src='".file_create_url($scene['uri'])."' alt=''></div>";
                                print '<div class="changeImage"><a href="#" data-image=' . file_create_url($scene['uri']) . ' data-zoom-image=' . file_create_url($scene['uri']) . '> <img class="img-responsive" src=' . file_create_url($scene['uri']) . ' /> </a></div>';
                            }
                        }
                    ?>
                </div>
            </div>
        </div>

    </div>
    <div id="detailProduct" class="col-md-6 col-sm-6">
        <div class="col-md-10 col-md-offset-1">
            <h1>
                <?php print $title; // Title ?>
            </h1>

            <div id="priceProduct"><?php print uc_currency_format($node->sell_price); // price ?>

                <?php
                    echo "<br/>";
                    if(!empty($node->field_material_type['und']['0']['value'])) {
                        $material_type_array = array();
                        foreach ($node->field_material_type['und'] as $v) {
                            array_push($material_type_array, $v['value']);
                        }
                        echo "Material Type: " . implode(", ", $material_type_array);
                        echo "<br/>";
                    }

                    if (!empty($node->field_finish['und']['0']['value'])) {
                        print 'Finish : ' . $node->field_finish['und']['0']['value'];
                        echo "<br/>";
                    }

                    if (!empty($node->field_color['und']['0']['value'])) {
                        print 'Color : ' . $node->field_color['und']['0']['value'];
                        echo "<br/>";
                    }

                    if (!empty($node->field_gemstone['und']['0']['value'])) {
                        $gemstone_array = array();
                        foreach ($node->field_gemstone['und'] as $v) {
                            array_push($gemstone_array, $v['value']);
                        }
                        echo "Gemstone : " . implode(", ", $gemstone_array);
                        echo "<br/>";
                    }

                    if ($node->field_multiple_size['und']['0']['value'] == 'Yes') {
                        $name = 'product_multiple_size';
                        $myvoc = taxonomy_vocabulary_machine_name_load($name);
                        $tree = taxonomy_get_tree($myvoc->vid);
                        echo "Dimension : <select name='dimension'>";
                        foreach ($tree as $term) {
                            echo "<option>" . $term->name . "</option>";
                        }
                        echo "</select>";
                    }
                    else {
                        if (!empty($node->field_dimensions['und']['0']['value'])) {
                            print 'Dimension : ' . $node->field_dimensions['und']['0']['value'];
                        }
                    }

                    print "<br/>Product SKU : " . $node->model . "<br/>";
                ?>
            </div>
            <?php
                $form_value = drupal_get_form('uc_product_add_to_cart_form_' . $node->nid, $node); // size image to buy
                print drupal_render($form_value);  // submit button
            ?>
            <!-- <div id="wishList"><a href="#">SAVE TO WISH LIST</a></div> -->
            <div id="descriptionProduct">
                <div id="atStore">
                    <img src="/sites/all/themes/zazenbear/images/bearAtStore.jpg">
                    <p>Also available for purchase at our Soho store</p>
                </div>
                <?php print $node->body['und'][0]['value'] // description ?>

                <div id="wrapperTag">
                    <?php
                        $tagname = array();
                        foreach ($node->field_product_tags[und] as $tags) {
                            $tagname[] = $tags[taxonomy_term]->name;
                        }

                        foreach ($tagname as $t) {
                            echo '<span>' . $t . '</span>';
                        }
                    ?>
                </div>
<!--                <p class="shippingInfo"><a href="#">Shipping Information | Return Policy</a></p>-->
            </div>

            <div id="socialMediaWrapper">
                <div class="shareTheZen">SHARE THE ZEN :</div>
                <div class="col-sm-8">
                    <a target="_blank" href="https://www.facebook.com/zazenbear"><img src="<?php echo $base_url; ?>/sites/all/themes/zazenbear/images/facebook-icon.png"></a>
                    <a target="_blank" href="https://twitter.com/ZazenBear"><img src="<?php echo $base_url; ?>/sites/all/themes/zazenbear/images/twitter-icon.png"></a>
                    <a target="_blank" href="https://instagram.com/zazenbear/"><img src="<?php echo $base_url; ?>/sites/all/themes/zazenbear/images/instagram-icon.png"></a>
                    <a target="_blank" href="https://www.pinterest.com/ZazenBear/"><img src="<?php echo $base_url; ?>/sites/all/themes/zazenbear/images/pinterest-icon.png"></a>
<!--                    <a target="_blank" href="#"><img src="--><?php //echo $base_url; ?><!--/sites/all/themes/zazenbear/images/plus-icon.png"></a>-->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end related products -->
<!--  <pre>
<?php //print_r($node); ?>
</pre>  -->
