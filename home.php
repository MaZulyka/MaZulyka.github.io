
 <!-- Header-->
 <header class="bg-dark py-5" id="main-header">
    <div class="container h-100 d-flex align-items-end justify-content-center w-100">
        <div class="text-center text-white w-100">
            <h1 class="title display-4 fw-bolder"><?php echo $_settings->info('name') ?></h1>
            <p class="lead fw-normal text-white-50 mb-0" >
                <p class="text12">Having issues with your vehicle?</p>
                <br>
                <p class="text12">We can come to your house as soon as possible and we will diagnose the problem(s) for you. We have a wide range of services and carry top-of-the-line products to accompany them. </p></p>
            <div class="col-auto mt-2">
                <button class="btn1  btn-primary " id="send_request" type="button">Send Service Request</button>
            </div>
        </div>
    </div>
</header>
<!--------------------------------------------------Services---------------------------------------------------------------------->
<section id="service" class="py-5">
<div class="title-text" >
            <p>SERVICES</p>
            <h1>Services We Offer</h1>
            <br>
            <br>
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row">
            <div class="col-md-4">
                <h3 class="text-center">We Do Service For:</h3>
                <hr class="bg-primary opacity-100">
                <ul class="list-group" align="left">
                    <?php 
                    $category = $conn->query("SELECT * FROM `categories` where status = 1 order by `category` asc");
                    while($row=$category->fetch_assoc()):
                    ?>
                    <li class="list-group-item"><b><?php echo $row['category'] ?></b></li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="col-md-8">
                <h3 class="text-center">Our Services</h3>
                <hr class="bg-primary opacity-100">
                <div class="form-group">
                <div class="input-group mb-3">
                    <input type="search" id="search" class="form-control" placeholder="Search Service Here" aria-label="Search Service Here" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text bg-primary" id="basic-addon2"><i class="fa fa-search"></i></span>
                    </div>
                </div>
                </div>
                <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-xl-2" id="service_list" align="left">
                    <?php 
                    $services = $conn->query("SELECT * FROM `service_list` where status = 1 order by `service`");
                    while($row= $services->fetch_assoc()):
                        $row['description'] = strip_tags(html_entity_decode(stripslashes($row['description'])));
                    ?>
                    <a class="col item text-decoration-none text-dark view_service" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">
                        <div class="callout callout-primary border-p rounded-0">
                            <dl>
                                <dt><?php echo $row['service'] ?></dt>
                                <dd class="truncate-3 text-muted lh-1"><small><?php echo $row['description'] ?></small></dd>
                            </dl>
                        </div>
                    </a>
                    <?php endwhile; ?>
                </div>
                <div id="noResult" style="display:none" class="text-center"><b>No Result</b></div>
            </div>
        </div>
    </div>
</section>
<!--------------------------------------------------Features---------------------------------------------------------------------->
        
<section id="feature">
            <div class="title-text">
            <p>FEATURES</p>
            <h1>Why Choose Us</h1>
            </div>

            <div class="feature-box">
                <div class="features">
                    <h1> Our Teams </h1>
                    <div class="features-desc">
                        <div class="feature-icon">
                            <i class="fa fa-shield" aria-hidden="true"></i>
                        </div>
                        <div class="feature-text">
                            <p> Our skilled mechanics will provide you with full service and quality repairs for all your vehicles needs.</p>
                        </div class=>
                    </div>

                    <h1> Pre Booking </h1>
                    <div class="features-desc">
                        <div class="feature-icon">
                            <i class="fa fa-check-0-o"></i>
                        </div>
                        <div class="feature-text">
                            <p> Book a service online 24/7. Our mechanics will come to your home or anytime and anywhere.</p>
                        </div class=>
                    </div>

                    <h1> Affordable Cost </h1>
                    <div class="features-desc">
                        <div class="feature-icon">
                            <i class="fa fainf"></i>
                        </div>
                        <div class="feature-text">
                            <p> E-Repair Express can reduce unnecessary expenses due to incorrect estimates, unneccessary replacements and etc.</p>
                        </div class=>
                    </div>
                    
                </div>
                <div class="features-img">
                    <img src="img/pico.jpg">
                </div>
            </div>
</section>
<!--------------------------------------------------Location---------------------------------------------------------------------->
        
<section id="location">
            <div class="title-text">
            <p>LOCATION</p>
            <h1>Where to find us</h1>
            </div>

            <div class="location-row">
                <div class="location-col">
                    <div class="user">
                        
                        <div class="user-info">
                            <h3> <b>Address</b></h3>
                            <br><p><b>Main Branch:</b> Brgy. Dita Lang, Ilocos Norte</p>
                            
                        </div>
                    </div>
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242608.25906053456!2d120.3149247328125!3d18.
                        1752406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x338ec7da60b46117%3A0xb83ac322b6d041f1!2sECF%20Auto%20Repair%
                        20Shop!5e0!3m2!1sen!2sph!4v1670665725840!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                </div>
                
                <div class="location-col">
                    <div class="user">
                        
                        <div class="user-info">
                            <h3> <b>Address</b></h3>
                            <br><p>Brgy. Ditditam Ilocos Norte Ilocos Norte</p>
                            
                        </div>
                    </div>
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242608.25906053456!2d120.3149247328125!3d18.
                        1752406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x338ec7da60b46117%3A0xb83ac322b6d041f1!2sECF%20Auto%20Repair%
                        20Shop!5e0!3m2!1sen!2sph!4v1670665725840!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                </div>
                


            </div>


</section>
<!--------------------------------------------PRICIIIIIINNNNGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG---------------------------------------------------------------------------->
        
<section id="feature">
            <div class="title-text">
            <p>PRICING</p>
            <h1>Fair and Transparent Pricing</h1>
            </div>

            
            
    </div>
</section>
<!--------------------------------------------------REVIEWS---------------------------------------------------------------------->
<section id="testimonial">
            <div class="title-text">
            <p>REVIEWS</p>
            <h1>What Client Says</h1>
            </div>
            <div class="testimonial-row">
                <div class="testimonial-col">
                    <div class="user">
                        <img src="img/1.jpg">
                        <div class="user-info">
                            <h4> <b>Sheika Basilio</b></h4>
                        </div>
                    </div>
                    <p>Mhart is a very honest, understanding mechanic, he did a great job with fixing an educating me with issues with my car.
                        His knowledge and professionalism was impressive and I'm very happy with the appointment.</p>
                </div>
                    
                <div class="testimonial-col">
                <div class="user">
                        <img src="img/2.jpg">
                        <div class="user-info">
                            <h4> <b>Crissa Mae Arucan </b></h4>
                        </div>
                    </div>
                    <p>Well professional Staff with good knowledge of vehicles and explaining the process with very good price. The staff
                        shows up in good timing and executes the job perfectly! They made sure everything was in top notch condition. Highly Recommended!</p>
                </div>

                <div class="testimonial-col">
                <div class="user">
                        <img src="img/3.jpg">
                        <div class="user-info">
                            <h4> <b>Jhona Padamada </b></h4>
                        </div>
                    </div>
                    <p> Voz did, what he could to figure out, my problem with Suv. He is very reliable, respectful and knowledgeable. 
                        I will choose him again to work in my other vehicles. Thank you, keep the work.</p>
                    </div>
            </div>
          
</section>


<script>
    $(function(){
        $('#search').on('input',function(){
            var _search = $(this).val().toLowerCase().trim()
            $('#service_list .item').each(function(){
                var _text = $(this).text().toLowerCase().trim()
                    _text = _text.replace(/\s+/g,' ')
                    console.log(_text)
                if((_text).includes(_search) == true){
                    $(this).toggle(true)
                }else{
                    $(this).toggle(false)
                }
            })
            if( $('#service_list .item:visible').length > 0){
                $('#noResult').hide('slow')
            }else{
                $('#noResult').show('slow')
            }
        })
        $('#service_list .item').hover(function(){
            $(this).find('.callout').addClass('shadow')
        })
        $('#service_list .view_service').click(function(){
            uni_modal("Service Details","view_service.php?id="+$(this).attr('data-id'),'mid-large')
        })
        $('#send_request').click(function(){
            uni_modal("Fill the Service Request Form","send_request.php",'large')
        })

    })
    $(document).scroll(function() { 
        $('#topNavBar').removeClass('bg-transparent navbar-dark bg-primary')
        if($(window).scrollTop() === 0) {
           $('#topNavBar').addClass('navbar-dark bg-transparent')
        }else{
           $('#topNavBar').addClass('navbar-dark bg-primary')
        }
    });
    $(function(){
        $(document).trigger('scroll')
    })
</script>

<style>
    .btn1{
        width: 200px;
        height: 50px; 
    }
    .title {
        font-size:90px ;
    }   
    .text12{
        font-size: 20px;
    }
    
#feature{
    width: 100%;
    padding: 70px 0;
    background:  #EDEDED;
}

.title-text{
    text-align: center;
    padding-bottom: 70px;
}
.title-text p{
    margin: auto;
    font-size: 20px;
    color: #0d6efd;
    font-weight: bold;
    position: relative;
    z-index: 1;
    display: inline-block;
}

.title-text h1{
    font-size: 50px ;
}

.feature-box{
    width:80%;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    text-align: center;
}
.features{
    flex-basis: 50%;
}
.features-img{
    flex-basis: 50%;
    margin: auto;
}
.features-img img{
    width: 100%;
    border-radius: 10px;
}
.features h1{
    text-align: left;
    margin-bottom: 10px;
    font-weight: 100;
    color: #0d6efd ;
}
.features-desc{
    display: flex;
    align-items: center;
    margin-bottom: 40px;
}
.feature-icon .fa{
    width: 50px;
    height: 50px;
    font-size: 30px;
    line-height: 50px;
    border-radius: 50px;
    color: #0d6efd ;
    border: 1px solid #0d6efd;
}
.feature-text p{
    padding:0 20px;
    text-align: initial;

}

#testimonial{
    width: 100%;
    padding: 70px 0;
    background: white;
}
.testimonial-row{
    width: 80%;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap;
}
.testimonial-col{
    flex-basis: 30%;
    padding: 30px;
    margin-bottom: 30px;
    border-radius: 5px;
    box-shadow: 0 10px 20px 3px #5f7faf;;
    cursor:pointer;
    transition: transform .5s;
    background-color: white;
}
.testimonial-col p{
    font-size: 14px;

}
.user{
    display: flex;
    align-items: center;
    margin: 20px 0;
    
}
.user img{
    width: 90px;
    margin-right:20px;
    border-radius: 3px;
}
.testimonial-col:hover{
    transform: translateY(-7px);
}
.user-info{
    font-size: 5px;
}
#location{
    width: 100%;
    padding: 70px 0;
    background:  white;
}
.location-row{
    width: 50%;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap;
}
.location-col{
    flex-basis: 30%;
    padding: 30px;
    margin-bottom: 30px;
    border-radius: 5px;
    box-shadow: 0 10px 20px 3px #5f7faf;;
    cursor:pointer;
    transition: transform .5s;
    background-color: white;
}
.location-col p{
    font-size: 14px;

}
.location:hover{
    transform: translateY(-7px);
}
.location-col:hover{
    transform: translateY(-7px);
}



</style>