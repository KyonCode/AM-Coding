<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta
      charset="UTF-8"
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />

    <link href="css/styles.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap"
      rel="stylesheet"
    />
    <title>AM Coding</title>
  </head>

  <body>
    <header>
      <img src="logo.jpg" alt="AM Coding Logo" />
      <nav>
        <ul class="flex m-4 p-10 justify-center">
          <li class="-mb-px mr-1"><a href="index.html">Home</a></li>
          <li class="-mb-px mr-1"><a href="about.html">about</a></li>
          <li class="-mb-px mr-1"><a href="game.html">Game</a></li>
          <li class="-mb-px mr-1"><a href="Contact.html">Contact Me</a></li>
        </ul>
      </nav>
    </header>
  </body>
  <main>
    <form action="contactform.php" method="post">
      Name:<br />
      <input type="text" name="name" /><br />
      E-mail:<br />
      <input type="text" name="subject" /><br />
      Comment:<br />
      <input type="text" name="message" size="50" /><br /><br />
      <button type="submit" name="submit">Send email</button>
    </form>
  </main>
</html>
