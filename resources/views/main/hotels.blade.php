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

<!-- packages section starts  -->

<!-- login form container  -->



<section class="packages" id="packages">

        <h1 class="heading">Hotels:</h1>
    
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/pc hotel.jpg" alt=""> 
                </div>
                <div class="content">
                    <h3>PEARL-CONTINENTAL
                        HOTELS </h3>
                        <div>  <h1 style="font-size:44x;">4.5</h1><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half" aria-hidden="true"></i></div>
                    <a href="https://goo.gl/maps/EarKkgqAZvgKQcni9" target="_blank"class="btn">Find location</a>
                    <div class="wrapper">
                        <a href="#demo-modal">Details</a>
                    </div>
                    </div>
            
              
                
                <div id="demo-modal" class="modal">
                    <div class="modal__content">
                        <h3>PEARL-CONTINENTAL
                            HOTELS</h3>
                
                        <p>
                            <p style="color:  #ec4e4f;">In the commercial center of south-central Karachi,
                                The 5-star Pearl Continental Hotel offers luxurious and modern rooms
                                </p>
                          
                            
                                <h3 style="text-align: left;"><!-- <i class="fas fa-clock"></i> --> timing:24hours</h3>
                                <h3 style="text-align: left;"><!--  <i class="fas fa-dollar-sign"></i> -->  price:PKR 5,500 /per night.</h3>
                                <h3 style="text-align: left;"><!-- <i class="fas fa-location"></i> --> location:Club Rd, opposite PIDC، Civil Lines, Karachi, Karachi.</h3>
                                <h3 style="text-align: left;">services:lunch,dinner,card payment,Transport.       
                                       
                                       </h3>
                           
                           
                        </p>
                
                        <div class="modal__footer">
                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">xplore Karachi</a>
                        </div>
                
                        <a href="#" class="modal__close">&times;</a>
                    </div>
                </div>
            </div>
         
            <div class="box">
                <div class="image">
                    <img src="images/movien.jpg" alt="">
                </div>
                <div class="content">
                    <h3>MÖVENPICK KARACHI</h3>
                    <div>  <h1 style="font-size:44x;">4.4</h1><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half" aria-hidden="true"></i></div>
                    <a href="https://g.page/movenpick-karachi?share" target="_blank" class="btn">Find location</a>
                    <div class="wrapper">
                        <a href="#demo-modalMovenpick">Details</a>
                    </div>
                </div>
              
                
                <div id="demo-modalMovenpick" class="modal">
                    <div class="modal__content">
                        <h3>MÖVENPICK KARACHI</h3>
                
                        <p>
 
                            <p style="color:#ec4e4f;" >Taste the good life at Mövenpick Hotels & Resorts, where every moment is designed to be savoured and every stay is full of possibilities to relish</p>
                                <h3 style="text-align: left; ">timing:24hours</h3>
                                <h3 style="text-align: left;"> <i class="fas fa-money"></i>price:PKR 8000/per night.</h3>
                                <h3 style="text-align: left;">location: Club Rd, Civil Lines Karachi, Karachi City, Sindh 75530</h3>
                                <h3 style="text-align: left;">services:EVENTS AND CELEBRATIONS,lunch,dinner,card payment,Transport.
                                       
                                       </h3>
                           
                           
                        </p>
                
                        <div class="modal__footer">
                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">xplore Karachi</a>
                        </div>
                
                        <a href="#" class="modal__close">&times;</a>
                    </div>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/hotel-mehran-karachi.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Hotel Mehran Karachi</h3>
                    <div>  <h1 style="font-size:44x;">3.9</h1><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half" aria-hidden="true"></i></div>
                    <a href="https://goo.gl/maps/M59NoMLKKhPLKtne9" target="_blank" class="btn">Find location</a>
                    <div class="wrapper">
                        <a href="#demo-modalMehran">Details</a>
                    </div>
                </div>
               
                
                <div id="demo-modalMehran" class="modal">
                    <div class="modal__content">
                        <h1>Hotel Mehran Karachi</h1>
                
                        <p>
                            <p style="color: #ec4e4f;">Ideally located in the heart of Karachi, Hotel Mehran, provide its guests an uncompromising level of services – personal yet efficient with a high level comfort.</p>
              
                                <h3 style="text-align: left;">timing:24hours</h3>
                                <h3 style="text-align: left;">price:PRK 15,820/per night</h3>
                                <h3 style="text-align: left;">location: Shahrah-e-Faisal, Karachi Cantonment Karachi, Karachi City, Sindh</h3>
                                <h3 style="text-align: left;">services:High speed Internet access, both wired and wireless Our 24-hour business center offers a wide range of services available round the Clock</h3>
                           
                           
                        </p>
                
                        <div class="modal__footer">
                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">Explore Karachi</a>
                        </div>
                
                        <a href="#" class="modal__close">&times;</a>
                    </div>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/avari-towers-karachi.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Avari Towers Karachi</h3>
                   
                    <div>  <h1 style="font-size:44x;">4.6</h1><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half" aria-hidden="true"></i></div>         
                    <a href="https://goo.gl/maps/NqYcfPemiKpSR5S49" target="_blank" class="btn">Find location</a>
                    <div class="wrapper">
                        <a href="#demo-karachi">Details </a>
                    </div>
                </div>
            
                
                <div id="demo-karachi" class="modal">
                    <div class="modal__content">
                        <h1>Avari Towers Karachi</h1>
                
                        <p>
                            <p style="color: #ec4e4f;">Avari Tower features an outdoor pool, spa and fitness centre. Offering modern air conditioned rooms,</p>
                            
                                <h3 style="text-align: left;">timing:24-hour</h3>
                                <h3 style="text-align: left;">price:PKG-28,450/ per night</h3>
                                <h3 style="text-align: left;">location:242, Avari Towers Main Building, 244 Fatima Jinnah Rd, Karachi Cantonment, Karachi, Karachi City, Sindh 75530</h3>
                                <h3 style="text-align: left;">services:Avari Tower features an outdoor pool, spa and fitness centre. Offering modern air conditioned rooms, the property provides free WiFi in all areas. It is 15 km from Jinnah Airport</h3>
                           
                           
                        </p>
                
                        <div class="modal__footer">
                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">Explore Karachi</a>
                        </div>
                
                        <a href="#" class="modal__close">&times;</a>
                    </div>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/ramdan4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Ramada Plaza Hotel</h3>

                    <div>  <h1 style="font-size:44x;">3.5</h1><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half" aria-hidden="true"></i></div>         
                    <a href="https://goo.gl/maps/DYLSquN1GztAYniX9" target="_blank" class="btn">Find location</a>
                    <div class="wrapper">
                        <a href="#demo-plaza">Details </a>
                    </div>
                </div>
             
                
                <div id="demo-plaza" class="modal">
                    <div class="modal__content">
                        <h1>Ramada Plaza Hotel</h1>
                
                        <p>
                            <p style="color: #ec4e4f;">The Jinnah International Airport and Railway Station is 2.4 km away from Ramada Plaza</p>
                            
                                <h3 style="text-align: left;">timing:24-hours</h3>
                                <h3 style="text-align: left;">price:PRG-27,119/Per Night</h3>
                                <h3 style="text-align: left;">location:Star Avenue, Terminal No 1, Jinnah International Airport، Karachi, 75530</h3>
                                <h3 style="text-align: left;">services:Kick start your morning with Ramada Plaza Karachi. Make your mornings more delightful and add some energetic spice for the day started. Ramada Plaza Karachi offers a breakfast buffet only for 2100/- Plus Tax from 7:30 am- 10:30 am. So join us to start your day with more energy.</h3>
                           
                           
                        </p>
                
                        <div class="modal__footer">
                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">xplore Karachi</a>
                        </div>
                
                        <a href="#" class="modal__close">&times;</a>
                    </div>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/beach hotel.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Beach Luxury Hotel</h3>
                    
                    <div>  <h1 style="font-size:44x;">4.4</h1><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half" aria-hidden="true"></i></div>         
                    <a href="https://g.page/BeachLuxury?share" target="_blank" class="btn">Find location</a>
              
                <div class="wrapper">
                    <a href="#demo-beach">Details </a>
                </div>
            </div>
                <div id="demo-beach" class="modal">
                    <div class="modal__content">
                        <h1>Beach Luxury Hotel</h1>
                
                        <p>
                            <p style="color: #ec4e4f;">Featuring free WiFi, Gym and an outdoor pool, Beach Luxury Hotel offers a 4 star accommodation in Karachi. </p>
                            
                                    <h1 style="text-align: left;">timing:24-hours</h1>
                                    <h3 style="text-align: left;">price:PKG-18,56/Per Night</h3>
                                    <h3 style="text-align: left;">location: Moulvi Tamizuddin Khan Rd, Lalazar Karachi, Karachi City, Sindh 74000</h3>
                                    <h3 style="text-align: left;">services:Featuring free WiFi, Gym and an outdoor pool, Beach Luxury Hotel offers a 4 star accommodation in Karachi. Guests can enjoy the on-site restaurant. Free private parking is available on site</h3>
                               
                           
                        </p>
                
                        <div class="modal__footer">
                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">xplore Karachi</a>
                        </div>
                
                        <a href="#" class="modal__close">&times;</a>
                    </div>
                </div>
            </div>
            
            <div class="box">
                <div class="image">
                    <img src="images/swisstel-cottage-image-1-medium.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Swisstel Cottage</h3>
                    
                    <div>  <h1 style="font-size:44x;">4.3</h1><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half" aria-hidden="true"></i></div>         
                    <a href="https://g.page/SwissTelCottageHotel?share" target="_blank" class="btn">Find location</a>
              
                <div class="wrapper">
                    <a href="#demo-Swisstel">Details </a>
                </div>
            </div>
                <div id="demo-Swisstel" class="modal">
                    <div class="modal__content">
                        <h1>Swisstel Cottage</h1>
                
                        <p>
                            <p style="color: #ec4e4f;">Set in the Clifton district of Karachi, Swisstel Cottage offers a garden and a terrace. With free WiFi, this 5-star hotel offers a 24-hour front desk and room service. The hotel has family rooms</p>
                            
                                    <h1 style="text-align: left;">timing:24-hours</h1>
                                    <h3 style="text-align: left;">price:PKR 9,129</h3>
                                    <h3 style="text-align: left;">location:Plot C، 20 Street 32nd،, Block 4 Clifton, Karachi, Karachi City, Sindh 75500 </h3>
                                    <h3 style="text-align: left;">services:Free WiFi Room service Family rooms Non-smoking rooms Good breakfast</h3>
                               
                           
                        </p>
                
                        <div class="modal__footer">
                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">xplore Karachi</a>
                        </div>
                
                        <a href="#" class="modal__close">&times;</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/ambaince.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Ambiance Boutique Art Hotel
                    </h3>
                    
                    <div>  <h1 style="font-size:44x;">4.8</h1><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half" aria-hidden="true"></i></div>         
                    <a href="https://goo.gl/maps/13njTRn3fcphmCEUA" target="_blank" class="btn">Find location</a>
              
                <div class="wrapper">
                    <a href="#demo-Ambiance">Details </a>
                </div>
            </div>
                <div id="demo-Ambiance" class="modal">
                    <div class="modal__content">
                        <h1>Ambiance Boutique Art Hotel</h1>
                
                        <p>
                            <p style="color: #ec4e4f;">mbiance Boutique Art Hotel has a restaurant, shared lounge, a garden and terrace in Karachi. This 5-star hotel offers a concierge service. The accommodation features a 24-hour front desk and room service for guests</p>
                            
                                    <h1 style="text-align: left;">timing:24-hours</h1>
                                    <h3 style="text-align: left;">price:PKR 20,500</h3>
                                    <h3 style="text-align: left;">location:F-177, Block 5 Clifton, Karachi, Karachi City, Sindh 75600 </h3>
                                    <h3 style="text-align: left;">services:Most popular facilities
                                        Airport shuttle Room service Non-smoking rooms Free parking Family rooms Restaurant Tea/coffee maker in all rooms Breakfas</h3>
                               
                           
                        </p>
                
                        <div class="modal__footer">
                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">xplore Karachi</a>
                        </div>
                
                        <a href="#" class="modal__close">&times;</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/Hotel Excelsior Karachi.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Hotel Excelsior Karachi</h3>
                    <div>  <h1 style="font-size:44x;">4.4</h1><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half" aria-hidden="true"></i></div>         
                    <a href="https://goo.gl/maps/B7bVjDe5pQ9owiJ59" target="_blank" class="btn">Find location</a>
              
                <div class="wrapper">
                    <a href="#demo-Excelsior">Details </a>
                </div>
            </div>
                <div id="demo-Excelsior" class="modal">
                    <div class="modal__content">
                        <h1>Hotel Excelsior Karachi</h1>
                
                        <p>
                            <p style="color: #ec4e4f;">Hotel Excelsior Karachi is situated in Karachi, in the Saddar Town district. Among the facilities of this property are a restaurant, a 24-hour front desk and room service, along with free WiFi. The hotel has family rooms.</p>
                            
                                    <h1 style="text-align: left;">timing:24-hours</h1>
                                    <h3 style="text-align: left;">price:PKR 140,500</h3>
                                    <h3 style="text-align: left;">location: Plot SB-21، Sarwar Shaheed Rd, opposite Atrium Mall، Saddar Town، Karachi, 75600 </h3>
                                    <h3 style="text-align: left;">services: Free WiFi Room service Free parking Family rooms Non-smoking rooms Tea/coffee maker in all rooms Good breakfast</h3>
                               
                           
                        </p>
                
                        <div class="modal__footer">
                            Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">xplore Karachi</a>
                        </div>
                
                        <a href="#" class="modal__close">&times;</a>
                    </div>
                </div>
            </div>
          
        </div>
    
    </section>



    <div class="scroll-button">
        <button onclick="scrollBtn()" id="scroll-btn"><i class="fa fa-arrow-up"  ></i></button>
    </div>

    </body>
    </html>
@endsection
