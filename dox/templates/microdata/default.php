<?php

/*

Microdata Default Template

*/

?>

<div class="fy-microdata fy-microdata-default" itemscope itemtype="https://schema.org/WebSite">

    <meta itemprop="name" content="<?php echo get_bloginfo( 'name' ); ?>">
    <meta itemprop="url" content="<?php echo esc_url( home_url( '/' ) ); ?>">

    <div itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction">
        <meta itemprop="target" content="<?php echo esc_url( home_url( '/?s=' ) ); ?>{s}">
        <meta itemprop="query-input" content="required name=s">
    </div>

    <meta itemprop="accessibilityControl" content="fullKeyboardControl">
    <meta itemprop="accessibilityControl" content="fullMouseControl">
    <meta itemprop="accessibilityHazard" content="noFlashingHazard">
    <meta itemprop="accessibilityHazard" content="noMotionSimulationHazard">
    <meta itemprop="accessibilityHazard" content="noSoundHazard">
    <meta itemprop="accessibilityAPI" content="ARIA">

</div>
