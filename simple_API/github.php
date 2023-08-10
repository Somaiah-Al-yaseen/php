<!DOCTYPE html>
<html>
<head>
    <title>GitHub User Search</title>
    <style>
        .user-card {
            border: 1px solid #ddd;
            margin: 10px;
            padding: 10px;
            display: inline-block;
        }
        
        img {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>GitHub User Search</h1>
    
    <form method="GET" action="">
        <label for="searchQuery">Search for GitHub users:</label>
        <input type="text" id="searchQuery" name="q" required>
        <button type="submit">Search</button>
    </form>
    
    <?php
    if (isset($_GET['q'])) {
        $accessToken = 'YOUR_GITHUB_ACCESS_TOKEN';
        $searchQuery = urlencode($_GET['q']);
        $apiUrl = "https://api.github.com/search/users?q=$searchQuery";
        
        $options = [
            'http' => [
                'header' => "User-Agent: MyGitHubSearch\r\n" .
                            "Authorization: Bearer $accessToken\r\n",
            ],
        ];
        
        $context = stream_context_create($options);
        $response = file_get_contents($apiUrl, false, $context);
        $data = json_decode($response, true);
        
        if ($data && isset($data['items'])) {
            foreach ($data['items'] as $user) {
                $username = $user['login'];
                $avatarUrl = $user['avatar_url'];
                $followers = $user['followers'];
                
                echo "<div class='user-card'>";
                echo "<img src='$avatarUrl' alt='$username'>";
                echo "<p>Username: $username</p>";
                echo "<p>Followers: $followers</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No users found.</p>";
        }
    }
    ?>
</body>
</html>
