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
    <?php
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];        
        $radioval = $_POST['radio'];
        $phone = $_POST['phone'];
        $date = $_POST['datepick'];
        $messagee = $_POST['message'];
    ?>
    <section style="padding-top: 100px; padding-bottom: 100px;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 ">
                                    <h1 class="text-center">Result</h1><br>
                                    <form class="row g-3" id="" method="post" action="result.php">
                                        <div class="col-md-12">
                                            <label for="firstName" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="FirstName"
                                                placeholder="Your First Name" value="<?php echo "$firstname" ?>" disabled>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="lastName" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="LastName"
                                                placeholder="Your Last Name" value="<?php echo "$lastname" ?>" disabled>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="Email"
                                                placeholder="Your Last Name" value="<?php echo "$email" ?>" disabled>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="selectCategory" class="form-label">Category : <?php echo ''.$radioval ?></label>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="phoneNumb" class="form-label">Phone Number</label>
                                            <input type="number" class="form-control" id="Phone" value="<?php echo "$phone" ?>" disabled>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="datePicker" class="form-label">Requested Date</label>
                                            <input type="date" class="form-control" id="Date" value="<?php echo "$date" ?>" disabled>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="message" class="form-label">Message</label>
                                            <textarea class="form-control" id="Message" cols="30"
                                                rows="10" disabled><?php echo "$messagee" ?></textarea>
                                        </div>
                                        <div class="col-12 text-center">
                                            <a href="javascript: history.back()" style="text-decoration: none; color: white; background-color: #0D6EFD; border-radius: 5px; display: inline-block; padding: 8px 32px;">Go back</a>
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
