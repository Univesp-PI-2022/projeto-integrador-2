document.addEventListener("DOMContentLoaded", function (e) {

    const inputEmail = document.getElementById("email");

    inputEmail.addEventListener('keyup', function (e) {
        const inputText = e.target.value;

        if (!inputText.match(/^\S+@\S+\.\S\S+$/)) {
            inputEmail.classList.remove("is-valid")
            inputEmail.classList.add("is-invalid")
        } else {
            inputEmail.classList.remove("is-invalid")
            inputEmail.classList.add("is-valid")
        }
    })


    const inputFullName = document.getElementById("name");

    inputFullName.addEventListener('keyup', function (e) {
        const inputText = e.target.value;

        if (!inputText.match(/[a-z]{2} [a-z]{2}/)) {
            inputFullName.classList.remove("is-valid")
            inputFullName.classList.add("is-invalid")
        } else {
            inputFullName.classList.remove("is-invalid")
            inputFullName.classList.add("is-valid")
        }

    })



})