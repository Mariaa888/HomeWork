<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/signup.css">
</head>

<body>
    <nav>
        <h1 class="logo"> fair of Furniture</h1>
        <ul class="navscreeen">
            <li><a href="../index.php">Home</a></li>
            <li><a href="proudect.php" class="active">prodect</a></li>
            <li><a href="#">shop</a></li>
            <li><a href="#">contact</a></li>
        </ul>
        <li onclick="show()"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0
                 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0
                  1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
            </svg>
        </li>

        <ul class="navbar">
            <li onclick="closebar()"> <a> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-x-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7
                 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 
                    7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647
                     2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0
                      1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                    </svg></a></li>
            <li><a href="../index.php">Home</a></li>
            <li><a href="proudect.php" class="active">prodect</a></li>
            <li><a href="#">shop</a></li>
            <li><a href="#">contact</a></li>

        </ul>
    </nav>
        <main>
            <form action="signup.php" method="POST">
                <fieldset>
                    <legend>
                        <h3 class="text">Register</h3>
                    </legend>
                    <div class="field">
                        <?php if (isset($user_err)) {
                            echo $user_err;
                        } ?>
                        </p>
                        <label for="username" class="label">User Name</label>
                        <input type="text" name="username" id="" placeholder="username" class="in">
                        <p>
                            <?php if (isset($email_err)) {
                                echo $email_err;
                            } ?>
                        </p>

                        <label for="email" class="label">Email</label>
                        <input type="email" name="em" id="" placeholder="mobile number or email" class="in">
                        <p>
                            <?php if (isset($pass_err)) {
                                echo $pass_err;
                            } ?>
                        </p>
                        <label for="password" class="label">password</label>
                        <input type="password" name="pass" password="" id="" placeholder="Enter your password" class="in">
                        <p>
                            <?php if (isset($phone_err)) {
                                echo $phone_err;
                            } ?>
                        </p>
                        <label for="Phone" class="label">Phone</label>
                        <input type="text" name="phone" id="" placeholder="Enter your Phone" class="in">
                        <p>
                            <?php if (isset($adress_err)) {
                                echo $adress_err;
                            } ?>
                        </p>
                        <label for="adress" class="label">Adress</label>
                        <input type="text" name="adress" id="" placeholder="Enter your Adress" class="in">
                        <label for="gender" class="label">Gender</label>
                        <select name="gender" id="" class="select">
                            <option value="male">Male</option>
                            <option value="female">female</option>

                        </select>


                        <br>
                        <div class="sub">
                            <input type="submit" name="submit" value="signup" class="submit">
                            <h2 class="h2">OR</h2>
                            <a href="login.php" class="a">
                                <div class="adiv">
                                    log in
                                </div>
                            </a>
                        </div>
                    </div>
                </fieldset>
            </form>



        </main>

     <footer class="foot">
            <div class="topfoter">
                <h1 class="logo"> fair of Furniture</h1>
            </div>
            <div class="center">
                <div class="text1">
                    <div class="text2">
                        <div class="text3">

                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                </svg></a>
                        </div>
                        <span>Facebook</span>
                    </div>
                    <div class="text2">
                        <div class="text3">

                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                </svg></a>
                        </div>
                        <span>instagram</span>
                    </div>
                    <div class="text2">
                        <div class="text3">
                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-twitter-x" viewBox="0 0 16 16">
                                    <path
                                        d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                </svg></a>
                        </div>
                        <span>X</span>
                    </div>
                </div>
            </div>
            <div class="topfoter">
                <p class="copyright"> copyright 2024</p>
            </div>

        </footer>

    </body>

    </html>
    <script src="../js/home1.js"></script>
</body>

</html>