<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS Files/contact.css">
     

    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/ccbeb067ed.js" crossorigin="anonymous"></script> 
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!--BOotstrap Js-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../JavaScript Files/portfolio.js"></script>

    <title>Document</title>
</head>
<body>


    <div class="container pt-3">
        <div class="row">
            <div class="col-6 d-flex justify-content-start align-items-center">
                <!-- <i class="fas fa-code fa-2x text-warning pb-3"></i> -->
                <img src="../images/blot-letter-j-black-and-white-vector-20401280-removebg-preview.png" alt="letter J" style="width: 80px; background-color: #f5ba09; border-radius: 50px;">
                <h5 class="text-white d-inline pl-2">La Jenn</h5>
            </div>
            <div class="col-6 pt-2" id="navbar_items">
                <div class="row">
                   
                     <div class="col-2">
                        <a href="#projects" class="text-white navigation-link"></a>
                    </div>
                    <div class="col-2">
                        <a href="./resume.html" class="text-white navigation-link"></a>
                    </div>
                    <div class="col-2">
                        <a href="#skills" class="text-white navigation-link"></a>
                    </div>
                    <div class="col-2">
                        <a href="./resume.html" class="text-white navigation-link" target="_blank"></a>
                    </div>
                    <!-- use flex end to send back to home to the end -->
                    <div class="col-4">
                        <a href="#about" class="text-white navigation-link">Back to home</a>
                    </div> 
                    
                   
                   
                </div>
            </div>
        </div>
    </div>

    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-2"> <i id="icons" class="far fa-id-card"></i> <br>Contact Form</h3>                                  

                                </div>
                                <div class="card-body"> 
                                        <span class="d-flex justify-content-center"><h4 class="text-wrap">Thanks for taking the time to reach out. <br> How can I help you today?</h4></span>   
                                <h4 class="sent-notification"></h4>
                                    <form  action="process.php" method="post" id="myForm">
                                        <div class="form-row p-2 m-2">
                                            <div class="col-md-6">
                                                <div class="form-group p-2 m-2">
                                                    <i id="icons" class="fas fa-file-signature fa-2x"></i>
                                                    <label class="medium mb-1" for="name">Name</label>
                                                    <input class="form-control py-4" id="name" type="text" name="name" required/>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group p-2 m-2">
                                                    <i id="icons"  class="fas fa-envelope-square fa-2x"></i>
                                                    <label class="medium mb-1" for="email">Email</label>
                                                    <input class="form-control py-4" id="email" type="text" name="email" required/>
                                                </div>
                                            </div>
                                      </div>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="form-group p-2 m-2">
                                                    <i id="icons" class="fas fa-book-reader fa-2x"></i>
                                                    <label class="medium mb-1" for="subject">Subject</label>
                                                    <input class="form-control py-4" id="subject" type="text" name="subject" required/>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-row">
                                            <div class="col-md-12">
                                                    <i id="icons"  class="fas fa-envelope fa-2x"></i>
                                                    <label for="comment">Message:</label>
                                                    <textarea class="form-control" rows="5" id="message" name="message" required></textarea>    
                                            </div>
                                        <!-- <button type="button"  name="submit" id="submit" class="btn-lg text-white font-weight-bold"> Submit</button> -->
                                        <input id="submit" type="submit"  class="btn-lg text-white font-weight-bold" onclick="sendEmail()" value="Submit">
                                    </form>

                                    
                                    <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
                                    <script type="text/javascript">
                                        function sendEmail(){
                                            var name = $("#name");
                                            var email = $("#email");
                                            var subject = $("#subject");
                                            var message = $("#message");

                                            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(message)) {
                                                $.ajax({
                                                    url:'process.php',
                                                    method: 'POST',
                                                    dataType: 'json',
                                                    data:{
                                                        name: name.val(),
                                                        email: email.val(),
                                                        subject: subject.val(),
                                                        message: message.val(),
                                                    }, success: function(response){
                                                        $('#myForm')[0].reset();
                                                        $('.sent-notification').text("Message sent successfully.");
                                                    }
                                                })
                                            }
                                        }
                                        function isNotEmpty(caller) {
                                            if (caller.val()=="") {
                                                caller.css('border','1px solid red');
                                                return false;
                                            }else
                                            {
                                                caller.css('border', '');
                                                return true;    
                                            }
                                        }
                                    </script>


<script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</body>
</html>