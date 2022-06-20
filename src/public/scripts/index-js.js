document.addEventListener("DOMContentLoaded", function () {

    const inputSubscribeNewsletter = document.getElementById("subscribe-newsletter");

    inputSubscribeNewsletter.addEventListener('keyup', function (e) {

        const valueInput = e.target.value;

        if (!valueInput.match(/^\S+@\S+\.\S\S+$/)) {
            document.getElementById("newsletter").disabled = true;
            inputSubscribeNewsletter.classList.remove("is-valid");
            inputSubscribeNewsletter.classList.add("is-invalid");
        } else {
            document.getElementById("newsletter").disabled = false;
            inputSubscribeNewsletter.classList.remove("is-invalid");
            inputSubscribeNewsletter.classList.add("is-valid");
        }
    })

});

function subscribeNewsletter() {

    let emailSubscribe = document.getElementById('subscribe-newsletter').value;

    let data = {
        email: emailSubscribe
    }
    fetch("../controller/newsletter.php", {
        method: "POST",
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },

        //make sure to serialize your JSON body
        body: JSON.stringify(data)
    })
        .then((response) => {
            let statusResponse = response.status;
            if (statusResponse === 201) {
                let alertSuccess = document.getElementById("success-subscribe-newsletter");
                alertSuccess.classList.remove("invisible")
                alertSuccess.classList.add("visible")
            }
            if (statusResponse === 400) {
                let alertErroInvalidEmail = document.getElementById("invalid-email");
                alertErroInvalidEmail.classList.remove("invisible")
                alertErroInvalidEmail.classList.add("visible")
            }
            if (statusResponse === 500) {
                let alertErroSubscribre = document.getElementById("erro-subscribe-newsletter");
                alertErroSubscribre.classList.remove("invisible")
                alertErroSubscribre.classList.add("visible")
            }

        }
        )
        .then(json => {
            console.log(json);
        })
        .catch(error => {
            console.log(error);
        })

}