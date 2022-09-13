<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/app.css">
    <title>jsjsjs</title>
</head>

<body>
    <div class="auth-container">
        <div class="form-container">
            <div class="signin-signup">

                <form method="post" action="{{ Route("login") }}" class="sign-up-form">

                    <h3 class="title">Connexion</h3>

                    <div class="form-content">
                       
                        <div class="form-group">

                            <label for="email-sing-in">Adresse email</label>
                            <input type="email" name="email" id="email-sing-in" class="form-control" placeholder="exemple@gmail.com">

                        </div>
                      
                        <div class="form-group">

                            <label for="password-sign-in">Mot de pass</label>
                            <input type="password" name="password" class="form-control" placeholder="Mot de pass">

                        </div>

                        <button type="submit" class="btn btn-primary">Se connecter</button>
                    </div>

                </form>
              
                <form method="POST" action="{{ Route("register") }}" class="sign-in-form">

                    <h3 class="title">Inscription</h3>

                    <div class="form-content">
                      
                        <div class="form-group">

                            <label for="email">Adresse Email</label>
                            <input type="email" name="email" id="email" class="form-control @error(" email") is-invalid @enderror" placeholder="exemple@gmail.com">


                        </div>

                        <button type="submit" class="btn btn-primary">S'enregistrer</button>

                    </div>

                </form>

            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Vous avez déja un compte ?</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A quisquam recusandae sint?</p>
                    <button type="button" class="btn btn-primary" id="sign-up-btn">SE CONNECTER</button>
                </div>

                <img src="" alt="notes" class="image">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Vous n'avez pas un compte ?</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A quisquam recusandae sint?</p>
                    <button type="button" class="btn btn-primary" id="sign-in-btn">S'INSCRIRE</button>
                </div>

                <img src="" alt="notes" class="image">
            </div>
        </div>
    </div>

    <script>
        const signInBtn = document.querySelector("#sign-in-btn")
        const signUpBtn = document.querySelector("#sign-up-btn")
        const authContainer = document.querySelector(".auth-container")

        signUpBtn.addEventListener("click", () => {
            authContainer.classList.add("sign-up-mode")
        })

        signInBtn.addEventListener("click", () => {
            authContainer.classList.remove("sign-up-mode")
        })
    </script>
</body>

</html>