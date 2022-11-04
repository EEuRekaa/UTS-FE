<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS 1</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body style="background-color: lightblue;">
<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><a href="#" class="text-white"><svg xmlns="http://www.w3.org/2000/svg"
                        width="25" height="25" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                    </svg></a>
                <b style="color: white; padding-left: 10px; padding-right: 10px;">Demoshops</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="color: white;" href="home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="color: white;" href="soal2.html">Kasir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="color: white;" href="index.php">Validation</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle me-2" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Toys</a></li>
                            <li><a class="dropdown-item" href="#">Fashion</a></li>
                            <li><a class="dropdown-item" href="#">Furniture</a></li>
                            <li><a class="dropdown-item" href="#">Electronics</a></li>
                        </ul>
                    </li>
                    <form class="d-flex">
                        <input class="form-control me-1" size="25" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-warning me-2" type="submit">Search</button>
                    </form>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white"
                                class="bi bi-bell me-3" viewBox="0 0 16 16">
                                <path
                                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                            </svg>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#">15 messages</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">See all</a></li>
                        </ul>
                    </li>
                </ul>

                <a href="regist.html" style="text-decoration: none;" class="me-2"><button
                        class="form-control btn btn-outline-light">Register</button></a>
                <a href="signin.html" style="text-decoration: none;"><button
                        class="form-control btn btn-outline-light">Sign In</button></a>
            </div>
        </div>
    </nav>
    <!-- nav end -->
    
    <section style="padding-top: 100px; padding-bottom: 100px;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 ">
                                    <h1 class="text-center">Form Validation</h1><br>
                                    <form class="row g-3" id="" method="post" action="result.php">
                                        <div class="col-md-12">
                                            <label for="firstName" class="form-label">First Name</label>
                                            <input type="text" class="form-control" name="firstname" id="FirstName"
                                                placeholder="Your First Name" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="lastName" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" name="lastname" id="LastName"
                                                placeholder="Your Last Name" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="Email" name="email"
                                                placeholder="Your Email" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="selectCategory" class="form-label">Select Category</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="radio"
                                                    id="radioVip" value="VIP" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    VIP
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="radio"
                                                    id="radioPremium" value="Premium">
                                                <label class="form-check-label" type="radio" for="flexRadioDefault2">
                                                    Premium
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="radio"
                                                    id="radioBasic" value="Basic">
                                                <label class="form-check-label" type="radio" for="flexRadioDefault2">
                                                    Basic
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="phoneNumb" class="form-label">Phone Number</label>
                                            <input type="number" class="form-control" id="Phone" name="phone" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="datePicker" class="form-label">Requested Date</label>
                                            <input type="date" class="form-control" name="datepick" id="Date" required>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="message" class="form-label">Message</label>
                                            <textarea class="form-control" name="message" id="Message" cols="30"
                                                rows="10" required></textarea>
                                        </div>

                                        <div class="col-12 text-center">
                                            <button class="btn btn-primary" type="submit" id="">Show
                                                Result</button>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button class="btn btn-primary" type="reset"><a href="index.html"></a>Reset
                                                Fields</a></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>