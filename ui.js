const passwordInput  =  document.getElementById("passwordInput");


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


document.querySelectorAll('.togglePassword').forEach(btn => {
    btn.addEventListener('click', () => {
        const input = btn.previousElementSibling; // находим input перед кнопкой
        if (input && input.tagName === 'INPUT') {
            input.type = input.type === 'password' ? 'text' : 'password';
        }
    });
});
