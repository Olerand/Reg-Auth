const passwordInput  =  document.getElementById("passwordInput");
const toggleBtn = document.getElementById("togglePassword");

const loginTab = document.getElementById("loginTab");
const regTab = document.getElementById("regTab");

const loginForm = document.getElementById("loginForm")
const regForm = document.getElementById("regForm");

loginTab.addEventListener("click", () => {
    loginTab.classList.add("border-b-[2px]", "border-b-[#F38049]");
    regTab.classList.remove("border-b-[2px]", "border-b-[#F38049]");
    regForm.classList.add("hidden");
    loginForm.classList.remove("hidden");
});

regTab.addEventListener("click", () => {
    regTab.classList.add("border-b-[2px]", "border-b-[#F38049]");
    loginTab.classList.remove("border-b-[2px]", "border-b-[#F38049]");
    loginForm.classList.add("hidden");
    regForm.classList.remove("hidden");
    
});


toggleBtn.addEventListener("click", () => {
    const isPassword = passwordInput.type === "password";
    passwordInput.type = isPassword ? "text" : "password";
})