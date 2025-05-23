<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kaizen Vistro Portfolio - Contact</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&family=Noto+Serif+Bengali:wght@100..900&display=swap"
    rel="stylesheet"
  />
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      font-family: 'Noto Serif Bengali', serif;
      background: #fff8f0;
    }
    .header {
      background-color: rgb(250, 193, 193);
      padding: 20px 12%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      box-sizing: border-box;
      z-index: 1000;
      backdrop-filter: blur(10px);
    }
    .logo {
      font-family: 'Bowlby One SC', cursive;
      font-size: 25px;
      color: #b75cd3;
      margin-left: 20px;
    }
    .navbar a {
      margin-left: 20px;
      color: rgb(190, 108, 133);
      text-decoration: none;
      font-weight: 500;
      font-size: 18px;
      border-bottom: 3px solid transparent;
      transition: border-color 0.3s ease;
    }
    .navbar a:hover {
      border-bottom: 3px solid white;
    }

    main {
      padding: 140px 12% 40px;
      max-width: 600px;
      margin: 0 auto;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgb(0 0 0 / 0.1);
    }
    h1 {
      font-family: 'Bowlby One SC', cursive;
      color: #b75cd3;
      text-align: center;
      margin-bottom: 30px;
    }
    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    label {
      font-weight: 600;
      color: #b75cd3;
    }
    input[type="text"],
    input[type="email"],
    textarea {
      padding: 10px;
      border: 2px solid #b75cd3;
      border-radius: 8px;
      font-family: 'Noto Serif Bengali', serif;
      font-size: 16px;
      resize: vertical;
    }
    textarea {
      min-height: 120px;
    }
    button {
      background-color: #b75cd3;
      color: white;
      border: none;
      padding: 12px;
      font-size: 18px;
      border-radius: 8px;
      cursor: pointer;
      font-family: 'Bowlby One SC', cursive;
      transition: background-color 0.3s ease;
    }
    button:hover {
      background-color: rgb(180, 80, 180);
    }
    .error {
      color: red;
      font-size: 14px;
    }
  </style>
</head>
<body>
<header class="header">
  <img src="client profile.png" style="width: 80px; height: 90px; border-radius: 100%;" alt="Profile" />
  <div class="logo">Vistro Yummy Treats</div>
  <nav class="navbar">
    <a href="My client Web.html" target="_blank">Home</a>
    <a href="about.html" target="_blank">About Us</a>
    <a href="videos.html" target="_blank">Videos</a>
    <a href="pictures.html" target="_blank">Pictures</a>
    <a href="contact.html" target="_blank">Contacts</a>
  </nav>
</header>

<main>
  <h1>Contact Us</h1>
  <form action="output.php" method="post">
    Full Name: <input type="text" name="Full" required> <br>
    Email: <input type="text" name="Email" required> <br>
    Message: <input type="text" name="Message" required> <br>
    <input type="submit">
  </form>
</main>

</body>
</html>
