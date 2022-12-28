@extends("main.layout")



@section("main")




<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Karachi</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="../main/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/mazar-e-quaid (1).png"> 
    
</head>

    

<body>
    

<!-- contact section starts  -->






<h1 class="heading1 " >
        <h2 class="acb" style="color:white; padding: 90px;">CONTACT US </h2>
     </h1>


 
 <h1 class="heading" style="text-align:center;">
  <!--   <h2 >Contact Us</h2> -->
 </h1>

 

     
<section   class="contact coverpage" id="contact">
    
  

<div class="row"style="margin-top:40px;">
    <form id="frm">
            
        <h2 style="
        font-family: 'Nunito', sans-serif;">contact us:</h2>
        
        <p style="color: #ec4e4f; font-style:normal; font-size: 20px;">We are available to answer all your questions.</p>
        <div class="inputBox">
            <input type="text" name="name" id="nameid" placeholder="Name" required>
           
        </div>
        <div class="inputBox">
            <input type="email" name="email" id="emailid" placeholder="Email" required>
        </div>
        <div class="inputBox">
            <input type="number" name="number" id="numberid" placeholder="Number" required>
           
        </div>
        
        <textarea placeholder="Message" type="message" id="messid" cols="30" rows="10" required></textarea>
        <input type="submit" class="btn" value="send message" onclick="con()">
        
    </form>
    

    <div class="section-title">
        <h1 style="
        font-family: 'Nunito', sans-serif;">Our location </h1>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462118.02491053584!2d67.15546194999999!3d25.193202399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh!5e0!3m2!1sen!2s!4v1655122995090!5m2!1sen!2s" width="1290" height="570"  style="border:0;  ;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>
   
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
</section> 


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<div class="scroll-button">
        <button onclick="scrollBtn()" id="scroll-btn"><i class="fa fa-arrow-up"  ></i></button>
    </div>

    
</body>
</html>




@endsection