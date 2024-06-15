<style>
@import url('https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap');
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>

<body class="bg_image">
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 form_center">
                    <div class="card">
                        <h2>Login</h2>
                        <form name="LoginForm" id="LoginForm" onsubmit="return validateLoginForm(this)" method="POST">
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>

                           <div class="text-center">
                           <button type="submit" class="btn btn-purple w-100 mb-3">Submit</button>
                            <a href="index.php" class="btn">Back</a>
                           </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script src="./assets/js/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<style>
body {
    font-size: 15px;
    font-family: "Sora", sans-serif;
    margin: 0;

    height: 100vh;
    background: #000;
    /* Warna orange cerah */
    color: #333;
}

.form_center {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.card {
    padding: 0;
    width: 500px;

}

.card h2 {
    color: #682c8c;
    text-align: center;
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 1rem;
}

.card {
    padding: 2rem;
}

.bg_image {
    background-image: url(./assets/img/login-bg.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}
.errorMsgArrow{
    color: red;
}
@media (max-width:981px) {
.card {
    padding: 1rem;
}
}
</style>

<script src="./assets/js/form.js"></script>