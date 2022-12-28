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
    
    
     </div>
     
     <h1 class="heading " >
        <h2 class="abc" style="color:white; padding: 95px; 
        font-family: 'Nunito', sans-serif;">ABOUT  </h2>
     </h1>
     
      
      
    
    
    <!-- about section starts  -->
    
    <section class="about " id="about">
    
 
      <div class="row">
    
          <div  class="image">
              <img style="width: 500px; height:289px; " src="../images/about us.jpg" alt="" width="90%">
          </div>
    
          <div class="content">
              <h3>About Karachi</h3>
              <p>Karachi  is the largest city in Pakistan and the twelfth-largest city in the world. It is the capital of the Pakistani province of Sindh. Ranked as a beta-global city, it is Pakistan's premier industrial and financial centre, with an estimated GDP of $164 billion (PPP) as of 2019.Karachi is Pakistan's most cosmopolitan city, linguistically, ethnically, and religiously diverse, as well as one of Pakistan's most secular and socially liberal cities.
                <br>
              <a href="aboutkarachi.html" class="btn">Read more</a>
          </div>
    
      </div>
    
    </section>
    
    <!-- about section ends -->
    
    <br>
    <br>
    <br>
    <br>
      
    
    <div class="container">
      <div class="section-title">
          <h1>Our Team </h1>
      </div>
    
      <div class="row">
    
     
    
          <div class="column">
              <div class="team">
                  <div class="team-img">
                      <img src="../images/wahib.jpg" alt="Team Image">
                  </div>
                  <div class="team-content">
                      <h2>M.Wahib Hussian</h2>
                      <h3>Developer</h3>
                      <p>I am wahib hussain and i am Developer i have 1 year experience in this field.</p>
                      <h4>Wahib2112d@gmail.com</h4>
                  </div>
                  <div class="team-social">
                      <a href="#" class="social-tw"> <i class="fab fa-twitter"></i></a>
                      <a href="#" class="social-fb"> <i class="fab fa-facebook-f"></i></a>
                      <a href="#" class="social-in"> <i class="fab fa-instagram"></i></a>
                  </div>
              </div>
          </div>
    
          <div class="column">
              <div class="team">
                  <div class="team-img">
                      <img src="../images/urba pic.png" alt="Team Image">
                  </div>
                  <div class="team-content">
                      <h2>Urba Fatima</h2>
                      <h3>Developer</h3>
                      <p>I am urba fatima and i am Developer i have 1 year experience in this field.</p>
                      <h4>urba2112d@gmail.com</h4>
                  </div>
                  <div class="team-social">
                      <a href="#" class="social-tw"> <i class="fab fa-twitter"></i></a>
                      <a href="#" class="social-fb"> <i class="fab fa-facebook-f"></i></a>
                      <a href="#" class="social-in"> <i class="fab fa-instagram"></i></a>
                  </div>
              </div>
          </div>
    
          <div class="column">
              <div class="team">
                  <div class="team-img">
                      <img src="../images/goutam kumar.jpg" alt="Team Image">
                  </div>
                  <div class="team-content">
                      <h2>Goutam Kumar</h2>
                      <h3>Developer</h3>
                      <p>I am goutam kumar and i am designer i have 1 year experience in this field.</p>
                      <h4>goutam2112d@gmail.com</h4>
                  </div>
                  <div class="team-social">
                      <a href="#" class="social-tw"> <i class="fab fa-twitter"></i></a>
                      <a href="#" class="social-fb"> <i class="fab fa-facebook-f"></i></a>
                      <a href="#" class="social-in"> <i class="fab fa-instagram"></i></a>
                  </div>
              </div>
          </div>
    
          <div class="column">
            <div class="team">
                <div class="team-img">
                    <img src="../images/saddam.jpg" alt="Team Image">
                </div>
                <div class="team-content">
                    <h2>Sir Saddam</h2>
                    <h3>Developer</h3>
                    <p>I am sir Saddam and i am  Developer  i have 5 year experience in this field.</p>
                    <h4>sadam@aptechgdn.net</h4>
                </div>
                <div class="team-social">
                    <a href="#" class="social-tw"> <i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-fb"> <i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-in"> <i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
      </div>
    
    </div>
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