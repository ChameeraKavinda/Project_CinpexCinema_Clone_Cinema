const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const para = document.getElementById('register1');

const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

para.addEventListener('click', () => {
    container.classList.add("active");
});
loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});