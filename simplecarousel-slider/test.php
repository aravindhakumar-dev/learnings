?>
<div class="bestproductcontainer">
    <?php
    $args = array(
        'post_type' => 'product',
        'post__in' => array(196)
    );
    $loop = new WP_Query($args);
    ?>
    <div class="bestsectionprd">
        <?php
        while ($loop->have_posts()) : $loop->the_post();
            global $product;
            $feature_image_2 = get_field('feature_image_2');
        ?>
            <div class="bestprdcard">
                <a href="<?php echo get_permalink(); ?>">
                    <?php if ($feature_image_2) { ?>
                        <img class="hover-img" src="<?php echo esc_url($feature_image_2['url']); ?>" alt="<?php echo esc_attr($feature_image_2['alt']); ?>" />
                    <?php } ?>
                    <div class="prdtitle"><?php echo get_the_title(); ?></div>
                </a>
                <?php $product_shortline = get_field('product_shortline');
                if ($product_shortline) {
                    echo '<div class="product-shortline">';
                    echo '<p>' . $product_shortline . '</p>';
                    echo '</div>';
                }
                ?>
                <div class="prdprice">
                    <?php echo $product->get_price_html(); ?>
                </div>
                <div class="cartbtn">
                    <?php
                    echo '<form class="cart" method="post" enctype="multipart/form-data"><input type="hidden" name="add-to-cart" value="';
                    echo esc_attr($product->id);
                    echo '"><button type="submit">';
                    echo $product->single_add_to_cart_text();
                    echo '</button> </form>'; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>

    <?php
    $args = array(
        'post_type' => 'product',
        'post__in' => array(923)
    );
    $loop = new WP_Query($args);
    ?>
    <div class="bestsectionprd">
        <?php
        while ($loop->have_posts()) : $loop->the_post();
            global $product;
            $feature_image_2 = get_field('feature_image_2');
        ?>
            <div class="bestprdcard">
                <a href="<?php echo get_permalink(); ?>">
                    <?php if ($feature_image_2) { ?>
                        <img class="hover-img" src="<?php echo esc_url($feature_image_2['url']); ?>" alt="<?php echo esc_attr($feature_image_2['alt']); ?>" />
                    <?php } ?>
                    <div class="prdtitle"><?php echo get_the_title(); ?></div>
                </a>
                <?php $product_shortline = get_field('product_shortline');
                if ($product_shortline) {
                    echo '<div class="product-shortline">';
                    echo '<p>' . $product_shortline . '</p>';
                    echo '</div>';
                }
                ?>
                <div class="prdprice">
                    <?php echo $product->get_price_html(); ?>
                </div>
                <div class="cartbtn">
                    <?php
                    echo '<form class="cart" method="post" enctype="multipart/form-data"><input type="hidden" name="add-to-cart" value="';
                    echo esc_attr($product->id);
                    echo '"><button type="submit">';
                    echo $product->single_add_to_cart_text();
                    echo '</button> </form>'; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>

    <?php
    $args = array(
        'post_type' => 'product',
        'post__in' => array(252)
    );
    $loop = new WP_Query($args);
    ?>
    <div class="bestsectionprd">
        <?php
        while ($loop->have_posts()) : $loop->the_post();
            global $product;
            $feature_image_2 = get_field('feature_image_2');
        ?>
            <div class="bestprdcard">
                <a href="<?php echo get_permalink(); ?>">
                    <?php if ($feature_image_2) { ?>
                        <img class="hover-img" src="<?php echo esc_url($feature_image_2['url']); ?>" alt="<?php echo esc_attr($feature_image_2['alt']); ?>" />
                    <?php } ?>
                    <div class="prdtitle"><?php echo get_the_title(); ?></div>
                </a>
                <?php $product_shortline = get_field('product_shortline');
                if ($product_shortline) {
                    echo '<div class="product-shortline">';
                    echo '<p>' . $product_shortline . '</p>';
                    echo '</div>';
                }
                ?>
                <div class="prdprice">
                    <?php echo $product->get_price_html(); ?>
                </div>
                <div class="cartbtn">
                    <?php
                    echo '<form class="cart" method="post" enctype="multipart/form-data"><input type="hidden" name="add-to-cart" value="';
                    echo esc_attr($product->id);
                    echo '"><button type="submit">';
                    echo $product->single_add_to_cart_text();
                    echo '</button> </form>'; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>

    <?php
    $args = array(
        'post_type' => 'product',
        'post__in' => array(217)
    );
    $loop = new WP_Query($args);
    ?>
    <div class="bestprdcard">
        <a href="<?php echo get_permalink(); ?>">
            <?php if ($feature_image_2) { ?>
                <img class="hover-img" src="<?php echo esc_url($feature_image_2['url']); ?>" alt="<?php echo esc_attr($feature_image_2['alt']); ?>" />
            <?php } ?>
        </a>
        <div class="prdtitle"><?php echo get_the_title(); ?></div>
        <?php $product_shortline = get_field('product_shortline');
        if ($product_shortline) {
            echo '<div class="product-shortline">';
            echo '<p>' . $product_shortline . '</p>';
            echo '</div>';
        }
        ?>
        <div class="prdprice">
            <?php echo $product->get_price_html(); ?>
        </div>
        <div class="cartbtn">
            <?php
            echo '<form class="cart" method="post" enctype="multipart/form-data"><input type="hidden" name="add-to-cart" value="';
            echo esc_attr($product->id);
            echo '"><button type="submit">';
            echo $product->single_add_to_cart_text();
            echo '</button> </form>'; ?>
        </div>
    </div>

    <?php wp_reset_postdata(); ?>

    <?php
    $args = array(
        'post_type' => 'product',
        'post__in' => array(895)
    );
    $loop = new WP_Query($args);
    ?>
    <div class="bestsectionprd">
        <?php
        while ($loop->have_posts()) : $loop->the_post();
            global $product;
            $feature_image_2 = get_field('feature_image_2');
        ?>
            <div class="bestprdcard">
                <a href="<?php echo get_permalink(); ?>">
                    <?php if ($feature_image_2) { ?>
                        <img class="hover-img" src="<?php echo esc_url($feature_image_2['url']); ?>" alt="<?php echo esc_attr($feature_image_2['alt']); ?>" />
                    <?php } ?>
                    <div class="prdtitle"><?php echo get_the_title(); ?></div>
                </a>
                <?php $product_shortline = get_field('product_shortline');
                if ($product_shortline) {
                    echo '<div class="product-shortline">';
                    echo '<p>' . $product_shortline . '</p>';
                    echo '</div>';
                }
                ?>
                <div class="prdprice">
                    <?php echo $product->get_price_html(); ?>
                </div>
                <div class="cartbtn">
                    <?php
                    echo '<form class="cart" method="post" enctype="multipart/form-data"><input type="hidden" name="add-to-cart" value="';
                    echo esc_attr($product->id);
                    echo '"><button type="submit">';
                    echo $product->single_add_to_cart_text();
                    echo '</button> </form>'; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>
</div>