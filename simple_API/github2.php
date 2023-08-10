<!DOCTYPE html>
<html>
<head>
    <title>GitHub User Search</title>
    <style>
        .card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
        }
        .card img {
            max-width: 100px;
        }
    </style>
</head>
<body>
    <h2>GitHub User Search</h2>
    <form action="" method="GET">
        <input type="text" name="username" placeholder="Enter GitHub Username" required>
        <button type="submit">Search</button>
    </form>

    <?php
    if (isset($_GET['username'])) {
        $username = $_GET['username'];
        $apiUrl = "https://api.github.com/users/$username";

        $ch = curl_init($apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-Agent: YourApp')); // GitHub API requires a user-agent header
        $response = curl_exec($ch);
        curl_close($ch);

        $userData = json_decode($response, true);

        if ($userData && !isset($userData['message'])) {
            echo '<div class="card">';
            echo '<img src="' . $userData['avatar_url'] . '" alt="User Avatar">';
            echo '<h3>' . $userData['login'] . '</h3>';
            echo '<p>Followers: ' . $userData['followers'] . '</p>';
            echo '</div>';
        } else {
            echo '<p>User not found.</p>';
        }
    }
    ?>
</body>
</html>
