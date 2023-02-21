<?php
// Database configuration
$host = "sql207.epizy.com";
$username = "<username>";
$password = "<password>";
$dbname = "epiz_33325564_animals";

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if type param is set, change the SQL query accordingly
if (isset($_GET['type'])) {
    $sql = "SELECT * FROM animals WHERE type = '" . $_GET['type'] . "'";
} else {
    $sql = "SELECT * FROM animals";
}


// Select all animals from the database
$result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     // Output data of each row
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "Name: " . $row["name"] . "<br>";
//         echo "Gender: " . $row["gender"] . "<br>";
//         echo "Breed: " . $row["breed"] . "<br>";
//         echo "birthday: " . $row["birthday"] . "<br>";
//         echo "Photo: " . $row["photo"] . "<br><br>";

//     }
// } else {
//     echo "No animals found in the database";
// }

// Close the connection
mysqli_close($conn);
?>

<html>

<head>
    <title>Pasco County Animal Services</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-color: lightgray;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .animal {
            width: 300px;
            margin: 10px;
            border: 1px solid black;
            background-color: darkgray;
            overflow: hidden;
        }

        .animal img {
            width: 100%;
            object-fit: cover;
            /* Do cropping to the top of image */
            object-position: center;
        }

        .animal-info {
            padding: 10px;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <?php include 'components/header.php'; ?>


    <!-- Navigation -->
    <?php include 'components/nav.php'; ?>

    <!-- Main Content -->
    <div id="main">
        <!-- List all the animals found in the Database -->
        <?php
        // If we have any results 
        if (mysqli_num_rows($result) > 0) {
            for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                // For every three items make a new row
                if ($i % 3 == 0) {
                    echo "<div class='row'>";
                }
    
                $row = mysqli_fetch_assoc($result);
                echo "<div class='animal'>";
                echo "<a href='" . $row['photo'] . "'> <img src='" . $row['photo'] . "' alt='" . $row['name'] . "' height='270px'></a>";
                echo "<div class='animal-info'>";
                if ($row['name'] == "") {
                    echo "<h2>Unknown</h2>";
                } else {
                    echo "<h2> " . $row['name'] . "</h2>";
                }
                echo "<p>Gender: " . $row['gender'] . "</p>";
                echo "<p>Breed: " . $row['breed'] . "</p>";
                // Dipslay birthday or unknown
                if ($row['birthday'] == "") {
                    echo "<p>Birthday: Unknown</p>";
                } else {
                    echo "<p>Birthday: " . $row['birthday'] . "</p>";
                }
                // End the row div if the row is full
                if ($i % 3 == 2) {
                    echo "</div>";
                }
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<center>No animals found in the database for type: " . $_GET['type'] . "<center>";
        }

        
        ?>
    </div>

    <br /><br />

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>
</body>

</html>