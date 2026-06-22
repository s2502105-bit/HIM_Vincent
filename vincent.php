<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>H.I.M. — Music Icon</title>

    <style>

        * { box-sizing: border-box; }

        body {
            background: #121012;              
            color: #eee6e6;                    
            font-family: Georgia, 'Times New Roman', serif;
            margin: 0;
            padding: 0;
        }

        #site-nav {                            
            display: flex;                     
            justify-content: center;
            gap: 30px;
            background: #1c1c1c;
            padding: 14px 0;
            border-bottom: 2px solid #ff0000;
        }

        #site-nav a {
            color: #eee6e6;
            text-decoration: none;
            font-weight: bold;
            letter-spacing: 1px;
        }

        #site-nav a:hover { color: #c2102a; }

        /* ---------- HERO ---------- */
        .hero {                                /* required: class */
            text-align: center;
            padding: 50px 20px 30px;
        }

        .hero h1 {
            font-size: 3em;
            color: #c2102a;
            margin: 0 0 6px;
        }

        .hero p {
            color: #b9b0b0;
            font-style: italic;
        }

        /* ---------- GENERIC SECTION ---------- */
        .section {                             /* required: class */
            max-width: 900px;
            margin: 0 auto;
            padding: 10px 5px;
            border-top: 1px solid #2a2a2a;
        }

        .section h2 {
            color: #c2102a;
            border-left: 4px solid #c2102a;
            padding-left: 20px;
        }

        /* ---------- ABOUT (grid: photo + text) ---------- */
        .about-grid {
            display: grid;                     /* required: grid */
            grid-template-columns: 200px 1fr;
            gap: 24px;
            align-items: center;
        }

        .about-grid img {
            width: 100%;                      
            height: 150px;                     
            border-radius: 6px;
            border: 2px solid #c2102a;
        }

        @media (max-width: 600px) {
            .about-grid { grid-template-columns: 1fr; }
        }

        video {
            width: 100%;
            max-width: 1000px;
            height: 300px;
            display: block;
            margin: 10px 0;
        }

        table.discography {
            width: 100%;                       
            border-collapse: collapse;
            margin-top: 15px;
        }

        table.discography th,
        table.discography td {
            border: 1px solid #3a3a3a;
            padding: 10px;
            text-align: left;
        }

        table.discography th {
            background: #1c1c1c;
            color: #c2102a;
        }

        .search-bar input[type="text"] {
            padding: 10px;
            width: 240px;
            border: 1px solid #555;
            background: #1c1c1c;
            color: #eee;
        }

        .search-bar button,
        .guestbook-form button,
        .bio-toggle {
            padding: 8px 2px;
            background: #c2102a;
            color: #fff;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        .search-bar button:hover,
        .guestbook-form button:hover,
        .bio-toggle:hover { background: #8a0303; }

        iframe.map {
            width: 100%;                      
            height: 320px;                    
            border: 2px solid #c2102a;
        }

        .contact-links {
            list-style: none;
            padding: 0;
            margin: 0 0 20px;
        }

        .contact-links li {
            margin-bottom: 8px;
        }

        .contact-links a {
            color: #eee6e6;
            background: #1c1c1c;
            border-left: 3px solid #c2102a;
            padding: 8px 12px;
            display: inline-block;
            text-decoration: none;
        }

        .contact-links a:hover { color: #c2102a; }
    </style>
</head>
<body>


    <nav id="site-nav">
        <a href="#about">About</a>
        <a href="#video">Video</a>
        <a href="#discography">Discography</a>
        <a href="#map">Hometown</a>
        <a href="#contact">Contact</a>
    </nav>

    <section class="hero">
        <!-- required: h1 -->
        <h1>H.I.M.</h1>
        <p>His Infernal Majesty — Helsinki, Finland</p>
    </section>

    <!-- ============== ABOUT ============== -->
    <section class="section" id="about">
        <h2>About</h2>
        <div class="about-grid">
            <!-- required: img — replace the src with your own image
                 saved in an /images folder next to this file -->
            <img src="images/him-logo.png" alt="HIM heartagram logo" width="200" height="200">

            <div>
                <p id="bio-text">
                    HIM is a Finnish rock band formed in Helsinki in 1991, known for
                    blending gothic rock and heavy metal with a melodic, romantic
                    edge. Their signature symbol, the "heartagram," became one of
                    the most recognizable logos in rock music.
                </p>
                <p id="bio-text-extra" style="display:none;">
                    The band released eight studio albums between 1997 and 2017,
                    including <em>Razorblade Romance</em> and <em>Dark Light</em>,
                    before disbanding in 2017 after a farewell tour.
                </p>
                <button class="bio-toggle" onclick="toggleBio()">Read more</button>
            </div>
        </div>
    </section>

    <section class="section" id="video">
        <h2>Music Video</h2>
        <video controls width="480" height="270">
            <source src="media/right-here-in-my-arms.mp4" type="video/mp4">
        </video>
    </section>

    <section class="section" id="discography">
        <h2>Discography</h2>

  <ol>
            <li>Right Here In My Arms</li>
            <li>Join Me in Death</li>
        </ol>  

        <!-- required: input + onclick (search/filter) -->
        <div class="search-bar">
            <!-- required: input -->
            <input type="text" id="songSearch" placeholder="Search artist or song...">
            <button onclick="filterSongs()">Search</button>
        </div>

        <table class="discography" id="songTable">
            <tr>
                <th>No.</th>
                <th>Artist</th>
                <th>Album</th>
                <th>Song</th>
                <th>Play</th>
            </tr>
            <tr>
                <td>1</td>
                <td>HIM</td>
                <td>Strongroom Mix</td>
                <td>Right Here In My Arms</td>
                <td>
                    <audio controls>
                        <source src="Missingmp3" type="Missingmp4">
                    </audio>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>HIM</td>
                <td>Razor Blade</td>
                <td>Join Me in Death</td>
                <td>
                    <audio controls>
                        <source src="Missingmp3" type="Missingmp4">
                    </audio>
                </td>
            </tr>
        </table>
    </section>

    <section class="section" id="map">
        <h2>Hometown</h2>
        <p>HIM formed in Helsinki, Finland.</p>
        <iframe class="map"
            src="https://www.google.com/maps?q=Helsinki,Finland&output=embed"
            loading="lazy">
        </iframe>
    </section>

    <section class="section" id="contact">
        <h2>Contact</h2>

        <p>HIM is no longer active, but you can find official material here:</p>
        <ul class="contact-links">
            <li><a href="https://heartagram.com" target="_blank" rel="noopener">Official Website</a></li>
            <li><a href="https://www.facebook.com/theheartagram" target="_blank" rel="noopener">Facebook</a></li>
            <li><a href="https://www.instagram.com/heartagram" target="_blank" rel="noopener">Instagram</a></li>
            <li><a href="https://www.youtube.com/user/him" target="_blank" rel="noopener">YouTube</a></li>
        </ul>
    </section>

    <script>

        function toggleBio() {
            const extra = document.getElementById("bio-text-extra");
            const btn = document.querySelector(".bio-toggle");
            const isHidden = extra.style.display === "none";
            extra.style.display = isHidden ? "block" : "none";
            btn.textContent = isHidden ? "Read less" : "Read more";
        }

        function filterSongs() {
            const query = document.getElementById("songSearch").value.toLowerCase();
            const table = document.getElementById("songTable");
            const rows = table.getElementsByTagName("tr");

            for (let i = 1; i < rows.length; i++) {
                const rowText = rows[i].textContent.toLowerCase();
                rows[i].style.display = rowText.includes(query) ? "" : "none";
            }
        }
    </script>

</body>
</html>