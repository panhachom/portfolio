@extends('welcome')
@section('title', 'Home')
@section('content')
<!-- NAVBAR -->
<nav>
    <div class=" text-primary flex justify-center items-center py-8  flex-col" > 
        <div class="flex items-center nav-header-text">
            <span class=" text-4xl  md:text-5xl font-medium"><span class="font-semibold">MY </span>Portfoli</span>
            <div class="mt-2">    
                <img src="{{ asset('images/logo.png') }}" class=" w-4 md:w-6" alt="tag">
            </div>
        </div>
        <div class="text-xl md:text-2xl text-black flex justify-center items-center gap-x-2 ml-20  md:ml-36 md:mt-2 ">
            <div>           
                 <img src="{{ asset('images/bat.png') }}" width="30" alt="tag">
            </div>
            <div>           
                 Software <span class="font-bold image-bat">Developer</span>
            </div>
        </div>
    </div>
</nav>

<div class=" w-full md:w-3/5 px-8 md:px-0  mx-auto mt-12 mb-24">
    <div class="flex font-semibold justify-start">
        <div class=" text-2xl resume-title " id="resume-link">MY Resume</div>
    </div>
    <div class="mt-12 grid grid-cols-2 gap-10">

        <!-- col 1  -->
        <div class="lg:col-span-1 col-span-2">
            <div class="flex gap-x-2">
                <img src="{{ asset('images/info-circle.svg') }}" class=" text-red-600" width="18" alt="tag">
                <div class="text-xl font-medium">Summary</div>
            </div>
            <div class="flex  items-center gap-x-4 mt-4">
                <div class="bullet-point"></div>
                <div class="text-sm text-secondary font-bold ">Chom Panha</div>
            </div>
            <div class="text-xs px-8 mt-4">
                I am a junior Software Developer and currently in my fourth year of studying
                Computer Science at <span class=" text-blue-950 font-bold">CADT</span>. With a passion for technology and a drive for learning,
                I am dedicated to expanding my software development skills and applying theoretical
                knowledge to practical solutions
                <ul class="list-disc px-10 mt-4">
                    <li>Address : Tek Tla Sen Sok Phnom Penh</li>
                    <li>Phone : +885 69 626 549</li>
                    <li>Email : panhachom@gmail.com</li>
                </ul>
            </div>
        </div>

        <!-- col 2  -->

        <div class="lg:col-span-1 col-span-2">
            <div class="flex gap-x-2">
                <img src="{{ asset('images/pc-display.svg') }}"  width="18" alt="tag">
                <div class="text-xl font-medium">Experiences</div>
            </div>
            <div class="flex  items-center gap-x-4 mt-4">
                <div class="bullet-point"></div>
                <div class="text-sm text-secondary font-bold ">Part Time Software Developer</div>
            </div>

            <div class="ms-8 mt-2 flex">
                <div class="batch">June 2022 - Present</div>
                <div class="batch">
                    <div class="flex justify-center items-center gap-x-1">
                    <i class="fa-solid fa-location-pin"></i>                     
                        <div>At BookMeBus</div>
                    </div>
                </div>
            </div>
            <div class="text-xs px-8 mt-4">
             My responsibilities encompass both front-end and back-end development.                
             <ul class="list-disc px-10 mt-4">
                    <li>Fontend : Designing and API Intregation  </li>
                    <li>Backend : Create and enhance new features </li>
                    <li>Platform : Website and App </li>
                    <li>Technologies : Flutter and Ruby on Rails</li>

                </ul>
            </div>
        </div>


         <!-- col 3 -->

        <div class="lg:col-span-1 col-span-2 ">
            <div class="flex gap-x-2">
                <img src="{{ asset('images/bank.svg') }}"  width="18" alt="tag">
                <div class="text-xl font-medium">Education</div>
            </div>

            <div class="flex  items-center gap-x-4 mt-4">
                <div class="bar-line-2"></div>
                <div class="text-sm text-secondary font-bold ">CHEA SIM SAMAKY HIGH SCHOOL</div>
            </div>
            <div class="ms-8 mt-2 flex">
                <div class="batch">2017-2020</div>
                <div class="batch">
                    <div class="flex justify-center items-center gap-x-1">
                    <i class="fa-solid fa-graduation-cap"></i>                       
                     <div>Diploma's degree</div>
                    </div>
                </div>
            </div>

            <div class="flex  items-center gap-x-4 mt-4">
                <div class="bar-line-2"></div>
                <div class="text-sm text-secondary font-bold uppercase ">Australian Centre for Education (ACE) </div>
            </div>
            <div class="ms-8 mt-2 flex">
                <div class="batch">2016-2020</div>
                <div class="batch">
                    <div class="flex justify-center items-center gap-x-1">
                    <i class="fa-solid fa-graduation-cap"></i>                       
                     <div>General English Program</div>
                    </div>
                </div>
            </div>

            <div class="flex  items-center gap-x-4 mt-4">
                <div class="bar-line-2"></div>
                <div class="text-sm text-secondary font-bold uppercase ">CAMBODIA ACADEMY OF DIGITAL AND TECHNOLOGY </div>
            </div>
            <div class="ms-8 mt-2 flex">
                <div class="batch">2021-Present</div>
                <div class="batch">
                    <div class="flex justify-center items-center gap-x-1">
                    <i class="fa-solid fa-graduation-cap"></i>                       
                     <div>Bachelor's degree</div>
                    </div>
                </div>
            </div>
          
        </div>
        


         <!-- col 4  -->

         <div class="lg:col-span-1 col-span-2">
            <!-- <div class="text-xl font-medium">Summary</div> -->
            <div class="flex  items-center gap-x-4 mt-4">
                <div class="bullet-point"></div>
                <div class="text-sm text-secondary font-bold uppercase ">Volunteer</div>
            </div>
             <div class="ms-8 mt-2 flex">
                <div class="batch">Oct 2021 - Jan 2022</div>
                <div class="batch">
                    <div class="flex justify-center items-center gap-x-1">
                    <i class="fa-solid fa-location-pin"></i>                     
                     <div>At E-Robot</div>
                    </div>
                </div>
            </div>
            <div class="text-xs px-8 mt-4">
                 Throughout the three-month duration of my volunteer engagement, I was an integral part of the Developer Team                
                 <ul class="list-disc px-10 mt-4">
                    <li> Develop E-Robot Website</li>
                    <li> Work as Teaching assistant for Web Develop Class</li>
                    <li>Technologies : HTML CSS Javascript</li>

                </ul>
            </div>
        </div>

          <!-- col 5  -->

        <div class="lg:col-span-1 col-span-2">
            <div class="flex gap-x-2">
                <img src="{{ asset('images/filetype-html.svg') }}"  width="18" alt="tag">
                <div class="text-xl font-medium">Languages and Technologies</div>
            </div>
            <div class="flex  items-center gap-x-4 mt-4">
                <div class="bullet-point"></div>
                <div class="text-sm text-secondary font-bold  uppercase">development Technologies</div>
            </div>
            <div class="text-xs px-8 mt-4 flex gap-2 flex-col">
                <div class="flex items-center gap-x-4">
                    <div class="flex gap-1">
                        <div class="rating-dot rating-dot-yes"></div>
                        <div class="rating-dot rating-dot-yes"></div>
                        <div class="rating-dot rating-dot-yes"></div>
                        <div class="rating-dot rating-dot-yes"></div>
                        <div class="rating-dot rating-dot-yes"></div>
                    </div>
                    <div class="font-medium">HTML , CSS , BootStrap , Tailwind</div>
                </div>

                <div class="flex items-center gap-x-4">
                    <div class="flex gap-1">
                        <div class="rating-dot rating-dot-yes"></div>
                        <div class="rating-dot rating-dot-yes"></div>
                        <div class="rating-dot rating-dot-yes"></div>
                        <div class="rating-dot rating-dot-no"></div>
                        <div class="rating-dot rating-dot-no"></div>
                    </div>
                    <div class="font-medium">PHP , Laravel , MYSQL</div>
                </div>


                <div class="flex items-center gap-x-4">
                    <div class="flex gap-1">
                        <div class="rating-dot rating-dot-yes"></div>
                        <div class="rating-dot rating-dot-yes"></div>
                        <div class="rating-dot rating-dot-yes"></div>
                        <div class="rating-dot rating-dot-no"></div>
                        <div class="rating-dot rating-dot-no"></div>
                    </div>
                    <div class="font-medium">Ruby , Ruby on Rails , Postgres</div>
                </div>


                <div class="flex items-center gap-x-4">
                    <div class="flex gap-1">
                        <div class="rating-dot rating-dot-yes"></div>
                        <div class="rating-dot rating-dot-yes"></div>
                        <div class="rating-dot rating-dot-yes"></div>
                        <div class="rating-dot rating-dot-no"></div>
                        <div class="rating-dot rating-dot-no"></div>
                    </div>
                    <div class="font-medium">Flutter</div>
                </div>

                <div class="flex items-center gap-x-4">
                    <div class="flex gap-1">
                        <div class="rating-dot rating-dot-yes"></div>
                        <div class="rating-dot rating-dot-yes"></div>
                        <div class="rating-dot rating-dot-no"></div>
                        <div class="rating-dot rating-dot-no"></div>
                        <div class="rating-dot rating-dot-no"></div>
                    </div>
                    <div class="font-medium">Javascript</div>
                </div>
            </div>

            <div class="flex  items-center gap-x-4 mt-12">
                <div class="bar-line-2"></div>
                <div class="text-sm text-secondary font-bold uppercase ">Languages </div>
            </div>
         
            <div class="text-xs px-8 mt-4 flex gap-2 flex-col">
                <div class="flex items-center gap-x-4">
                    <div class="flex gap-1">
                        <div class="rating-dot rating-dot-yes"></div>
                        <div class="rating-dot rating-dot-yes"></div>
                        <div class="rating-dot rating-dot-yes"></div>
                        <div class="rating-dot rating-dot-yes"></div>
                        <div class="rating-dot rating-dot-no"></div>
                    </div>
                    <div class="font-medium">English</div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-1 col-span-2">
            <div class="flex gap-x-2">
                <img src="{{ asset('images/award.svg') }}"  width="20" alt="tag">
                <div class="text-xl font-medium">Certifications and Trainings</div>
            </div>
            <div class="flex  items-center gap-x-4 mt-4">
                <div class="bar-line-2"></div>
                <div class="text-sm text-secondary font-bold uppercase">Software Development</div>
            </div>
            <div class="text-xs px-8 mt-4">
                <ul class=" mt-4">
                    <li class="flex items-center gap-3 my-1">
                         <i class="fa-solid fa-certificate text-yellow-600"></i>
                         <div>BookMeBus Intership Certificate (2022)</div>
                    </li>
                    <li class="flex items-center gap-3  my-1">
                        <i class="fa-solid fa-certificate text-yellow-600"></i>
                         <div>E-Robot Certificate (2022) </div>
                    </li>
                 
                </ul>
            </div>

            <div class="flex  items-center gap-x-4 mt-4">
                <div class="bar-line-2"></div>
                <div class="text-sm text-secondary font-bold uppercase"> Other</div>
            </div>
            <div class="text-xs px-8 mt-4">
                <ul class=" mt-4">
                    <li class="flex items-center gap-3 my-1">
                         <i class="fa-solid fa-certificate text-yellow-600"></i>
                         <div>IELTS Certificate (2019)</div>
                    </li>  
                </ul>
            </div>
        </div>

    </div>
</div>



<div class=" w-full md:w-3/5 px-8 md:px-0  mx-auto mt-12 mb-24 flex flex-col md:flex-row md:justify-between items-start">
        <div class="flex font-semibold justify-between items-start w-full flex-col lg:flex-row">
            <div class=" text-2xl  resume-title" id="resume-link">MY Contact</div>
            <div class="flex justify-between items-start mt-12 lg:mt-0">
                <div class="flex items-center gap-x-3">
                    <a class="social-link-btn" href="mailto:panhachom@gmail.com">
                        <img src="{{ asset('images/gm.png') }}" width="19" alt="tag">
                    </a>
                    <a class="social-link-btn" href="https://t.me/panhachom" target="_blank">
                        <img src="{{ asset('images/tele.png') }}" width="21" alt="tag">
                    </a>
                    <a class="social-link-btn" href="https://www.facebook.com/panha.chom.7/" target="_blank">
                        <img src="{{ asset('images/fb.png') }}" width="21" alt="tag">
                    </a>
                    <a class="social-link-btn" href="https://www.instagram.com/chompanha/" target="_blank">
                        <img src="{{ asset('images/ig.png') }}" width="20" alt="tag">
                    </a>
                    <a class="social-link-btn" href="https://www.linkedin.com/in/panha-chom-5284a1215/" target="_blank" >
                        <img src="{{ asset('images/in.png') }}" width="18" alt="tag">
                    </a>
                </div>
            </div>
            <!-- <div class="flex items-center flex-col gap-y-2 sm:mt-0 md-12 image-container">
                <img src="{{ asset('images/pf.jpeg') }}" class=" w-20 pf-image" alt="tag">
            </div> -->
        </div>
</div>


<!-- My Project  -->


@endsection
