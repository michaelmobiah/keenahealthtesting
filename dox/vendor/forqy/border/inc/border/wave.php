<?php
// Generate a random number for getting a unique ID for a pattern
$number = rand();
?>

<svg class="border" width="2560" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2560 30" aria-hidden="true">
    <defs>
        <pattern id="pattern-wave-<?php echo esc_attr( $number ); ?>" x="0" y="0" width="2560" height="30" patternUnits="userSpaceOnUse">
            <path class="shape"
                  d="M0,20v10h960C800,30,480,0,320,0C240,0,120,10,0,20z M1280,20c-120,10-240,10-320,10h1280 c-160,0-480-30-640-30C1520,0,1400,10,1280,20z M2240,30h320V20C2440,30,2320,30,2240,30z"/>
        </pattern>
    </defs>

    <rect x="0" y="0" width="100%" height="30" fill="url(#pattern-wave-<?php echo esc_attr( $number ); ?>)"/>
</svg>
