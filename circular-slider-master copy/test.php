<?php
/* Template Name: Home */
get_header(); ?>
<style>
    .col-full {
        max-width: 100% !important;
        padding: 0px !important;
    }
</style>
<?php
while (have_posts()) :
    the_post();

    do_action('storefront_page_before');
    get_template_part('content', 'page');

    do_action('storefront_page_after');
endwhile; // End of the loop.
?>
<!--------------------------------------------------------------->
<div class="slider">
    <div class="circular-slider circular-slider-1">
        <div class="wrapper">
            <div class="controls">
                <div class="controls__left">
                    <div class="icon-wrapper"><i class="far fa-arrow-alt-circle-left"></i></div>
                </div>
                <div class="controls__right">
                    <div class="icon-wrapper"><i class="far fa-arrow-alt-circle-right"></i></div>
                </div>
                <div class="controls__autoplay controls__autoplay_running">
                    <div class="icon-wrapper">
                        <div class="pause"><i class="far fa-pause-circle"></i></div>
                        <div class="run"><i class="far fa-play-circle"></i></div>
                    </div>
                </div>
            </div>
            <?php
            $args = array(
                'number'     => $number,
                'orderby'    => 'slug',
                'order'      => 'ASC',
                'hide_empty' => $hide_empty,
                'include'    => $ids
            ); ?>
            <div class="slides-holder">
                <?php
                $product_categories = get_terms('product_cat', $args);
                $count = count($product_categories);
                if ($count > 0) {
                    foreach ($product_categories as $product_category) {
                        $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);
                        $thumbnail_url = wp_get_attachment_thumb_url($thumbnail_id);
                        echo '<div class="slides-holder__item">
                                        <a href="' . get_term_link($product_category) . '">
		                                <img src="' . $thumbnail_url . '" /> </a>
                           </div>';
                        break;
                    }
                }
                ?>
            </div>
            <div class="descriptions">
                <?php
                $product_categories = get_terms('product_cat', $args);
                $count = count($product_categories);
                if ($count > 0) {
                    foreach ($product_categories as $product_category) {
                        $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);
                        $thumbnail_url = wp_get_attachment_thumb_url($thumbnail_id);
                        echo '<div class="descriptions__item">
                                <h2>' . $product_category->name . '</h2>
                            </div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!---------------------Section: Best Selling products -------------------->
<section class="section horizontal">
    <div class="section__cards">
        <div class="section__card">
            <div class='prdcard' id="bstitle">
                <h3>
                    Best<br>
                    Selling<br>
                    Products
                </h3>
            </div>
        </div>
        <?php
        $part_terms = get_the_terms($post->ID, 'product_tag');
        if ($part_terms && !is_wp_error($part_terms)) {
            foreach ($part_terms as $term) {
            }
        }
        $part_args = array(
            'post_type' => 'product',
            'tax_query' => array(array(
                'taxonomy' => 'product_tag',
                'field' => 'slug',
                'terms' => 'best'
            ))
        ); ?>
        <?php
        $loop = new WP_Query($part_args);
        while ($loop->have_posts()) : $loop->the_post();
            global $product;
            //some handy woocommerce coding
            echo '<div class="section__card"><div class="prdcard"><a href="' . get_permalink() . '">' . woocommerce_get_product_thumbnail() . '<br /> ' . get_the_title() . '</a>'; ?>
            <table class="pricetb">
                <tr>
                    <td class="bstprice">
                        <?php echo $product->get_price_html(); ?>
                    </td>
                    <td class="bstcart">
                        <?php echo '<form class="cart" method="post" enctype="multipart/form-data"><input type="hidden" name="add-to-cart" value="';
                        echo esc_attr($product->id);
                        echo '"><button class="bstadd" type="submit">';
                        echo $product->single_add_to_cart_text();
                        echo '</button> </form>'; ?>
                    </td>
                </tr>
            </table>
            <?php
            echo '</div></div>'; ?><?php endwhile; ?>
    </div>
</section>
<?php wp_reset_postdata(); ?>
<!--------------------------------------------------------------->
<!-------------------- Section: Testimonial slider ----------------------->
<div class="testimonial">
    <?php echo do_shortcode('[rt-testimonial id="1166" title=""]') ?>
</div>

<!--------------------------------------------------------------->
<?php
get_footer();
