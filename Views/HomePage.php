<!DOCTYPE html>
<html>

<head>
    <title>Welcome!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="container">

        <nav class="main-nav">
            <div class="nav-links">
                <a class="nav-link" href="HomePage.php">Home</a>
                <a class="nav-link" href="Profile.php">Profile</a>
                <a class="nav-link" href="Logout.php">Logout</a>
            </div>
        </nav>

        <div class="section">
            

            <div class="card">
                <img class="card-image" src="../Assets/AdminPic.png" alt="Admin Image">
                <h5 class="card-title">Worker Information</h5>
                <p class="card-description">
                    In this section, you can Add, Customize & Remove Admin Details.
                </p>
                <a href="AdminList.php" class="card-link">Admins</a>
            </div>
        </div>

        <div class="section">
            <div class="card">
                <img class="card-image" src="../Assets/SearchPic.png" alt="Search Image">
                <h5 class="card-title">Search Here</h5>
                <p class="card-description">
                    Looking for someone? Here, you can search for any Admin or Donor information.
                </p>
                <a href="SearchEngine.php" class="card-link">Search</a>
            </div>
        </div> 

    </div>

</body>

</html>
