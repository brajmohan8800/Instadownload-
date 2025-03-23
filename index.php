<html>
<head>
  <title>🔥 Insta Reels Downloader | Premium</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: #0f0f0f;
      color: white;
      text-align: center;
    }

    .container {
      max-width: 600px;
      margin: 50px auto;
      padding: 30px;
      background: linear-gradient(135deg, #1a1a1a, #333333);
      box-shadow: 0 0 20px rgba(0, 255, 255, 0.5);
      border-radius: 10px;
      transition: 0.5s;
    }

    .container:hover {
      box-shadow: 0 0 30px rgba(0, 255, 255, 0.8);
    }

    h2 {
      font-size: 26px;
      font-weight: 600;
      text-transform: uppercase;
      background: linear-gradient(90deg, #00ffcc, #00aaff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    input[type="text"], input[type="submit"] {
      width: 80%;
      padding: 12px;
      margin: 15px 0;
      border: none;
      border-radius: 5px;
      font-size: 16px;
    }

    input[type="text"] {
      background: #222;
      color: white;
      border: 1px solid cyan;
      transition: 0.3s;
    }

    input[type="text"]:focus {
      border-color: #00ffcc;
      box-shadow: 0 0 10px #00ffcc;
    }

    input[type="submit"] {
      background: linear-gradient(90deg, #00ffcc, #0099ff);
      color: black;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    input[type="submit"]:hover {
      background: linear-gradient(90deg, #0099ff, #00ffcc);
      box-shadow: 0 0 15px cyan;
    }

    .video-container {
      margin-top: 20px;
    }

    video {
      width: 100%;
      border-radius: 10px;
      box-shadow: 0 0 20px cyan;
    }

    .download-btn, .join-btn {
      display: inline-block;
      margin-top: 20px;
      padding: 12px 20px;
      background: linear-gradient(90deg, #ff00ff, #ff0099);
      color: white;
      border-radius: 5px;
      text-decoration: none;
      font-size: 18px;
      transition: 0.3s;
    }

    .download-btn:hover, .join-btn:hover {
      background: linear-gradient(90deg, #ff0099, #ff00ff);
      box-shadow: 0 0 15px magenta;
    }

    .error {
      color: #ff5555;
      font-size: 18px;
    }
  </style>

  <script>
    function redirectToTelegram() {
      setTimeout(function() {
        window.location.href = "https://t.me/Dailyfreeearmig";
      }, 2000); // Redirect after 2 seconds
    }
  </script>
</head>
<body>
  <div class="container">
    <?php
      if(isset($_POST['url'])) {
          $userUrl = $_POST['url'];
          $apiUrl = "https://ig.inr.workers.dev/?url=" . urlencode($userUrl);
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $apiUrl);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          $response = curl_exec($ch);
          curl_close($ch);
          $json = json_decode($response, true);
          if(isset($json['status']) && $json['status'] == 'success') {
              $videoUrl = $json['url'];
              echo '<h2>🎥 Video Preview</h2>';
              echo '<div class="video-container"><video controls><source src="'.$videoUrl.'" type="video/mp4"></video></div>';
              echo '<a class="download-btn" href="'.$videoUrl.'&dl=1" download onclick="redirectToTelegram()">⬇️ Download Video</a>';
          } else {
              echo '<div class="error">❌ '.(isset($json['msg']) ? $json['msg'] : "Internal server error!").'</div>';
          }
      } else {
    ?>
    <h2>🔥 Insta Reels Downloader</h2>
    <form method="POST">
      <input type="text" name="url" placeholder="Paste Instagram Reel URL" required>
      <input type="submit" value="Download Now 🚀">
    </form>
    <a href="https://t.me/Dailyfreeearmig" class="join-btn">🔗 Join Our Telegram</a>
    <?php } ?>
  </div>
</body>
</html>