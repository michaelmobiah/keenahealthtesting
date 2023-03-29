<?php
// Generate a random number for getting a unique ID for a pattern
$number = rand();
?>

<svg class="border" width="2560" height="60" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2560 60" aria-hidden="true">
    <defs>
        <pattern id="pattern-splashing-<?php echo esc_attr( $number ); ?>" x="0" y="0" width="840" height="60" patternUnits="userSpaceOnUse">
            <path d="M797.5,9.6c-26.5,0-13.3,48.4-35.8,48.4c-18.2,0-16-32.7-28.9-32.7c-12.9,0-11.7,23.1-24.8,23.1
			c-14.1,0-11.3-32.1-30.4-32.1C658.4,16.3,663,45,649.5,45c-13.5,0-13.8-23.2-23.4-23.2c-9.6,0-13.2,16.4-23.4,16.4
			c-10.1,0-14.9-29.7-29.6-29.7c-14.6,0-15.5,33.7-29.6,33.7c-14.1,0-20.8-16.9-36.6-16.9c-15.8,0-14.6,18-45.6,18
			c-31,0-36.1-43.3-63.1-43.3c-27,0-32.8,40-47,40c-13.8,0-17.6-27.6-27.8-27.6s-11.3,13.5-30.4,13.5c-17.1,0-18.6,31.5-31.5,31.5
			c-12.9,0-14.6-26.2-29.8-26.2c-15.2,0-23.6,18.9-32.1,18.9c-6.2,0-7.9-13.5-23.1-13.5c-15.2,0-16.3-24.2-32.1-24.2
			c-16.3,0-22.7,32.1-32.3,32.1c-9.6,0-13.9-8.4-27.4-8.4c-13.5,0-13.9,8.4-25.1,8.4c-11.3,0-19.1-16.9-32.7-16.9
			c-10.1,0-17.6,9.6-26.9,9.6V60h840V37.1C817.5,37.1,820.5,9.6,797.5,9.6z"/>
        </pattern>
    </defs>

    <rect x="0" y="0" width="100%" height="60" fill="url(#pattern-splashing-<?php echo esc_attr( $number ); ?>)"/>
</svg>