<!DOCTYPE html>
<html>
<head>
    <title>Weather Forecast</title>
</head>
<body>
    <h1>Weather Forecast</h1>
    
    <form method="POST" action="">
        <label for="city">Enter City Name: </label>
        <input type="text" id="city" name="city" required>
        <button type="submit">Get Weather</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $apiKey = "YOUR_OPENWEATHERMAP_API_KEY";
        $city = $_POST["city"];
        $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey&units=metric";
        
        $response = file_get_contents($apiUrl);
        $data = json_decode($response, true);
        
        if ($data && $data["cod"] == 200) {
            $cityName = $data["name"];
            $temperature = $data["main"]["temp"];
            $humidity = $data["main"]["humidity"];
            $minTemp = $data["main"]["temp_min"];
            $maxTemp = $data["main"]["temp_max"];
            $windSpeed = $data["wind"]["speed"];
            
            echo "<h2>Weather in $cityName</h2>";
            echo "<p>Temperature: $temperature °C</p>";
            echo "<p>Humidity: $humidity%</p>";
            echo "<p>Minimum Temperature: $minTemp °C</p>";
            echo "<p>Maximum Temperature: $maxTemp °C</p>";
            echo "<p>Wind Speed: $windSpeed m/s</p>";
        } else {
            echo "<p>City not found. Please enter a valid city name.</p>";
        }
    }
    ?>
</body>
</html>
