<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <title>Cadatro de usuário</title>
</head>
<style>
    img {
        width: 100%;
        height: 100%;
    }
</style>

<body>
    <div class=" d-flex flex-row  pt-2">
        <div class="container" style="background-color:#FFC852 ; width:100%; height:900px">

            <form class=" g-3 needs-validation p-5" novalidate>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Nome completo</label>
                    <input type="text" class="form-control" id="validationCustom01" required>
                    <div class="valid-feedback">
                        Nome válido!
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="validationCustomEmail" class="form-label">Email</label>
                    <div class="input-group has-validation">
                        <input type="email" class="form-control" id="validationCustomEmail" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Digite um email válido!
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="validationCustom05" required>
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>

            <form class=" g-3 needs-validation p-5" novalidate>
       
                <div class="col-md-4">
                    <label for="validationCustomEmail" class="form-label">Email</label>
                    <div class="input-group has-validation">
                        <input type="email" class="form-control" id="validationCustomEmail" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Digite um email válido!
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="validationCustom05" required>
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>

        </div>
        <div class="container" style="background-color:#FFE977 ; width:100%; height:900px">
            <img src="https://img.freepik.com/free-vector/tiny-volunteers-sharing-canned-food-grocery-products-help-support-assistance-from-people-with-charity-cardboard-box-flat-vector-illustration-voluntary-delivery-humanitarian-aid-concept_74855-22077.jpg?w=2000" alt="">
        </div>
    </div>

</body>

</html>