<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    
    <title>login</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">



          <form method="POST" action="{{ route('login') }}" class="sign-in-form">
            @csrf

            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="email" type="email" placeholder="Correo"  class="form-control @error('email') es incorrecto  @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password" placeholder="contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>



          <form method="POST" action="{{ route('register') }}"class="sign-up-form">
            @csrf
     
          
          <h2 class="title">Registro</h2>
          <div class="input-field">
              
            <i class="fas fa-user"></i>
            <input id="name" type="text" placeholder="Nombre" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
           <input id="email" type="email"placeholder="Correo"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input id="password" placeholder="Contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          </div>

            <div class="input-field">
            <i class="fas fa-lock"></i>
            <input id="password-confirm" type="password" placeholder="Recordar contraseña" class="form-control" name="password_confirmation" required autocomplete="new-password">
          </div>


            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>

        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
  </body>
</html>


{{-- 
        <form method="POST" action="{{ route('login') }}" class="allog">
                    @csrf

                    <div class="form-outline ">
                        <label for="email" class="">{{ __('Correo ') }}</label>

                        <div class="form-outline mb-4">
                            <input id="email" type="email" class="form-control @error('email') es incorrecto  @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <label for="password" class="col-md-4 col-form-label ">{{ __('Contraseña') }}</label>

                        <div class="form-outline mb-4">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                  
                    <button  class="btn btn-white"  type="submit" id="boton1"> 
                        {{ __('Iniciar Sesión') }}
                    </button>

                    <hr class="my-1">

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('olvidó su contraseña?') }}
                                </a>
                            @endif

                            
                        </div>
                    </div>  
                </form>
            </div>
        </div>
    </div>
</div>
</div>  --}}

  
      {{-- fondo ondulado  --}}
    {{-- <div class="container">
  
        <!-- Creating a SVG image -->
        <svg viewBox="0 0 500 500" 
        
            preserveAspectRatio="xMinYMin meet" id="miImagen">
              
            <path  d="M0, 100 C150, 200 550,
                502 700, 100 L500, 00 L0, 0 Z"
                style="stroke:none; fill:rgb(255, 255, 255);">
            </path>
        </svg>
    </div> --}}


{{-- ******************************************************************estilos del login ************************************************ --}}

    <style>@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
        
        body,
        input {
          font-family: "Poppins", sans-serif;
        }
        
        .container {
          position: relative;
          width: 100%;
          background-color: #fff;
          min-height: 100vh;
          overflow: hidden;
        }
        
        .forms-container {
          position: absolute;
          width: 100%;
          height: 100%;
          top: 0;
          left: 0;
        }
        
        .signin-signup {
          position: absolute;
          top: 50%;
          transform: translate(-50%, -50%);
          left: 75%;
          width: 50%;
          transition: 1s 0.7s ease-in-out;
          display: grid;
          grid-template-columns: 1fr;
          z-index: 5;
        }
        
        form {
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: column;
          padding: 0rem 5rem;
          transition: all 0.2s 0.7s;
          overflow: hidden;
          grid-column: 1 / 2;
          grid-row: 1 / 2;
        }
        
        form.sign-up-form {
          opacity: 0;
          z-index: 1;
        }
        
        form.sign-in-form {
          z-index: 2;
        }
        
        .title {
          font-size: 2.2rem;
          color: #444;
          margin-bottom: 10px;
        }
        
        .input-field {
          max-width: 380px;
          width: 100%;
          background-color: #f0f0f0;
          margin: 10px 0;
          height: 55px;
          border-radius: 55px;
          display: grid;
          grid-template-columns: 15% 85%;
          padding: 0 0.4rem;
          position: relative;
        }
        
        .input-field i {
          text-align: center;
          line-height: 55px;
          color: #acacac;
          transition: 0.5s;
          font-size: 1.1rem;
        }
        
        .input-field input {
          background: none;
          outline: none;
          border: none;
          line-height: 1;
          font-weight: 600;
          font-size: 1.1rem;
          color: #333;
        }
        
        .input-field input::placeholder {
          color: #aaa;
          font-weight: 500;
        }
        
        .social-text {
          padding: 0.7rem 0;
          font-size: 1rem;
        }
        
        .social-media {
          display: flex;
          justify-content: center;
        }
        
        .social-icon {
          height: 46px;
          width: 46px;
          display: flex;
          justify-content: center;
          align-items: center;
          margin: 0 0.45rem;
          color: #333;
          border-radius: 50%;
          border: 1px solid #333;
          text-decoration: none;
          font-size: 1.1rem;
          transition: 0.3s;
        }
        
        .social-icon:hover {
          color: #4481eb;
          border-color: #4481eb;
        }
        
        .btn {
          width: 150px;
          background-color: #5995fd;
          border: none;
          outline: none;
          height: 49px;
          border-radius: 49px;
          color: #fff;
          text-transform: uppercase;
          font-weight: 600;
          margin: 10px 0;
          cursor: pointer;
          transition: 0.5s;
        }
        
        .btn:hover {
          background-color: #4d84e2;
        }
        .panels-container {
          position: absolute;
          height: 100%;
          width: 100%;
          top: 0;
          left: 0;
          display: grid;
          grid-template-columns: repeat(2, 1fr);
        }
        
        .container:before {
          content: "";
          position: absolute;
          height: 2000px;
          width: 2000px;
          top: -10%;
          right: 48%;
          transform: translateY(-50%);
          background-image: url("https://images.pexels.com/photos/13200191/pexels-photo-13200191.jpeg?auto=compress&cs=tinysrgb&w=1600");
          background-repeat: no-repeat;
          background-size:100%;
          transition: 1.8s ease-in-out;
          border-radius: 50%;
          z-index: 6;
        }
        
        .image {
          width: 100%;
          transition: transform 1.1s ease-in-out;
          transition-delay: 0.4s;
        }
        
        .panel {
          display: flex;
          flex-direction: column;
          align-items: flex-end;
          justify-content: space-around;
          text-align: center;
          z-index: 6;
        }
        
        .left-panel {
          pointer-events: all;
          padding: 3rem 17% 2rem 12%;
        }
        
        .right-panel {
          pointer-events: none;
          padding: 3rem 12% 2rem 17%;
        }
        
        .panel .content {
          color: #fff;
          transition: transform 0.9s ease-in-out;
          transition-delay: 0.6s;
        }
        
        .panel h3 {
          font-weight: 600;
          line-height: 1;
          font-size: 1.5rem;
        }
        
        .panel p {
          font-size: 0.95rem;
          padding: 0.7rem 0;
        }
        
        .btn.transparent {
          margin: 0;
          background: none;
          border: 2px solid #fff;
          width: 130px;
          height: 41px;
          font-weight: 600;
          font-size: 0.8rem;
        }
        
        .right-panel .image,
        .right-panel .content {
          transform: translateX(800px);
        }
        
        /* ANIMATION */
        
        .container.sign-up-mode:before {
          transform: translate(100%, -50%);
          right: 52%;
        }
        
        .container.sign-up-mode .left-panel .image,
        .container.sign-up-mode .left-panel .content {
          transform: translateX(-800px);
        }
        
        .container.sign-up-mode .signin-signup {
          left: 25%;
        }
        
        .container.sign-up-mode form.sign-up-form {
          opacity: 1;
          z-index: 2;
        }
        
        .container.sign-up-mode form.sign-in-form {
          opacity: 0;
          z-index: 1;
        }
        
        .container.sign-up-mode .right-panel .image,
        .container.sign-up-mode .right-panel .content {
          transform: translateX(0%);
        }
        
        .container.sign-up-mode .left-panel {
          pointer-events: none;
        }
        
        .container.sign-up-mode .right-panel {
          pointer-events: all;
        }
        
        @media (max-width: 870px) {
          .container {
            min-height: 800px;
            height: 100vh;
          }
          .signin-signup {
            width: 100%;
            top: 95%;
            transform: translate(-50%, -100%);
            transition: 1s 0.8s ease-in-out;
          }
        
          .signin-signup,
          .container.sign-up-mode .signin-signup {
            left: 50%;
          }
        
          .panels-container {
            grid-template-columns: 1fr;
            grid-template-rows: 1fr 2fr 1fr;
          }
        
          .panel {
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            padding: 2.5rem 8%;
            grid-column: 1 / 2;
          }
        
          .right-panel {
            grid-row: 3 / 4;
          }
        
          .left-panel {
            grid-row: 1 / 2;
          }
        
          .image {
            width: 200px;
            transition: transform 0.9s ease-in-out;
            transition-delay: 0.6s;
          }
        
          .panel .content {
            padding-right: 15%;
            transition: transform 0.9s ease-in-out;
            transition-delay: 0.8s;
          }
        
          .panel h3 {
            font-size: 1.2rem;
          }
        
          .panel p {
            font-size: 0.7rem;
            padding: 0.5rem 0;
          }
        
          .btn.transparent {
            width: 110px;
            height: 35px;
            font-size: 0.7rem;
          }
        
          .container:before {
            width: 1500px;
            height: 1500px;
            transform: translateX(-50%);
            left: 30%;
            bottom: 68%;
            right: initial;
            top: initial;
            transition: 2s ease-in-out;
          }
        
          .container.sign-up-mode:before {
            transform: translate(-50%, 100%);
            bottom: 32%;
            right: initial;
          }
        
          .container.sign-up-mode .left-panel .image,
          .container.sign-up-mode .left-panel .content {
            transform: translateY(-300px);
          }
        
          .container.sign-up-mode .right-panel .image,
          .container.sign-up-mode .right-panel .content {
            transform: translateY(0px);
          }
        
          .right-panel .image,
          .right-panel .content {
            transform: translateY(300px);
          }
        
          .container.sign-up-mode .signin-signup {
            top: 5%;
            transform: translate(-50%, 0);
          }
        }
        
        @media (max-width: 570px) {
          form {
            padding: 0 1.5rem;
          }
        
          .image {
            display: none;
          }
          .panel .content {
            padding: 0.5rem 1rem;
          }
          .container {
            padding: 1.5rem;
          }
        
          .container:before {
            bottom: 72%;
            left: 50%;
          }
        
          .container.sign-up-mode:before {
            bottom: 28%;
            left: 50%;
          }
        }</style>


{{-- ******************************************************************estilos del login  fin ************************************************ --}}

{{-- ******************************************************************js del login ************************************************ --}}

<script>
    const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});
</script>

{{-- ******************************************************************js del login  fin ************************************************ --}}