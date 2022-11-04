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