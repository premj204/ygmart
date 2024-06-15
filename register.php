<style>
    @import url('https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap');
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>

<body class="bg_image">
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 form_center">
                    <div class="card">
                        <h2>Register Form</h2>
                        <form name="RegisterForm" id="RegisterForm" onsubmit="return validateRegisterForm(this)" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="userid" class="form-label">Enter UserID</label>
                                        <input type="text" class="form-control" id="userid" name="userid">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="pinnumber" class="form-label">Enter Pin</label>
                                        <input type="text" class="form-control" id="pinnumber" name="pinnumber">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="mobile" class="form-label">Enter Mobile No</label>
                                        <input type="text" class="form-control" id="mobile" name="mobile">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="sponsorid" class="form-label">Enter Sponsor ID</label>
                                        <input type="text" class="form-control" id="sponsorid" name="sponsorid">
                                        <div class="form-text float-end"><a href="">I Dont Have A Sponsor</a></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="text" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                </div>
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
    <script src="./assets/js/form.js"></script>
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
a{
    text-decoration: none;
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
    font-size: 14px;
}
@media (max-width:981px) {
    .form_center {
    height: auto;
    margin: 1rem 0;
}
.card {
    padding: 1rem;
}
}
</style>