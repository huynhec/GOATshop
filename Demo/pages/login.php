<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdlmasll7CVkqkXNQ/ZH/XLvWZOJyj7Yy7tcempD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <title>Document</title>
</head>
<body>
    <div class="login">
        <form action="pages/action.php?req=login" method="post">
            <h2>Hello!<br><span>Welcome Back!</span></h2>
            <div class="inputBox">
                <input type="text" name="username" placeholder="Username"/>
                <i class="fa-regular fa-user"></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" placeholder="Password"/>
                <i class="fa-solid fa-lock"></i>
            </div>
            <label for="">
                <input type="checkbox">Keep me logged in
            </label>
            <div class="inputBox">
                <input type="submit" value="login" name="login">
            </div>
        </form>
    </div>
</body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #edf1f4;
    }
    .login{
        position: relative;
        width: 380px;
        padding: 80px 50px 50px;
        box-shadow: 15px 15px 20px rgba(0,0 , 0, 0.1), -15px -15px 20px #fffb;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 20px;
    }
    .login form{
        position: relative;
        width: 100%;
    }
    .login form h2{
        font-size: 2em;
        margin-bottom: 30px;
        line-height: 0.9em;
    }
    .login form h2 span{
        font-weight: 300;
        font-size: 0.56em;
    }
    .login form .inputBox input{
        border: none;
        outline: none;
        background: transparent;
        border-radius: 10px;
        font-size: 1em;
    }
    .login form .inputBox input[type="text"],
    .login form .inputBox input[type="password"]{
        width: 100%;
        padding: 15px 20px;
        padding-left: 40px;
        margin-bottom: 20px;
        box-shadow: inset 5px 5px 10px rgba(0, 0, 0, 0.1), inset -5px -5px 10px #fff;
    }
    .login form .inputBox i{
        position: absolute;
        left: 20px;
        top: 25%;
    }
    .login form label{
        display: flex;
        align-items: center;
    }
    .login form input[type="checkbox"]{
        margin-right: 5px;
    }
    .login form .inputBox input[type="submit"]{
        margin-top: 20px;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1), -5px -5px 10px #fff;
        width: 100%;
        padding: 15px 20px;
        cursor: pointer;
        font-weight: 600;
    }
    .login form .inputBox input[type="submit"]:focus{
        box-shadow: inset 5px 5px 10px rgba(0, 0, 0, 0.1), -5px -5px 10px #fff;
        border: 3px solid #edf1f4;
        padding: 15px 20px 10px;
        background: linear-gradient(315deg, #03a9f4, #0082bc);
    }
</style>
