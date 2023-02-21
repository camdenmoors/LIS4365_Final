<?php
// Database configuration
$host = "sql207.epizy.com";
$username = "<username>";
$password = "<password>";
$dbname = "epiz_33325564_animals";

$insertSuccess = false;

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if we have a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data, if not set set it to null
    $name = $_POST['name'] ?? null;
    $type = $_POST['type'];
    $gender = $_POST['gender'];
    $breed = $_POST['breed'] ?? null;
    $birthday = $_POST['age'] ?? null;
    $photo = $_POST['photo'] ?? null;

    // Validate that $type is either cat, dog or other
    if ($type !== 'cat' && $type !== 'dog' && $type !== 'other') {
        die('Invalid animal type for ' . $name . ', must be cat, dog, or other. You selected: ' . $type);
    }

    // Validate that $gender is either male, female, or unknown
    if ($gender !== 'male' && $gender !== 'female' && $gender !== 'unknown') {
        die("Invalid gender type, must be male, female, or unknown.");
    }

    // Validate that photo is a valid image URL - https://stackoverflow.com/questions/2058578/best-way-to-check-if-a-url-is-valid
    if ($photo !== '' && !filter_var($photo, FILTER_VALIDATE_URL)) {
        die("Invalid photo URL.");
    }

    // Prepare insert statement
    $stmt = mysqli_prepare($conn, "INSERT INTO animals (name, gender, breed, type, photo, birthday) VALUES (?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssssss", $name, $gender, $breed, $type, $photo, $birthday);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        $insertSuccess = true;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>

<html>

<head>
    <title>Pasco County Animal Services - Submit an Animal</title>
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

        #main {
            padding: 10px;
            text-align: center;
        }

        #main h1 {
            font-size: 2em;
            font-weight: bold;
        }

        #main form {
            text-align: left;
            margin: 0 auto;
            width: 50%;
        }

        #main label {
            display: block;
            margin-top: 10px;
        }

        #main input {
            display: block;
            margin-top: 5px;
            width: 100%;

        }

        #main input[type="submit"] {
            margin-top: 10px;
            width: 128px;
        }

        .success {
            color: green;
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
        <h1>Submit an Animal For Adoption</h1>
        <?php
        if ($insertSuccess) {
            echo '<h2 class="success">Animal successfully added to the database.</h2>';
        }
        ?>
        <form id="submitAnimal" action="submit.php" method="post" enctype="multipart/form-data">
            <label for="name">Name (optional):</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="type">Type:</label>
            <select name="type" id="type" required>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="other">Other</option>
            </select>
            <label for="gender">Gender: </label>
            <select name="gender" id="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="unknown">Unknown</option>
            </select>
            <label for="age">Age (optional):</label>
            <input type="text" name="age" id="age">
            <br>
            <label for="breed">Breed (optional):</label>
            <input type="text" name="breed" id="breed">
            <br>
            <label for="photo">Photo URL (optional):</label>
            <input type="text" name="photo" id="photo">
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <script>

        // Souce: https://stackoverflow.com/questions/5717093/check-if-a-javascript-string-is-a-url
        function isValidHttpUrl(string) {
            let url;
            try {
                url = new URL(string);
            } catch (_) {
                return false;
            }
            return url.protocol === "http:" || url.protocol === "https:";
        }

        // Add an event listener for the form submission
        const form = document.getElementById('submitAnimal');

        form.addEventListener('submit', (event) => {
            // Prevent the form from submitting
            event.preventDefault();

            // Get the form data
            const formData = new FormData(form);

            // Validate that if the name is set it only contains letters or spaces
            if (formData.get('name') !== '' && !/^[a-zA-Z ]+$/.test(formData.get('name'))) {
                alert('Name must only contain letters and spaces.');
                return;
            }

            // Validate that if the age is set it only contains numbers and letters
            if (formData.get('age') !== '' && !/^[a-zA-Z0-9 ]+$/.test(formData.get('age'))) {
                alert('Age must only contain letters and numbers.');
                return;
            }

            // Validate that if the breed is set it only contains letters or spaces
            if (formData.get('breed') !== '' && !/^[a-zA-Z ]+$/.test(formData.get('breed'))) {
                alert('Breed must only contain letters and spaces.');
                return;
            }


            // Validate that if the photo is set it is a valid URL
            if (formData.get('photo') !== '' && !isValidHttpUrl(formData.get('photo'))) {
                alert('Photo must be a valid URL.');
                return;
            }

            // Submit the form if we've reached this point (passed all validation)
            form.submit();
        });

    </script>

    <?php include 'components/footer.php'; ?>
</body>

</html>