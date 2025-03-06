<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultimi episodi del podcast</title>
</head>
<body>
    <h2>Ultimi episodi del podcast</h2>
    <ul id="episodes"></ul>
    
    <script>
        function fetchPodcastEpisodes() {
            const rssUrl = "https://anchor.fm/s/101758198/podcast/rss";
            const xhr = new XMLHttpRequest();
            
            xhr.open("GET", rssUrl, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    const parser = new DOMParser();
                    const xmlDoc = parser.parseFromString(xhr.responseText, "text/xml");
                    
                    const items = xmlDoc.querySelectorAll("item");
                    const episodesList = document.getElementById("episodes");
                    
                    items.forEach(item => {
                        const title = item.querySelector("title").textContent;
                        const link = item.querySelector("link").textContent;
                        
                        const li = document.createElement("li");
                        const a = document.createElement("a");
                        a.href = link;
                        a.textContent = title;
                        a.target = "_blank";
                        
                        li.appendChild(a);
                        episodesList.appendChild(li);
                    });
                }
            };
            
            xhr.send();
        }
        
        // Chiamare la funzione al caricamento della pagina
        document.addEventListener("DOMContentLoaded", fetchPodcastEpisodes);
    </script>
</body>
</html>
