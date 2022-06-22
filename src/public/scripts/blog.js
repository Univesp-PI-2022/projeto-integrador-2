document.addEventListener("DOMContentLoaded", function () {

})

function CreatePost() {

    let postTitle = document.getElementById('post-title').value;
    let postContent = document.getElementById('post-content').value;
    let postImage = document.getElementById('post-image').value;

    let post = {
        title: postTitle,
        content: postContent,
        image: postImage

    }
    fetch("../controller/newsletter.php", {
        method: "POST",
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },

        //make sure to serialize your JSON body
        body: JSON.stringify(post)
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