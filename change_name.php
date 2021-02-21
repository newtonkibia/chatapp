<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Create Account</title>
    <?php include 'components/css.php' ?>
</head>
<body>
 <nav id="nav">

 </nav>

 <div class="chat-container">
     <section id="sidebar">
            <ul class="left-ul">
                 <li>
                     <a href="#" >
                         <span class="profile-img-span">
                             <img src="assets/img/profile.jpg" alt="profile pic" class="profile-img">
                        </span>
                    </a>
                </li>
                <li><a href="#">Kibira Newton <span class="cool-hover"></span></a></li>               
                <li><a href="change_password.php">Change Password <span class="cool-hover"></span></a></li>
                <li><a href="#">110 users online <span class="cool-hover"></span></a></li>
             </ul>
     </section>
     <!-- close sidebar -->

     <section id="right-area">
     <?php include 'components/change_name.php' ?>
         

     </section>
     <!-- close right area  -->

 </div>
 <!-- close chat container  -->


 <?php include 'components/js.php' ?> 
</body>
</html>