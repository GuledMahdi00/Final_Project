<html>
  <head>
    <title>Forms</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
      <!-- Kontakt skjema -->
      <form class="contact-form" action="" method="post">
        <h2>Kontakt oss</h2>
        <p>Fyll inn skjemaet under for å kommme i kontakt med oss!</p>
        <input type="text" name="inpNavn" placeholder="Ditt navn" required>
        <input name="inpEmail" type="email" placeholder="Din email addresse" required>
        <textarea name="inpMelding" placeholder="Skriv inn en melding" required></textarea>
        <button type="submit" name="submit">Send skjema</button>
        <?php
        // send skjema
        if (isset($_POST['submit'])) {
          echo "<div class='form-melding'>";
          echo "<h3>Takk for din henvendelse ".$_POST['inpNavn'].".</h3>";
          echo "<p>Din email addresse: ".$_POST['inpEmail'].".</p>";
          echo "<p>Din melding: ".$_POST['inpMelding']."</p>";
          echo "<p><i>Dato: ".date("Y-m-d H:i:s")."</i></p>";
          echo "</div>";
        }
        ?>
        </span>
      </form>
  </body>
</html>
