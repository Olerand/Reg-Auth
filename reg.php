<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration and Authorization</title>
    <link rel="stylesheet" href="/styles/output.css">
</head>
<body class="flex flex-row w-[100vw] h-[100vh bg-[#111822] font-[Raleway]">
    <main class="flex flex-col w-[50vw] h-[100vh] pl-[120px] pt-[79px]">
        <nav class="mb-[104px]">
            <ul class="flex flex-row text-white text-[24px] gap-[53px] font-[Raleway]">
                <a href="index.php"><li onclick=""  class="">Login</li></a>
                <li  class="border-b-[2px] border-b-[#F38049]">Registration</li>
            </ul>
        </nav>
        <section class="flex flex-col text-white mb-[50px]">
            <h1 class="text-[44px]">Good Morning!</h1>
            <h4 class="text-[16px]">Thank you for coming back!</h4>
        </section>
        <form id="regForm" class="flex flex-col text-[#FFFFFF]" method="post" action="vendor/registration.php">
            <input name="full_name" class="w-[64.6%] h-[81px] bg-[#4D5259] mb-[10px] focus:border-l-[5px] focus:border-[#F38049]   focus:outline-none text-[16px]" type="text" placeholder="Full Name">
            <input name="email" class="w-[64.6%] h-[81px] bg-[#4D5259] mb-[10px] focus:border-l-[5px] focus:border-[#F38049]   focus:outline-none text-[16px]" type="text" placeholder="Your Email">
            <input name="password" id="passwordInput" class="w-[64.6%] h-[81px] bg-[#4D5259] mb-[10px] focus:border-l-[5px] focus:border-[#F38049]   focus:outline-none text-[16px]" type="password" placeholder="Your Password">
            <button  type="button" class="togglePassword w-[25px] h-[25px] relative left-[60%] bottom-[63px]"><img class="w-[25px] h-[25px]" src="/src/images/password_eye.png" alt="pswrd"></button>
                <?php
                if(isset($_SESSION["message"])){
                    echo "<p>" . $_SESSION["message"] . "</p>";
                }
                unset($_SESSION["message"]);
                
                ?>
            <button class="w-[64.6%] h-[63px] text-black bg-[#F38049] hover:bg-[#4D5259] hover:text-white transition-colors duration-300 mb-[100px]">Register</button>
            <div class="flex flex-row">
                <img class="w-[49px] h-[49px] " src="/src/images/diamond.png" alt="">
                <h1 class="text-[33.75px] text-[#FFFFFF]">FutureFlux</h1>
            </div>
        </form>
    </main>
    <aside class="flex w-[50vw] h-[100vh]">
        <img class="flex w-[100%] h-[100%]" src="/src/images/background_main.png" alt="Background aside image of our web-site">
    </aside>
    <script src="/ui.js"></script>
</body>
</html>

