@extends('layouts.main')
@section('pageTitle', isset($pageTitle) ? $pageTitle: 'Igonor Alexander - Portfolio')

@section('style')
	<style>

	</style>
@endsection

@section('content')
				<div class="col-lg-4 sticky-lg-top vh-100">
                    <div class="d-flex flex-column h-100 text-center overflow-auto shadow">
                        <img class="w-100 img-fluid mb-4" src="{{asset ('ig/img/profile.png')}}"  alt="Alexander O. Igonor">
                        <h1 class="mt-2"> <b style = "font-weight: 600;">  ALEXANDER .O. IGONOR </b> </h1>
                        <div class="mb-4" style="height: 22px;">
                            <h4 class="typed-text-output d-inline-block text-light"></h4>
                            <div class="typed-text d-none">Product Manager, Software Developer, Digital Marketer</div>
                        </div>
                        <div class="d-flex justify-content-center mt-auto mb-3">
								<!--<a class="btn btn-dark btn-square mx-1" href="https://twitter.com/AlexanderIgonor"><i class="fab fa-twitter"></i></a>-->
                                <!--<a class="btn btn-dark btn-square mx-1" href="https://web.facebook.com/lexphoenix.diesel/"><i class="fab fa-facebook-f"></i></a>-->
                                <a class="btn btn-dark btn-square mx-1" href="https://www.linkedin.com/in/igonor-alexander/"><i class="fab fa-linkedin-in"></i></a>
                                <!--<a class="btn btn-dark btn-square mx-1" href="#"><i class="fab fa-instagram"></i></a>-->
                        </div>
                        <div class="d-flex align-items-end justify-content-between border-top">
                            <a href = "{{ route('file.download', ['filename' => 'resume.pdf']) }}" class="btn w-50 border-end">Download CV</a>
                            <a href="#contact" class="btn w-50 btn-scroll">Contact Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- About Start -->
                    <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5 text-primary">About Me</h1>
                        <p style = "text-align: justify;">As a Software Developer skilled in web development, software engineering, and digital marketing, I create impactful online solutions. With proficiency in HTML5, CSS3, JavaScript, and MySQL, I improve functionality via REST APIs. </br> </br> At Tek Experts as an Azure Cloud Support Engineer, I solve complex technical issues, ensuring high system availability and customer satisfaction, while fostering innovation in the digital landscape. </br> </br> With a passion for learning and adapting to new technologies, I'm available if you require an experienced, creative individual who pays attention to details and follows guidelines. </p>
                        <div class="row mb-4">
                            <!--<div class="col-sm-6 py-1">-->
                            <!--    <span class="fw-medium text-primary">Name:</span> Alexander O. Igonor-->
                            <!--</div>-->
                            <!-- <div class="col-sm-6 py-1">
                                <span class="fw-medium text-primary">Birthday:</span> 1 April 1990
                            </div> -->
                            <!-- <div class="col-sm-6 py-1">
                                <span class="fw-medium text-primary">Degree:</span> Master
                            </div> -->
                            <!--<div class="col-sm-6 py-1">-->
                            <!--    <span class="fw-medium text-primary">Experience:</span> 5 Years-->
                            <!--</div>-->
                            <!--<div class="col-sm-6 py-1">-->
                            <!--    <span class="fw-medium text-primary">Phone:</span> +2347069198779-->
                            <!--</div>-->
                            <!--<div class="col-sm-6 py-1">-->
                            <!--    <span class="fw-medium text-primary">Email:</span> info@igonoralexander.com-->
                            <!--</div>-->
                            <!-- <div class="col-sm-6 py-1">
                                <span class="fw-medium text-primary">Address:</span> 123 Street, New York, USA
                            </div> -->

                            <div class="col-sm-6 py-1">
                                <span class="fw-medium text-primary">Available full-time</span>
                            </div>
                        </div>
                        <!-- <div class="row g-4">
                            <div class="col-md-4 col-lg-6 col-xl-4">
                                <div class="d-flex bg-secondary p-4">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">10</h1>
                                    <div class="ps-3">
                                        <p class="mb-0">Years of</p>
                                        <h5 class="mb-0">Experience</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-6 col-xl-4">
                                <div class="d-flex bg-secondary p-4">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">100</h1>
                                    <div class="ps-3">
                                        <p class="mb-0">Happy</p>
                                        <h5 class="mb-0">Clients</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-6 col-xl-4">
                                <div class="d-flex bg-secondary p-4">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">200</h1>
                                    <div class="ps-3">
                                        <p class="mb-0">Complete</p>
                                        <h5 class="mb-0">Projects</h5>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </section>
                    <!-- About End -->

                     <!-- Expericence Start -->
                     <section class="py-5 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5 text-primary">Professional Experience</h1>
                        <div class="border-start border-2 border-light pt-2 ps-5">
                            
                            <!--<div class="position-relative mb-4">-->
                            <!--    <span class="bi bi-arrow-right fs-4 text-light position-absolute" style="top: -5px; left: -50px;"></span>-->
                            <!--    <h5 class="mb-1">Social Media Manager</h5>-->
                            <!--    <p class="mb-2">Suremattas Blog | <small>2022 - Till Date</small></p>-->
                                <!-- <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum stet lorem diam</p> -->
                            <!--</div>-->
                             
                           <div class="position-relative mb-4">
                               <span class="bi bi-arrow-right fs-4 text-light position-absolute" style="top: -5px; left: -50px;"></span>
                                   <h5 class="mb-1"> Azure Cloud Support Engineer | <small>2023 - Till Date</small> </h5>
                                   <p class="mb-2">Tek Experts Nig </p>
                                   <h6 class="mb-1"> <i> Duties Performed </i></h6>
                                    <ul>
                                        <li> Troubleshoot and resolve over 300 Azure incidents per quarter, ensuring high availability and minimizing downtime for VMs, Storage accounts, and Active Directory services. </li>
                                        <li> I exceeded service level agreements by 20% monthly, resolving over 50 complex technical issues for Azure IaaS environments.  </li>
                                        <li> I ensured optimal system performance and high customer satisfaction by resolving an average of 30 Azure infrastructure-related support tickets weekly. </li>
                                        <li> I provided prompt troubleshooting assistance and guidance for Azure Virtual Machines, addressing performance, connectivity, and configuration problems. </li> 
                                        <li> I collaborated with internal teams to escalate and resolve complex issues, documented interactions and solutions and proposed enhancements to improve customer experience. </li> 
                                    </ul>
                            </div>

                            <div class="position-relative mb-4">
                                <span class="bi bi-arrow-right fs-4 text-light position-absolute" style="top: -5px; left: -50px;"></span>
                                <h5 class="mb-1">Software Developer | <small>2020 - 2023 </small></h5>
                                <p class="mb-2">IG Software Nig </p>
                                <h6 class="mb-1"> <i> Duties Performed </i></h6>
                                <ul>
                                    <li> I designed, coded, and tested software applications, completing 10+ projects annually and improving system functionality by 25%.</li>    
                                    <li> I collaborated with cross-functional teams, including designers, product managers, and other developers, contributing to projects that increased productivity by 30%.</li>
                                    <li> I identified and resolved software bugs and performance issues, achieving a 90% bug resolution rate within the first week of detection. </li>
                                    <li> I created and maintained technical documentation for software applications, ensuring clear guidelines and reducing onboarding time for new developers by 20%. </li>
                                    <li> Followed industry best practices for coding, testing, and deploying software, resulting in a 40% reduction in deployment errors and enhancing overall software quality. </li>
                                </ul>

                            </div>

                            <div class="position-relative mb-4">
                                <span class="bi bi-arrow-right fs-4 text-light position-absolute" style="top: -5px; left: -50px;"></span>
                                <h5 class="mb-1">Junior Software Developer | <small>2019 - 2020 </small> </h5>
                                <p class="mb-2">3 Core Technologies </p>
                                <h6 class="mb-1"> <i> Duties Performed </i></h6>
                                <ul>
                                    <li> I contributed to creating and maintaining websites, completing tasks for 10+ projects annually, and ensuring alignment with project specifications and timelines. <li> I wrote clean, efficient code, resolving 80% of assigned bugs and issues within a week.</li>
                                    <li> I assisted in implementing basic website features and functionalities, improving overall site performance by 20%. </li>
                                    <li> I worked closely with senior developers, participating in 15+ code reviews and incorporating feedback, leading to a 30% improvement in coding skills and efficiency. </li>
                                    <li> I performed routine testing and updates, contributing to a 25% reduction in website downtime and ensuring consistent security and performance. </li>
                                </ul>
                            </div>

                            <!-- <div class="position-relative mb-4">
                                <span class="bi bi-arrow-right fs-4 text-light position-absolute" style="top: -5px; left: -50px;"></span>
                                <h5 class="mb-1">Web Designer</h5>
                                <p class="mb-2">Soft Company | <small>2000 - 2050</small></p>
                                <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum stet lorem diam</p>
                            </div> -->
                        </div>
                    </section>
                    <!-- Expericence End -->

                    <!-- Skills Start -->
                    <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5 text-primary">Skills and Expertise</h1>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">HTML, CSS and Javascript</p>
                                    </div>
                                </div>

                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Programming languages (PHP, Python and C#)</p>
                                    </div>
                                </div>

                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Mobile Development (Dart and Flutter)</p>
                                    </div>
                                </div>
 
								<div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">System Administration (Linux/Windows Server)</p>
                                    </div>
                                </div>

                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">APIs Integration (Restful APIs)</p>
                                    </div>
                                </div>

                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Digital marketing (Google analytics and SEO)</p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-6">
                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Frameworks (React.js, Vue.js, Django, Laravel)</p>
                                    </div>
                                </div>

                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Version Control (Git)</p>
                                    </div>
                                </div>

                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Cloud Computing (Azure)</p>
                                    </div>
                                </div>

                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Software Development methodologies (Agile and Scrum)</p>
                                    </div>
                                </div>

                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">IT Troubleshooting and Support</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- Skills End -->

                    <!-- Portfolio Start -->
                    <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5 text-primary">Projects Done</h1>
                        <div class="row">
                            <div class="col-12">
                                <!-- <div class="row">
                                    <div class="col-12 text-center mb-2">
                                        <ul class="list-inline mb-4" id="portfolio-flters">
                                            <li class="btn btn-secondary active"  data-filter="*"><i class="fa fa-star me-2"></i>All</li>
                                            <li class="btn btn-secondary" data-filter=".first"><i class="fa fa-laptop-code me-2"></i>Design</li>
                                            <li class="btn btn-secondary" data-filter=".second"><i class="fa fa-mobile-alt me-2"></i>Development</li>
                                        </ul>
                                    </div>
                                </div> -->
                                <div class="row portfolio-container">
                                    @foreach ($projects as $item)
                                        <div class="col-md-6 mb-4 portfolio-item first">
                                            <div class="position-relative overflow-hidden mb-2">
                                            <a href = "{{$item->link}}">
                                                <img class="img-fluid w-100" src="{{asset ($item->image) }}" alt="">
                                                <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                                    <h6> {{$item->title}} </h6>
                                                </div>
                                            </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Portfolio End -->
                     
					<!-- Services Start -->
					<section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5 text-primary">Services</h1>
                        <div class="row g-4"> -->
                            <div class="col-md-6">
                                <div class="service-item">
                                    <i class="fa fa-2x fa-laptop-code mx-auto mb-4"></i>
                                    <h5 class="mb-2">Web Design and Development</h5>
                                    <!-- <p class="mb-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore</p> -->
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="service-item">
                                    <i class="fab fa-2x fa-android mx-auto mb-4"></i>
                                    <h5 class="mb-2">App Development</h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-item">
                                    <i class="fa fa-2x fa-search mx-auto mb-4"></i>
                                    <h5 class="mb-2">SEO</h5>
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="service-item">
                                    <i class="fa fa-2x fa-edit mx-auto mb-4"></i>
                                    <h5 class="mb-2">Content Creating</h5>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Services End -->

                   

                    <!-- Subscribe Start -->
                    <section class="wow fadeInUp" data-wow-delay="0.1s">
                        <!-- <div class="bg-secondary text-center p-5">
                            <h1 class="text-white font-weight-bold">Subscribe My Newsletter</h1>
                            <p class="text-white">Subscribe and get my latest article in your inbox</p>
                            <div class="position-relative w-100">
                                <input class="form-control bg-dark border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                                <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subscribe</button>
                            </div>
                        </div> -->
                    </section>
                    <!-- Subscribe End -->

                    

                    <!-- Testimonial Start -->
                    <!-- <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5">Testimonial</h1>
                        <div class="owl-carousel testimonial-carousel">
                            <div class="text-left">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <p class="fs-4 mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid" src="{{asset ('ig/img/testimonial-1.jpg')}}" style="width: 60px; height: 60px;">
                                    <div class="ps-3">
                                        <p class="text-primary fs-5 mb-1">Client Name</p>
                                        <i>Profession</i>
                                    </div>
                                </div>
                            </div>
                            <div class="text-left">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <p class="fs-4 mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid" src="{{asset('ig/img/testimonial-2.jpg')}}" style="width: 60px; height: 60px;">
                                    <div class="ps-3">
                                        <p class="text-primary fs-5 mb-1">Client Name</p>
                                        <i>Profession</i>
                                    </div>
                                </div>
                            </div>
                            <div class="text-left">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <p class="fs-4 mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid" src="{{asset('ig/img/testimonial-3.jpg')}}" style="width: 60px; height: 60px;">
                                    <div class="ps-3">
                                        <p class="text-primary fs-5 mb-1">Client Name</p>
                                        <i>Profession</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->
                    <!-- Testimonial End -->

                    <!-- Contact Start -->
                    <section class="py-5 wow fadeInUp" data-wow-delay="0.1s" id="contact">
                        <h1 class="title pb-3 mb-5 text-primary">Contact Me</h1>
                        <form action="{{route('send.email') }}" method = "POST">
								@csrf
								@if(session() -> has ('message') ) 
									<div class = "alert alert-success">{{ session()->get('message') }}	</div>
								@endif
								<div class="row g-3">
									<div class="col-md-6">
										<div class="form-floating">
											<input type="text" class="form-control border-0 bg-secondary" name = "name" id="name" placeholder="Your Name">
											<label for="name">Your Name</label>
											@error('name')<span class = "text-danger"> {{ $message}} </span>@enderror
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-floating">
											<input type="email" class="form-control border-0 bg-secondary" name = "email" id="email" placeholder="Your Email">
											<label for="email">Your Email</label>
											@error('email')<span class = "text-danger"> {{ $message}} </span>@enderror
										</div>
									</div>
									<div class="col-12">
										<div class="form-floating">
											<input type="text" class="form-control border-0 bg-secondary" name = "subject" id="subject" placeholder="Subject">
											<label for="subject">Subject</label>
											@error('subject')<span class = "text-danger"> {{ $message}} </span>@enderror
										</div>
									</div>
									<div class="col-12">
										<div class="form-floating">
											<textarea class="form-control border-0 bg-secondary" name = "content" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
											<label for="message">Message</label>
											@error('content')<span class = "text-danger"> {{ $message}} </span>@enderror
										</div>
									</div>
									<div class="col-12">
										<button type = "submit" class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
									</div>
								</div>
                        </form>
                    </section>
                    <!-- Contact End -->
                </div>

@endsection