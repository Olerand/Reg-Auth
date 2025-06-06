const passwordInput  =  document.getElementById("passwordInput");



document.querySelectorAll('.togglePassword').forEach(btn => {
    btn.addEventListener('click', () => {
        const input = btn.previousElementSibling; 
        if (input && input.tagName === 'INPUT') {
            input.type = input.type === 'password' ? 'text' : 'password';
        }
    });
});
