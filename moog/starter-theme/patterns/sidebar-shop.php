<?php
/**
 * Title: Theme Sidebar Shop
 * Slug: theme/sidebar-shop
 * Categories: sidebars
 */
?>

<!-- wp:ainoblocks/flexbox {"flexDirectionDesktop":"direction__col__d","flexDirectionTablet":"direction__col__t","flexDirectionMobile":"direction__col__m","className":"direction__row__t direction__row__m filters-container"} -->
<div class="wp-block-ainoblocks-flexbox direction__col__d direction__col__t direction__col__m nowrap__d nowrap_t nowrap_m justify__flexstart__d justify__flexstart__t justify__flexstart__m align-items__stretch__d align-items__stretch__t align-itms__stretch__m align-cont__stretch__d align-cont__stretch__t align-cont__stretch__m shadow-none direction__row__t direction__row__m filters-container"><!-- wp:ainoblocks/flex-item {"paddingTop":11,"paddingBottom":7} -->
<div class="wp-block-ainoblocks-flex-item auto pt__11 pb__7"><!-- wp:woocommerce/product-categories {"hasEmpty":true} /--></div>
<!-- /wp:ainoblocks/flex-item -->

<!-- wp:separator {"backgroundColor":"border-secondary","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-border-secondary-color has-alpha-channel-opacity has-border-secondary-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:ainoblocks/flex-item {"paddingTop":5} -->
<div class="wp-block-ainoblocks-flex-item auto pt__5"><!-- wp:woocommerce/filter-wrapper {"filterType":"active-filters","heading":"Active filters"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3,"fontSize":"text-xs"} -->
<h3 class="has-text-xs-font-size">Active filters</h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/active-filters {"displayStyle":"chips","heading":""} -->
<div class="wp-block-woocommerce-active-filters is-loading" data-display-style="chips" data-heading="" data-heading-level="3"><span aria-hidden="true" class="wc-block-active-product-filters__placeholder"></span></div>
<!-- /wp:woocommerce/active-filters --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:ainoblocks/flex-item -->

<!-- wp:ainoblocks/flex-item {"paddingTop":5,"paddingBottom":7} -->
<div class="wp-block-ainoblocks-flex-item auto pt__5 pb__7"><!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by Color"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3,"fontSize":"text-xs"} -->
<h3 class="has-text-xs-font-size">Filter by Color</h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/attribute-filter {"attributeId":1,"heading":""} -->
<div class="wp-block-woocommerce-attribute-filter is-loading" data-attribute-id="1" data-show-counts="true" data-query-type="or" data-heading="" data-heading-level="3"><span aria-hidden="true" class="wc-block-product-attribute-filter__placeholder"></span></div>
<!-- /wp:woocommerce/attribute-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:ainoblocks/flex-item -->

<!-- wp:separator {"backgroundColor":"border-secondary","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-border-secondary-color has-alpha-channel-opacity has-border-secondary-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:ainoblocks/flex-item {"paddingTop":5,"paddingBottom":7} -->
<div class="wp-block-ainoblocks-flex-item auto pt__5 pb__7"><!-- wp:woocommerce/filter-wrapper {"filterType":"stock-filter","heading":"Filter by stock status"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3,"fontSize":"text-xs"} -->
<h3 class="has-text-xs-font-size">Filter by stock status</h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/stock-filter {"heading":""} -->
<div class="wp-block-woocommerce-stock-filter is-loading" data-show-counts="true" data-heading="" data-heading-level="3"><span aria-hidden="true" class="wc-block-product-stock-filter__placeholder"></span></div>
<!-- /wp:woocommerce/stock-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:ainoblocks/flex-item -->

<!-- wp:separator {"backgroundColor":"border-secondary","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-border-secondary-color has-alpha-channel-opacity has-border-secondary-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:ainoblocks/flex-item {"paddingTop":5,"paddingBottom":7} -->
<div class="wp-block-ainoblocks-flex-item auto pt__5 pb__7"><!-- wp:woocommerce/filter-wrapper {"filterType":"price-filter","heading":"Filter by price"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3,"fontSize":"text-xs"} -->
<h3 class="has-text-xs-font-size">Filter by price</h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/price-filter {"heading":""} -->
<div class="wp-block-woocommerce-price-filter is-loading" data-showinputfields="true" data-showfilterbutton="false" data-heading="" data-heading-level="3"><span aria-hidden="true" class="wc-block-product-categories__placeholder"></span></div>
<!-- /wp:woocommerce/price-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:ainoblocks/flex-item -->

<!-- wp:separator {"backgroundColor":"border-secondary","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-border-secondary-color has-alpha-channel-opacity has-border-secondary-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:ainoblocks/flex-item {"className":"form-rounded","paddingTop":5,"paddingBottom":7} -->
<div class="wp-block-ainoblocks-flex-item auto form-rounded pt__5 pb__7"><!-- wp:heading {"level":3,"fontSize":"text-xs"} -->
<h3 class="has-text-xs-font-size">Search</h3>
<!-- /wp:heading -->

<!-- wp:search {"label":"Search","placeholder":"Search products…","buttonText":"Search","query":{"post_type":"product"}} /--></div>
<!-- /wp:ainoblocks/flex-item --></div>
<!-- /wp:ainoblocks/flexbox -->