// product search bar
function filterProducts() {
    const input = document.getElementById("search");
    const filter = input.value.toUpperCase();
    const productCards = document.querySelectorAll(".product-card");

    productCards.forEach(card => {
    const title = card.querySelector(".product-title").innerText.toUpperCase();
    if (title.includes(filter)) {
        card.style.display = "block";
    } else {
        card.style.display = "none";
        }
    });
}


// sign up validation 
function validateForm(event) {
    event.preventDefault();

    const emailInput = document.getElementById('email');
    const phoneInput = document.getElementById('Phone');
    const usernameInput = document.getElementById('login');
    const passwordInput = document.getElementById('pass');
    const confirmPasswordInput = document.getElementById('pass2');
    const newsletterCheckbox = document.getElementById('newsletter');
    const termsCheckbox = document.getElementById('terms');
    const emailError = document.querySelector('.textfield:nth-child(1) .error');
    const phoneError = document.querySelector('.textfield:nth-child(2) .error');
    const usernameError = document.querySelector('.textfield:nth-child(3) .error');
    const passwordError = document.querySelector('.textfield:nth-child(4) .error');
    const confirmPasswordError = document.querySelector('.textfield:nth-child(5) .error');
    const newsletterError = document.querySelector('.checkbox .error1');
    const termsError = document.getElementById('qw');
    const emailRegex = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

    if (!emailRegex.test(emailInput.value)) {
        emailError.textContent = 'Please enter a valid email address';
        return;
    }
    emailError.textContent = '';
    if (phoneInput.value.length < 10) {
        phoneError.textContent = 'Please enter a valid phone number';
        return;
    }
    phoneError.textContent = '';
    if (usernameInput.value.trim() === '') {
        usernameError.textContent = 'Username is required';
        return;
    }
    usernameError.textContent = '';
    if (passwordInput.value.trim() === '') {
        passwordError.textContent = 'Password is required';
        return;
    }
    passwordError.textContent = '';
    if (passwordInput.value !== confirmPasswordInput.value) {
        confirmPasswordError.textContent = 'Passwords do not match';
        return;
    }
    confirmPasswordError.textContent = '';
    if (!newsletterCheckbox.checked) {
        newsletterError.textContent = 'You must agree to receive AllFit updates and offers';
        return;
    }
    newsletterError.textContent = '';
    if (!termsCheckbox.checked) {
        termsError.textContent = 'You must agree to the terms and conditions';
        return;
    }
    termsError.textContent = '';
    event.target.submit();
}
document.getElementById('form').addEventListener('submit', validateForm);


