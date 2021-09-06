<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <!-- NAVBAR -->

  <nav>
    <div class="navbar">
      <div class="container">
        <img src="../img/logo.png" alt="" />
        <a href="../index.php">Accueil</a>
        <a href="#bienvenue">qui somme-nous ?</a>
        <a href="#service">nos services</a>
        <a href="#methode">nos méthode</a>
        <a href="login.php">Connexion</a>
      </div>
    </div>
  </nav>

  <!-- LOGIN -->

  <div class="contener">
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">
          Connexion</div>
        <div class="title signup">
          Inscription</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Connexion</label>
          <label for="signup" class="slide signup">Inscription</label>
          <div class="slider-tab">
          </div>
        </div>
        <div class="form-inner">
          <form action="#" class="login">
            <div class="field">
              <input type="text" placeholder="Adresse Email" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Mot de passe" required>
            </div>
            <div class="pass-link">
              <a href="#">Mot de passe oublié ?</a>
            </div>
            <div class="field btn">
              <div class="btn-layer">
              </div>
              <input type="submit" value="Login">
            </div>
            <div class="signup-link">
              Vous n'etes pas membre ? <a href="">Inscrivez-vous maintenant</a></div>
          </form>
          <form action="#" class="signup">
            <div class="field">
              <input type="text" placeholder="Adresse Email" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Mot de passe" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Confirmer le mot de passe" required>
            </div>
            <div class="field btn">
              <div class="btn-layer">
              </div>
              <input type="submit" value="Signup">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");
    signupBtn.onclick = (() => {
      loginForm.style.marginLeft = "-50%";
      loginText.style.marginLeft = "-50%";
    });
    loginBtn.onclick = (() => {
      loginForm.style.marginLeft = "0%";
      loginText.style.marginLeft = "0%";
    });
    signupLink.onclick = (() => {
      signupBtn.click();
      return false;
    });
  </script>

</body>

</html>