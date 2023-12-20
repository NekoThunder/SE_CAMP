<!-- 
Author      : Phurphat Khumsuan[Netkung] 
ID          : 65160096
Workshop    : #3
-->

<html>

<head>

    <meta charset="utf-8">

</head>

<body>

    <div class="container">
        <?php $multi_x = 24; ?>

        <h1> ตารางสูตรคูณแม่ <?php echo $multi_x ?> </h1>

        <div class="multiply_x">
            <?php

            for ($i = 1; $i <= 24; $i++) {

                echo "{$multi_x} x {$i} = " . ($multi_x * $i) . "<br/>" . "<br/>";
            }

            ?>
        </div>
    </div>

    <div class="img"><img src="Netkung.jpg" alt="Netkung"></div>

    <div class="title">
        <p> workshop#3 </p>
    </div>

    <style>
        .container {

            display: flex;
            width: 100%;
            justify-content: center;
            flex-direction: column;
            align-items: center;

        }

        body {

            display: flex;
            height: 90vh;
            justify-content: center;
            background-color: black;

        }

        h1 {

            text-transform: uppercase;

            background-image: linear-gradient(-225deg,
                    #231557 0%,
                    #44107a 29%,
                    #ff1361 67%,
                    #fff800 100%);

            background-size: auto auto;
            background-clip: border-box;
            background-size: 200% auto;
            color: #fff;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textclip 2s linear infinite;
            font-size: 50px;

        }

        @keyframes textclip {
            to {

                background-position: -200%;

            }
        }

        .multiply_x {

            width: 200px;
            height: calc(100vh - 15rem);
            overflow-y: scroll;

            color: yellow;
            font-size: 1.5rem;
            font-family:sans-serif;
            font-weight: bold;
            text-align: center;
            text-transform: uppercase;

        }

        .img img {

            position: absolute;
            top: 30px;
            right: 30px;
            width: 100px;
            height: 100px;
            padding: 5px;
            border: 5px solid gray;
            border-radius: 50%;
            box-shadow: 0rem 0rem 4rem yellow;

        }

        .title p {

            position: absolute;
            color: #fff;
            font-size: larger;
            font-weight: bolder;
            bottom: 0;
            left: 1rem;

        }

        @media only screen and (max-width: 700px) {
            .container {

                width: 49.99999%;
                height: auto;

            }
        }
    </style>
</body>

</html>