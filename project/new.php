<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"> 

    <link rel="stylesheet" href="style.css">   

    <title>Hello, world!</title>
  </head>
  <body>
    
     <!-- start navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top" id="home">
     <a href="new.php" class="navbar-brand ">TAijul</a>
     <span class="navbar-text" >Customers happiness is our aim</span>
     <button type="button" class="navbar-toggler"
     data-toggle="collapse" data-target=#myMenu><span class="navbar-toggler-icon"></span> </button>
     <div class="collapse navbar-collapse" id="myMenu">
          <ul class=navbar-nav  pl-5> 
             <li class="nav-item"><a href="new.php" class="nav-link">home</a></li>
             <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
            
             <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
             <li class="nav-item"><a href="#login" class="nav-link">login</a></li>
             <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>    
         </ul>
     </div>
     
     </nav>
  <!-- finish navigation        -->
  <!-- start header -->
  <header class="jumbotron back" style="background-image:url(img/img.png)">
     <div class='heading myclass'>
         <h1 class="text-uppercase text-danger font-weight-bold">Welcome to Taijul</h1>
         <p class=>Customer's happiness is our aim</p>
         <a href="#" class="btn btn-success mr-4">LOgin</a>
         <a href="#" class="btn btn-danger mr-4">Sing in</a>
     </div>
   </header>
   <!-- end header -->
   <!-- introducrion -->
    <div class="container">
      <div class="jumbotron">
          <h3 class="text-center">Taijul</h3>
           <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et explicabo sequi molestias ducimus nesciunt quam facere aspernatur voluptate inventore quod ut commodi hic, nobis consectetur recusandae fugiat ipsam, voluptates laudantium.</p>
       </div>
    </div>
   

    <!-- start service  center -->
     <div class="container text-center border-bottom "id="Services">
         <h2>Our services</h2>
         <div class="row mt-4">
             <div class="col-sm-4">
                  <a href=""><i class="fas fa-tv fa-8x text-success"></i></a>
                  <h4 class=mt-4>Electronic Application</h4>
             </div>
             <div class="col-sm-4">
                  <a href=""><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
                  <h3 class='mt-4'>Preventive Maintenance</h3>
             </div>
             <div class="col-sm-4">
                  <a href=""><i class="fas fa-cogs fa-8x text-info"></i></a>
                  <h3 class="mt-4">Repair</h3>
             </div>
         </div>
     </div>
     <!-- end -->
     <!-- start registration -->
     <!-- form start -->
     <div class="container pt-5 " id="registration">
         <h2 class="text-center"> Create an Account</h2>
         <div class="row mt-4 mb-4">
             <div class="col-md-6 offset-md-3">
                 <form action="" class="shadow-lg"  method="POST" >
                     <div class="form-group">
                         <i class="fas fa-user"></i> <label for="name" class="font-weight-bold pl-2">Name</label>
                         <input type="text" class="form-control" placeholder="Name" name=rName>
                     </div>
                     <div class="form-group">
                         <i class="fas fa-user"></i> <label for="email" class="font-weight-bold pl-2">Email</label>
                         <input type="email" class="form-control" placeholder="Email" name=rEmail>
                         <small class="form-text">We'll never share your email with anyone.</small>
                     </div>
                     <div class="form-group">
                         <i class="fas fa-key"></i> <label for="pass" class="font-weight-bold pl-2">Password</label>
                         <input type="password" class="form-control" placeholder="Password" name=rPassword>
                     </div>
                     <button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" name="rSignup">Sign up</button>
                     <em style="font-size:10px">Note - By clicking sing Up,you agree our terms,Data Policy and cookie Policy</em>
                 </form>

             </div>

         </div>

     </div>
     <!-- end form -->
     <!-- card -->
     <div class="jumbotron bg-danger ">
         <div class="container">
             <h2 class="text-center text-white">Happy Customer</h2>
             <div class="row mt-5">
             <div class="col-lg-3 col-sm-6">  
                 <!-- 1st card        -->
                     <div class="card shadow-lg mb-2">
                         <div class="card-body text-center">
                             <img src="img/img2.png" alt="" class="img-fluid" style="border-redius:100px;" alt="avt1">
                              <h4 class="card-title">Mina</h4>
                              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto veniam blanditiis nesciunt voluptates, neque sapiente corrupti vero dolor praesentium recusandae.</p>
                         </div>

                     </div>
                 </div>
                 <!-- edn curt -->
                 <div class="col-lg-3 col-sm-6">
                     <div class="card shadow-lg mb-2">
                         <div class="card-body text-center">
                             <img src="img/img2.png" alt="" class="img-fluid" style="border-redius:100px;" alt="avt1">
                              <h4 class="card-title">Mina</h4>
                              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto veniam blanditiis nesciunt voluptates, neque sapiente corrupti vero dolor praesentium recusandae.</p>
                         </div>

                     </div>
                 </div>
                     <!-- edn curt --> 
                 <div class="col-lg-3 col-sm-6">
                     <div class="card shadow-lg mb-2">
                         <div class="card-body text-center">
                             <img src="img/img2.png" alt="" class="img-fluid" style="border-redius:100px;" alt="avt1">
                              <h4 class="card-title">Mina</h4>
                              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto veniam blanditiis nesciunt voluptates, neque sapiente corrupti vero dolor praesentium recusandae.</p>
                         </div>

                     </div>
                 </div>
                 <!-- edn curt -->
                 <div class="col-lg-3 col-sm-6">
                     <div class="card shadow-lg mb-2">
                         <div class="card-body text-center">
                             <img src="img/img2.png" alt="" class="img-fluid" style="border-redius:100px;" alt="avt1">
                              <h4 class="card-title">Mina</h4>
                              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto veniam blanditiis nesciunt voluptates, neque sapiente corrupti vero dolor praesentium recusandae.</p>
                         </div>

                     </div>
                 </div>
                 <!-- edn curt -->  

             </div>
         </div>

        </div> <!-- end happy customer-->
        <!-- contact us -->
        <div class="container " id="Contact">
            <h2 class="text-center mb-4">Contact us</h2>
            <div class="row">
                <div class="col-md-8">
                    <form action=""  method="post">
                        
                         <input type="text" class="form-control" placeholder="Name" name="name"><br>
                         <input type="text" class="form-control" placeholder="Subject" name="subject"><br>
                         <input type="email" class="form-control" placeholder="Email" name="email"><br>
                         <textarea class="form-control" name="message"  placeholder="How cae we help you" style="hight:150px"></textarea><br>
                         <input type="submit" class="btn btn-primary" value="send" name="submit"><br><br>
                    </form>
                </div>
                <!-- 1st culom -->
                <div class="col-md-4 text-center"> <!-- 2nd column-->
                <strong>Headquarter:</strong><br>
                Taijul pvt Ltd,<br>
                Dhaka,Bangladesh;<br>
                <a href="">www.taijul.com</a>
                <br> <br>
                <strong>Brances:</strong><br>
                Taijul pvt Ltd,<br>
                Dhaka,Bangladesh;<br>
                <a href="">www.taijul.com</a>
                </div>
                
            </div>
        </div>



    <!-- start footer -->
            <footer class=" bg-dark mt-5 text-white">
                <div class="container">
                  <div class="row py-3">
                <div class="col-md-6">
                  
                    <span clas="pr-2"> Follow us  </span>
                    <a href="" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
                    <a href="" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
                    <a href="" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
                    <a href="" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
                    <a href="" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
                </div>    <!--end 1st -->
                    <div class="col-md-6 text-right">
                  
                     <small>DEsigned by taijul &copy; 2019</small>
                     <small class="ml-2"><a href="">Admin login</a></small>
                     </div>
                  </div>

                </div>

            </footer>
                







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>