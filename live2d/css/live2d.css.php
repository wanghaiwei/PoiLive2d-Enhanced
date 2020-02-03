<?php
header("Content-type: text/css; charset: UTF-8");

//make get_option effective
require_once('../../../../../wp-config.php');
$mainColor = hex2rgb( get_option( 'live2d_maincolor' ) );

function hex2rgb( $hexColor ) {
	$color = str_replace( '#', '', $hexColor );
	if ( strlen( $color ) > 3 ) {
		$rgb = (string) ( hexdec( substr( $color, 0, 2 ) ) ) . ',' . (string) ( hexdec( substr( $color, 2, 2 ) ) ) . ',' . (string) ( hexdec( substr( $color, 4, 2 ) ) );
	} else {
		$color = $hexColor;
		$r     = substr( $color, 0, 1 ) . substr( $color, 0, 1 );
		$g   = substr( $color, 1, 1 ) . substr( $color, 1, 1 );
		$b   = substr( $color, 2, 1 ) . substr( $color, 2, 1 );
		$rgb = (string) hexdec( $r ) . ',' . (string) hexdec( $g ) . ',' . (string) hexdec( $b );
	}
	return $rgb;
}
?>

.message {
    border-color: rgba(<?php echo $mainColor ?>, .4);
    background-color: rgba(<?php echo $mainColor ?>, .2);
    box-shadow: 0 3px 15px 2px rgba(<?php echo $mainColor ?>, .4);
    color: rgba(<?php echo $mainColor ?>, .6);
}

.l2d-action, .show-button {
    border-color: rgba(<?php echo $mainColor ?>, .4);
    background: rgba(<?php echo $mainColor ?>, .2);
    box-shadow: 0 3px 15px 2px rgba(<?php echo $mainColor ?>, .4);
    color: rgba(<?php echo $mainColor ?>, .6);
}

.l2d-action:hover, .show-button:hover {
    border-color: rgba(<?php echo $mainColor ?>, .6);
    background: rgba(<?php echo $mainColor ?>, .4);
    color: rgba(<?php echo $mainColor ?>, .8);
}

#landlord {
    user-select: none;
    position: fixed;
<?php if ( get_option( 'live2d_position' ) == "checked" ): ?>
    left: 30px;
<?php else: ?>
    right: 30px;
<?php endif; ?>
    bottom: 0;
    width: 280px;
    height: 250px;
    z-index: 10000;
    font-size: 0;
    transition: all .3s ease-in-out;
}

#live2d {
    position: relative;
}

.message {
    opacity: 0;
    width: 300px;
    height: auto;
    margin: auto;
    padding: 7px;
    bottom: 101%;
    left: -10px;
    text-align: center;
    border: 1px solid rgba(132, 132, 132, .4);
    border-radius: 12px;
    background-color: rgba(132, 132, 132, .2);
    box-shadow: 0 3px 15px 2px rgba(132, 132, 132, .4);
    font-size: 13px;
    font-weight: 400;
    text-overflow: ellipsis;
    text-transform: uppercase;
    overflow: hidden;
    position: absolute;
    animation-delay: 5s;
    animation-duration: 50s;
    animation-iteration-count: infinite;
    animation-name: shake;
    animation-timing-function: ease-in-out;
    color: rgba(132, 132, 132, .6);
    cursor: default;
}

.message a {
    text-decoration: none;
    color: orange;
}

.l2d-menu {
    position: absolute;
    top: 10px;
    right: 30px;
    width: 60px;
    height: 230px;
    text-align: center;
    display: none;
}

.show-button {
    position: fixed;
    display: none;
    overflow: hidden;
    bottom: 10px;
<?php if ( get_option( 'live2d_position' ) == "checked" ): ?>
    left: 30px;
<?php else: ?>
    right: 30px;
<?php endif; ?>
    width: 60px;
    height: 20px;
    border: 1px solid rgba(0, 0, 0, .4);
    border-radius: 12px;
    background: rgba(0, 0, 0, .2);
    box-shadow: 0 3px 15px 2px rgba(0, 0, 0, .4);
    text-align: center;
    font-size: 12px;
    cursor: pointer;
    z-index: 99;
}

.show-button:hover {
    border: 1px solid #000000;
    background: #f4f6f8;
}

.l2d-action {
    list-style: none;
    top: 10px;
    right: 0;
    margin-bottom: 5px;
    overflow: hidden;
    width: 60px;
    height: 20px;
    border: 1px solid rgba(0, 0, 0, .4);
    border-radius: 12px;
    background: rgba(0, 0, 0, .2);
    box-shadow: 0 3px 15px 2px rgba(0, 0, 0, .4);
    text-align: center;
    font-size: 12px;
    cursor: pointer;
}

.l2d-action:hover {
    border: 1px solid #000000;
    background: #f4f6f8;
}

.l2d-cat {
    margin: 0;
    padding: 0;
    font-size: 15px;
    font-family: Century Gothic, Microsoft YaHei, serif;
}

.l2d-h2cat {
    margin: 0;
    padding: 0;
    text-align: left;
    text-indent: 2em;
    line-height: 5px;
    font-size: 14px;
    font-family: Century Gothic, Microsoft YaHei, serif;
}

.l2d-h3cat {
    margin: 0;
    padding: 0;
    text-align: left;
    text-indent: 4em;
    line-height: 3px;
    font-size: 12px;
    font-family: Century Gothic, Microsoft YaHei, serif;
}

@media (max-width: 860px) {
    #landlord {
        display: none;
    }
}

@keyframes shake {
    2% {
        transform: translate(1px, -1.5px) rotate(-0.5deg);
    }

    4% {
        transform: translate(1px, 2px) rotate(1.5deg);
    }

    6% {
        transform: translate(2px, 2px) rotate(1.5deg);
    }

    8% {
        transform: translate(3px, 2px) rotate(0.5deg);
    }

    10% {
        transform: translate(1px, 3px) rotate(0.5deg);
    }

    12% {
        transform: translate(2px, 2px) rotate(0.5deg);
    }

    14% {
        transform: translate(1px, 1px) rotate(0.5deg);
    }

    16% {
        transform: translate(-1.5px, -0.5px) rotate(1.5deg);
    }

    18% {
        transform: translate(1px, 1px) rotate(1.5deg);
    }

    20% {
        transform: translate(3px, 3px) rotate(1.5deg);
    }

    22% {
        transform: translate(1px, -1.5px) rotate(1.5deg);
    }

    24% {
        transform: translate(-1.5px, 2px) rotate(-0.5deg);
    }

    26% {
        transform: translate(2px, 1px) rotate(1.5deg);
    }

    28% {
        transform: translate(-0.5px, -0.5px) rotate(-0.5deg);
    }

    30% {
        transform: translate(2px, -0.5px) rotate(-0.5deg);
    }

    32% {
        transform: translate(3px, -1.5px) rotate(1.5deg);
    }

    34% {
        transform: translate(3px, 3px) rotate(-0.5deg);
    }

    36% {
        transform: translate(1px, -1.5px) rotate(0.5deg);
    }

    38% {
        transform: translate(3px, -0.5px) rotate(-0.5deg);
    }

    40% {
        transform: translate(-0.5px, 3px) rotate(0.5deg);
    }

    42% {
        transform: translate(-1.5px, 3px) rotate(0.5deg);
    }

    44% {
        transform: translate(-1.5px, 2px) rotate(0.5deg);
    }

    46% {
        transform: translate(2px, -0.5px) rotate(-0.5deg);
    }

    48% {
        transform: translate(3px, -0.5px) rotate(0.5deg);
    }

    50% {
        transform: translate(-1.5px, 2px) rotate(0.5deg);
    }

    52% {
        transform: translate(-0.5px, 2px) rotate(0.5deg);
    }

    54% {
        transform: translate(-1.5px, 2px) rotate(0.5deg);
    }

    56% {
        transform: translate(1px, 3px) rotate(1.5deg);
    }

    58% {
        transform: translate(3px, 3px) rotate(0.5deg);
    }

    60% {
        transform: translate(3px, -1.5px) rotate(1.5deg);
    }

    62% {
        transform: translate(-1.5px, 1px) rotate(1.5deg);
    }

    64% {
        transform: translate(-1.5px, 2px) rotate(1.5deg);
    }

    66% {
        transform: translate(1px, 3px) rotate(1.5deg);
    }

    68% {
        transform: translate(3px, -1.5px) rotate(1.5deg);
    }

    70% {
        transform: translate(3px, 3px) rotate(0.5deg);
    }

    72% {
        transform: translate(-0.5px, -1.5px) rotate(1.5deg);
    }

    74% {
        transform: translate(-1.5px, 3px) rotate(1.5deg);
    }

    76% {
        transform: translate(-1.5px, 3px) rotate(1.5deg);
    }

    78% {
        transform: translate(-1.5px, 3px) rotate(0.5deg);
    }

    80% {
        transform: translate(-1.5px, 1px) rotate(-0.5deg);
    }

    82% {
        transform: translate(-1.5px, 1px) rotate(-0.5deg);
    }

    84% {
        transform: translate(-0.5px, 1px) rotate(1.5deg);
    }

    86% {
        transform: translate(3px, 2px) rotate(0.5deg);
    }

    88% {
        transform: translate(-1.5px, 1px) rotate(1.5deg);
    }

    90% {
        transform: translate(-1.5px, -0.5px) rotate(-0.5deg);
    }

    92% {
        transform: translate(-1.5px, -1.5px) rotate(1.5deg);
    }

    94% {
        transform: translate(1px, 1px) rotate(-0.5deg);
    }

    96% {
        transform: translate(3px, -0.5px) rotate(-0.5deg);
    }

    98% {
        transform: translate(-1.5px, -1.5px) rotate(-0.5deg);
    }

    0%, 100% {
        transform: translate(0, 0) rotate(0);
    }
}