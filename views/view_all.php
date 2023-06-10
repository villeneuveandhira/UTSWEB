<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Design Web</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis&display=swap">
</head>

<body>
    <div class="hana">
        <div class="navbar">
            <a href="https://www.google.com/search?q=kpop&oq=kpop&aqs=edge..69i57j0i67i131i433j0i67j0i67i457j0i402l2j0i67i131i433j0i67.554j0j1&sourceid=chrome&ie=UTF-8">
                <img src="img/kpop-911887.png">
            </a>
            <ul>
                <li>
                    <!-- Show Data -->
                    <a href="search.php" class="refresh_data">DATA</a>
                </li>
                <li>
                    <!-- Add -->
                    <a href="user.php" class="create_data">REGISTER</a>
                </li>
            </ul>
            <div class="navbar-icons">
                <a href="TP2/index.html">
                    <img src="img/user.png">
                </a>
            </div>
        </div>

    <div class="banner">
        <div class="left-column">
            <!-- Search Data -->
            <div class="search-box">
                <img src="img/search.png">
                <form method="GET" action="search.php">
                    <input type="text" name="searchData" id="search" value="<?= @$search ?>" autocomplete="off" class="search_field">
                </form>
            </div>

            <h1>K<span>Pop</span></h1>
            <h3>Korean: 케이팝.<span>RR: keipap.</span></h3>
            <p>
            Short for Korean popular music, a genre of music originating in South Korea as part of South Korean culture. Includes styles and genres from around the world, such as pop, hip hop, R&B, experimental, rock, jazz, gospel, reggae, electronic dance, folk, country, and classical on top of its traditional Korean music roots.
            </p>

            <div class="btn">
                    <button type="button" class="primary-btn"><a href="https://en.wikipedia.org/wiki/K-pop" class="learn-btn">Learn More</a></button>
                    <button type="button"><a href="https://www.youtube.com/results?search_query=Kpop+MV" class="watch-btn">Watch More</a></button>
            </div>
            <div class="social-icons">
                <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiejNiSr-z2AhU38XMBHXZ6CGYQFnoECAQQAQ&url=https%3A%2F%2Ftwitter.com%2Fsearch%3Fq%3D%2523KPOPTWITTER&usg=AOvVaw0OiCgtD0-ubvC07E4Kzf8b">
                    <img src="img/twitter.png">
                </a>
                <a href="https://www.instagram.com/kpopchart/">
                    <img src="img/instagram.png">
                </a>
                <a href="https://id.pinterest.com/search/pins/?q=kpop&rs=typed&term_meta[]=kpop%7Ctyped">
                    <img src="img/pinterest.png">
                </a>
                <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiX_fOIr-z2AhXY8HMBHYj4B74QFnoECAwQAQ&url=https%3A%2F%2Fwww.facebook.com%2Fkpopdrama.id%2F&usg=AOvVaw1xmklW8dD1u-qVATBFpV4P">
                    <img src="img/facebook.png">
                </a>
            </div>
        </div>
        <div class="right-column">
            <img src="img/clipart4710701.png">
        </div>
    </div>
    </div>
</div>
</body>
</html>