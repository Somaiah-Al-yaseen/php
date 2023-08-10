<!DOCTYPE html>
<html>
<head>
    <title>YouTube Video Search</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <h1>YouTube Video Search</h1>
    
    <input type="text" id="searchInput" placeholder="Enter keywords...">
    <button id="searchButton">Search</button>
    
    <div id="searchResults">
        <p>Total Results: <span id="totalResults">0</span></p>
        <div id="videoCards"></div>
    </div>
    
    <script>
        const apiKey = 'YOUR_YOUTUBE_API_KEY';

        document.getElementById('searchButton').addEventListener('click', () => {
            const searchQuery = document.getElementById('searchInput').value;
            searchVideos(searchQuery);
        });

        function searchVideos(query) {
            const apiUrl = `https://www.googleapis.com/youtube/v3/search?key=${apiKey}&part=snippet&type=video&q=${query}`;

            $.ajax({
                url: apiUrl,
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    displayResults(data.items);
                },
                error: function(error) {
                    console.error('Error fetching data:', error);
                }
            });
        }

        function displayResults(results) {
            const videoCardsContainer = document.getElementById('videoCards');
            const totalResultsSpan = document.getElementById('totalResults');
            totalResultsSpan.textContent = results.length;

            videoCardsContainer.innerHTML = '';

            results.forEach(result => {
                const videoId = result.id.videoId;
                const title = result.snippet.title;
                const thumbnailUrl = result.snippet.thumbnails.medium.url;

                const card = document.createElement('div');
                card.className = 'video-card';

                const thumbnail = document.createElement('img');
                thumbnail.src = thumbnailUrl;

                const titleElement = document.createElement('p');
                titleElement.textContent = title;

                card.appendChild(thumbnail);
                card.appendChild(titleElement);

                videoCardsContainer.appendChild(card);
            });
        }
    </script>

    <style>
        .video-card {
            border: 1px solid #ddd;
            margin: 10px;
            padding: 10px;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</body>
</html>
