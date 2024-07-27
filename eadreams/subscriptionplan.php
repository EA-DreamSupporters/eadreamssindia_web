<!-- Teeny Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/teenyicons@latest/dist/teenyicons.min.css">

<style>
.card {
    border-radius: 50px !important;
    border: none !important;    
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.card:hover {
    transition: .5s;
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
}

.card-header {
    border-radius: 50px 50px 0 0 !important;
    background-color: #eaa451;
    display: flex;
    justify-content: center;
    height: 100px;
}

.card-foote1 {
    height: 70px;
    border-radius: 0px 0px 40px 40px !important;
    background-color: blue;
}
.card-foote2 {
    height: 70px;
    border-radius: 0px 0px 40px 40px !important;
    background-color: blue;
}
.card-foote3 {
    height: 70px;
    border-radius: 0px 0px 40px 40px !important;
    background-color: blue;
}
.card__list-icon {
    color: #eaa451;
}

.select {
    border-top: 1px solid rgba(0, 0, 0, 0.5);
    border-bottom: 1px solid rgba(0, 0, 0, 0.5);
}

.f-select {
    border: none;
    color: green;
    font-weight: 500;
}

.pa {
    top: -18px;
}

.custom-badge1 {
  background-color: #C5FFBC;
  color: #128400;
  padding-top: 3px; /* Adjust padding as needed */
  padding-bottom: 3px;
  padding-left: 8px;
  padding-right: 8px;
  border-radius: 5px; /* Adjust border-radius as needed */
}

.custom-badge2 {
  background-color: #BF3E00;
  color: #FFC028;
  padding-top: 3px; /* Adjust padding as needed */
  padding-bottom: 3px;
  padding-left: 8px;
  padding-right: 8px; /* Adjust padding as needed */
  border-radius: 5px; /* Adjust border-radius as needed */
}
.custom-badge3 {
  background-color: #0E9AFF;
  color: #BBE2FF;
  padding-top: 3px; /* Adjust padding as needed */
  padding-bottom: 3px;
  padding-left: 8px;
  padding-right: 8px;
  border-radius: 5px; /* Adjust border-radius as needed */
}
.custom-badge-btn {
  background-color: #fff;
  color: #000;
  height: 2.5rem;
  align-items: center;
  justify-content: center;
  position: relative;
  margin-bottom: 20px ;
  border-radius: 60px;
  border: none;
  cursor: pointer; /* Adjust border-radius as needed */
}

.bg-warning-white {
    background-color: #ffffff;
}
.text-white1 {
    font-weight: bold;
  color: black; /* Or any desired color */
}
.rounded-box{    
	border-radius:60px;
	box-shadow:none;				
	background:#fff;
	color:#000;
}
</style>
<section class="container my-5">
    <div class="section-head text-center" style="margin-bottom: 100px;">
        <h2 class="title">Plans & Pricing</h2>
        <p>A Comprehensive Preparation Management to Excel in government exam by covering syllabus and focusing on
            enhancing knowledge, Skills & Strategies for Success.</p>
    </div>

    <div class="row g-4">




        <div class="col-md-4">

            <div class="card h-100">
                <div class="card-header" style="background-color:#191919;">
                    <img src="images/background/Fresh.svg" alt="" height="150px" width="200px">
                </div>
                <div class="card-body">

                    <div class="text-center">
                        <span class="custom-badge1" style="font-size:14.75px; font-family:Outfit;">Best for Freshers</span>
                    </div>

                    <ul class="list-group mt-2">

                        <li class="d-flex align-items-baseline" style="margin-top:10px;">
                            <i class="fas fa-circle-check text-success me-2"></i>
                            <p class="card__list-description" style="font-family:Outfit;">Career Counselling</p>
                        </li>
                        <li class="d-flex align-items-baseline">
                            <i class="fas fa-circle-check text-success me-2"></i>
                             <ul class="card__list-description" style="font-family:Outfit;">
                                <li>Bundle Kit</li>
                                <li class="card__list-subtitle"style="font-family:Outfit;">• Standard Books</li>
                                <li class="card__list-subtitle"style="font-family:Outfit;">• Stationary</li>
                                <li class="card__list-subtitle"style="font-family:Outfit;">• Sheets</li>
                             </ul>
                        </li>                      
                        
                        <li class="d-flex align-items-baseline" style="margin-top:10px;">
                            <i class="fas fa-circle-check text-success me-2"></i>
                            <p class="card__list-description"style="font-family:Outfit;">Personalised Support</p>
                        </li>
                        <li class="d-flex align-items-baseline">
                            <i class="fas fa-circle-check text-success me-2"></i>
                            <p class="card__list-description"style="font-family:Outfit;">Weekly Q/P Subscriptions</p>
                        </li>
                        <li class="d-flex align-items-baseline">
                            <i class="fas fa-circle-check text-success me-2"></i>
                            <p class="card__list-description"style="font-family:Outfit;">Test Packs</p>
                        </li>
                        <li class="d-flex align-items-baseline">
                            <i class="fas fa-circle-check text-success me-2"></i>
                            <p class="card__list-description"style="font-family:Outfit;">Weekly Doubt Clarification</p>
                        </li>
                        <li class="d-flex align-items-baseline">
                            <i class="fas fa-circle-check text-success me-2"></i>
                            <p class="card__list-description"style="font-family:Outfit;">Joblication</p>
                        </li>
                        <li class="d-flex align-items-baseline">
                            <i class="fas fa-circle-check text-success me-2"></i>
                            <p class="card__list-description"style="font-family:Outfit;">Membership - Club Activity</p>
                        </li>

                    </ul>



                </div>
                <div class="select py-1 d-flex justify-content-center align-items-center">

                    <select name="" id="" class="f-select">
                        <option value="">Select 1</option>
                        <option value="">Select 2</option>
                        <option value="">Select 3</option>
                    </select>

                </div>

                <div
                    class="card-foote1 mt-5 pt-3 d-flex flex-wrap align-items-center justify-content-evenly position-relative" style="background: linear-gradient(to bottom, #1FDD00 0%, #1DB006 100%);">
                    <button class="custom-badge-btn align-items-center "><span class="text-center h6 p-2 text-white1">₹ 2000 / 3 month</span></button>                                  
                    <p class="text-light text-decoration-line-through" style="font-weight:normal; font-size:18px; margin-right: 30px;">&#8377; 5000</p>
                </div>
                
                

            </div>

        </div>

        <div class="col-md-4">

            <div class="card h-100">
                <div class="card-header" style="background-color:#191919;">
                    <img src="images/background/plus.svg" alt="" height="190px" width="200px">
                </div>
                <div class="card-body">

                    <div class="text-center">
                        <span class="custom-badge2" style="font-size:14.75px; font-family:Outfit;">Best for Experienced  2Yrs+</span>
                    </div>

                     <ul class="list-group mt-2">

                        <li class="d-flex align-items-baseline" style="margin-top:10px;">
                            <i class="fas fa-circle-check text-success me-2"></i>
                            <p class="card__list-description" style="font-family:Outfit;">Career Counselling</p>
                        </li>                                       
                        
                        <li class="d-flex align-items-baseline">
                            <i class="fas fa-circle-check text-success me-2"></i>
                            <p class="card__list-description"style="font-family:Outfit;">Personalised Support</p>
                        </li>
                        <li class="d-flex align-items-baseline">
                            <i class="fas fa-circle-check text-success me-2"></i>
                            <p class="card__list-description"style="font-family:Outfit;">Weekly Q/P Subscriptions</p>
                        </li>
                        <li class="d-flex align-items-baseline">
                            <i class="fas fa-circle-check text-success me-2"></i>
                            <p class="card__list-description"style="font-family:Outfit;">Test Packs</p>
                        </li>
                        <li class="d-flex align-items-baseline">
                            <i class="fas fa-circle-check text-success me-2"></i>
                            <p class="card__list-description"style="font-family:Outfit;">Weekly Doubt Clarification</p>
                        </li>
                        <li class="d-flex align-items-baseline">
                            <i class="fas fa-circle-check text-success me-2"></i>
                            <p class="card__list-description"style="font-family:Outfit;">Joblication</p>
                        </li>
                        <li class="d-flex align-items-baseline">
                            <i class="fas fa-circle-check text-success me-2"></i>
                            <p class="card__list-description"style="font-family:Outfit;">Membership - Club Activity</p>
                        </li>

                    </ul>

                </div>
                <div class="select py-1 d-flex justify-content-center align-items-center">

                    <select name="" id="" class="f-select">
                        <option value="">Select 1</option>
                        <option value="">Select 2</option>
                        <option value="">Select 3</option>
                    </select>

                </div>

                <div
                    class="card-foote2 mt-5 pt-3 d-flex flex-wrap align-items-center justify-content-evenly position-relative" style="background: linear-gradient(to bottom, #E200A7 0%, #BB008A 100%);">
                    <button class="custom-badge-btn align-items-center "><span class="text-center h6 p-2 text-white1">₹ 2000 / 3 month</span></button>
                    <p class="text-light text-decoration-line-through" style="font-weight:normal; font-size:18px; margin-right: 30px;">&#8377; 5000</p>

                </div>

 
            </div>

        </div>

        <div class="col-md-4">

            <div class="card h-100">
                <div class="card-header" style="background-color:#191919;">
                    <img src="images/background/enter.svg" alt="" height="150px" width="200px">
                </div>
                <div class="card-body">

                    <div class="text-center">
                        <span class="custom-badge3 " style="font-size:14.75px; font-family:Outfit;">Best for Education Institutes</span>
                    </div>

                    <ul class="list-group mt-2">

                    <li class="d-flex align-items-baseline">
                            <i class="fas fa-circle-check text-success me-2"></i>
                             <ul class="card__list-description" style="font-family:Outfit; margin-top:10px;">
                                <li style="color:#109AFF; font-size:20px;">Enrollment Services</li>
                                <li class="card__list-subtitle"style="font-family:Outfit;">• Bulk Student Enrollment</li>
                                <li class="card__list-subtitle"style="font-family:Outfit;">• Individual Care with 1:1 Mentor</li>
                                <li class="card__list-subtitle"style="font-family:Outfit;">• Adv Progress Reports</li>
                                <li class="card__list-subtitle"style="font-family:Outfit;">• Close study circles</li>
                                <li class="card__list-subtitle"style="font-family:Outfit;">• Scheduling & Tasking on Individual 
                                abilities</li>
                             </ul>
                             <li class="d-flex align-items-baseline">
                             <i class="fas fa-circle-check text-success me-2"></i>
                             <ul class="card__list-description" style="font-family:Outfit; margin-top:10px;">
                                <li style="color:#109AFF; font-size:20px;">Support Services</li>
                                <li class="card__list-subtitle"style="font-family:Outfit;">• 24 / 7 Priority Email Support & Phone </li>
                                <li class="card__list-subtitle"style="font-family:Outfit;">• Personalised Analysis Onboarding</li>
                                <li class="card__list-subtitle"style="font-family:Outfit;">• Discussion Forum Access</li>                               
                    
                             </ul>
</li>
<li class="d-flex align-items-baseline">
<i class="fas fa-circle-check text-success me-2"></i>
                             <ul class="card__list-description" style="font-family:Outfit; margin-top:10px;">
                                <li style="color:#109AFF; font-size:20px;">Evaluation & Reporting Services</li>
                                <li class="card__list-subtitle"style="font-family:Outfit;">• Specialised Evaluator Panel</li>
                                <li class="card__list-subtitle"style="font-family:Outfit;">• Periodical Performance Testing </li>
                                <li class="card__list-subtitle"style="font-family:Outfit;">• Report Student progress to 
                                Concern Institutes & Parents</li>                               
                    
                             </ul>
</li>
                        </li>       
                    </ul>

                </div>


                <div  class="card-foote3 mt-5 d-flex align-items-center justify-content-center" style="background: linear-gradient(to bottom, #2BA6FF 0%, #0F9AFF 100%);">
                    <a href="contact_us.php" style='color:white; font-weight:bold; font-size:20px;'>Contact us</a>
                </div>

            </div>

        </div>





    </div>




</section>