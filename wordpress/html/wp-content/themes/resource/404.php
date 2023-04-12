<!DOCTYPE html>
<html lang="en">
<head>
    <?php get_template_part('head'); ?>

    <?php $c=25; ?>
    <style>
        /* I used Amit Sheen's idea in this code
            https://css-tricks.com/how-to-map-mouse-position-in-css/ */

        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0 auto;
            padding: 0;
        }

        body {
            background-color: #333;
            cursor: none;
        }

        main {
            display: grid;
            grid-template: repeat(<?php echo $c ?>, 1fr) / repeat(<?php echo $c ?>, 1fr);
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .cell {
            border: 0px solid gray;
            height: 100%;
            width: 100%;
            z-index: 2;
        }

        <?php
            for ($x=0; $x < $c; $x++) {
        ?>
            .cell:nth-child(<?php echo $c . 'n' ?>+<?php echo $x+1 ?>):hover ~ .content {
                --positionX: <?php echo $x ?>;
            }

            .cell:nth-child(n+<?php echo $c*$x+1 ?>):nth-child(-n+<?php echo $c*($x+1) ?>):hover ~ .content {
                --positionY: <?php echo $x ?>;
            }
        <?php
            }
        ?>

        .content {
            align-items: center;
            bottom: 0;
            display: flex;
            flex-flow: column;
            justify-content: center;
            left: 0;
            overflow: hidden;
            position: absolute;
            right: 0;
            row-gap: 50px;
            top: 0;
        }

        main .overlay {
            background: #111;
            bottom: 0;
            filter: blur(2px);
            left: 0;
            opacity: .99;
            position: absolute;
            right: 0;
            top: 0;
        }

        main:hover .overlay {
            --X: calc(var(--positionX) * 100%/<?php echo $c ?> + 100%/<?php echo $c ?>/2);
            --Y: calc(var(--positionY) * 100%/<?php echo $c ?> + 100%/<?php echo $c ?>/2);

            background: radial-gradient(circle at var(--X) var(--Y), rgb(245, 245, 245, .1) 40px, rgb(51, 51, 51, .9) 70px, #111 80px);
        }

        .plate {
            background: #333;
            height: 100px;
            position: relative;
            width: 180px;
        }

        .content span {
            color: lightgray;
            filter: drop-shadow(0 0 1px whitesmoke);
            font-family: sans-serif;
            font-size: 100px;
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .plate span {
            left: 50%;
            top: 50%;
        }

        .button {
            background: green;
            height: 80px;
            position: relative;
            width: 200px;
        }

        .button span {
            font-size: 50px;
        }
    </style>
</head>
<body>
    <main>
        <?php
            for ($x=0; $x < $c; $x++) {
                for ($y=0; $y < $c; $y++) {
        ?>
            <div class="cell"></div>
        <?php
                }
            }
        ?>

        <div class="content">
            <div class="plate">
                <span>404</span>
            </div>
            <!-- <a class="button" href="/">
                <span>HOME</span>
            </a> -->
            <div class="overlay"></div>
        </div>
    </main>

    <?php wp_footer(); ?>
</body>
</html>