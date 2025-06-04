const passwordInput  =  document.getElementById("passwordInput");
const toggleBtn = document.getElementById("togglePassword");


toggleBtn.addEventListener("click", () => {
    const isPassword = passwordInput.type === "password";
    passwordInput.type = isPassword ? "text" : "password";
})