<html>

<head>
    <title>Pasco County Animal Services</title>
    <style>
        /* CSS Resets */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-color: lightgray;
        }

        /* Header Padding */
        #header {
            padding: 10px;
            background-color: darkgrey;
        }

        /* Hero Image */
        #main img {
            filter: blur(2.5px);
            max-height: 500px;
            /* Crop the image if it gets resized */
            object-fit: cover;
        }

        .container {
            position: relative;
            text-align: center;
            color: white;
        }

        /* Box over Hero Image */
        .box {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: rgba(0, 0, 0, 0.6);
        }

        /* Greeting over Hero Image */
        .greeting {
            /* Yellow-Orange color gradient over text */
            background: -webkit-linear-gradient(#ff9a00, #af6e00);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 3em;
            font-weight: bold;
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* About Us over Hero image */
        .about-us {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            font-size: 1em;
        }

        /* 3-Part Image Row (Cats/Dogs/Other) */
        .row {
            display: flex;
            flex-wrap: wrap;
            padding: 0 4px;
            padding-top: 10px;
            max-height: 400px;
        }

        /* 3-Part Image Column (Cats/Dogs/Other) */
        .column {
            flex: 33.33%;
            max-width: 33.33%;
            padding: 0 4px;
        }

        /* 3-Part Image Card (Overlay over image) */
        .card {
            position: relative;
            width: 100%;
        }

        .card img {
            width: 100%;
            min-height: 400px;
        }

        /* 3-Part Image Card Text (Overlay over image) */
        .imgOverlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            color: white;
            background-color: rgba(0, 0, 0, 0.6);
        }

        /* On hover make background-color darker */
        .imgOverlay:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .imgOverlay h2 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 2em;
            font-weight: bold;
        }

        .imgOverlay p {
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 1em;
        }
    </style>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <?php include 'components/header.php'; ?>


    <!-- Navigation -->
    <?php include 'components/nav.php'; ?>

    <!-- Main Content -->
    <div id="main">
        <!-- Hero Image -->
        <div class="container">

            <img src="images/pcas_hero_optimized.jpg" alt="Pasco County Animal Services Hero Image" width="100%"
                height="auto">
            <div class="box">
                <!-- Greeting over Hero Image -->
                <h1 class="greeting">Welcome Home!</h1>

                <!-- About Us -->
                <p class="about-us">Here at Pasco County Animal Services, we are dedicated to the health and well-being
                    of all animals in our
                    community.<br /><br />We are a no-kill shelter, and we are committed to finding loving homes for all
                    of our animals. We
                    are also committed to educating the public about the importance of spaying and neutering their pets,
                    and we
                    offer low-cost spay and neuter services to the public. We also offer low-cost microchipping services
                    to the
                    public. We rely on donations from the public to continue our mission.<br /><br />Please consider <a
                        href="https://www.pascocountyfl.net/222/Donations">donating</a> to PCAS today!</p>
            </div>
        </div>

        <!-- Select Categories -->
        <div class="row">
            <div class="column">
                <a href="list.php?type=dog">
                    <div class="card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/1/18/Dog_Breeds.jpg" alt="Dogs">
                        <div class="imgOverlay">
                            <h2>Dogs</h2>
                            <p>View our dogs</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <a href="list.php?type=cat">
                    <div class="card">
                        <img src="https://i.natgeofe.com/n/548467d8-c5f1-4551-9f58-6817a8d2c45e/NationalGeographic_2572187_square.jpg"
                            alt="Cats">
                        <div class="imgOverlay">
                            <h2>Cats</h2>
                            <p>View our cats</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <a href="list.php?type=other">
                    <div class="card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Serious_bunny_%285767442711%29.jpg"
                            alt="Other">
                        <div class="imgOverlay">
                            <h2>Other</h2>
                            <p>View our other animals</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>
</body>

</html>