document.addEventListener("DOMContentLoaded", function () {

    const inputEmail = document.getElementById("email");
    inputEmail.addEventListener('keyup', function (e) {
        const valueInput = e.target.value;

        if (!valueInput.match(/^\S+@\S+\.\S\S+$/)) {
            inputEmail.classList.remove("is-valid")
            inputEmail.classList.add("is-invalid")
        } else {
            inputEmail.classList.remove("is-invalid")
            inputEmail.classList.add("is-valid")
        }
    })


    const inputFullName = document.getElementById("name");
    inputFullName.addEventListener('keyup', function (e) {
        const valueInput = e.target.value;

        if (!valueInput.match(/[a-z]{2} [a-z]{2}/)) {
            inputFullName.classList.remove("is-valid")
            inputFullName.classList.add("is-invalid")
        } else {
            inputFullName.classList.remove("is-invalid")
            inputFullName.classList.add("is-valid")
        }
    })


    const inputPassword = document.getElementById("password");
    inputPassword.addEventListener('keyup', function (e) {
        const valueInput = e.target.value;

        if (!valueInput.match(/^(?=.*[A-Z])(?=.*[!#@$%&])(?=.*[0-9])(?=.*[a-z]).{6,30}$/)) {
            inputPassword.classList.remove("is-valid")
            inputPassword.classList.add("is-invalid")
        } else {
            inputPassword.classList.remove("is-invalid")
            inputPassword.classList.add("is-valid")
        }

    })


})

function toggleDiv(el) {
    console.log(el);
    var display = document.getElementById(el).style.display;
    if (display == "none")
        document.getElementById(el).style.display = 'block';
    else
        document.getElementById(el).style.display = 'none';
}

