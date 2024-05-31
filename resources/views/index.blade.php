<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <style>
        .active  {
            background-color: #FFFFFF;
           
        }
    </style>
</head>

<body class="bg-white scroll-smooth">

    <nav class="w-full fixed top-0 bg-[#305DFF] z-50 ">
        <main class="container  mx-auto lg:px-16 text-neutral-50   md:px-10 px-4 flex items-center py-5 justify-between">
            <a href="#home" class="text-xl font-semibold">Portfolio</a>
            <div class="lg:flex gap-10 hidden text-lg font-semibold">
                <a class="relative group nav-link" href="#about" data-section="about">
                    About
                    <div class="nav-item w-full h-0.5 duration-100 group-hover:bg-neutral-50 absolute bottom-0"></div>
                </a>
                <a class="relative group nav-link" href="#work" data-section="work">
               Work
                    <div class="nav-item w-full h-0.5 duration-100 group-hover:bg-neutral-50 absolute bottom-0"></div>
                </a>
                <a class="relative group nav-link" href="#contact" data-section="contact">
                  Contact
                    <div class="nav-item w-full h-0.5 duration-100 group-hover:bg-neutral-50 absolute bottom-0"></div>
                </a>
            </div>
        </main>
    </nav>

    <section id="home" class="h-screen">
        <div class="container py-5 mx-auto flex justify-center items-center gap-10   lg:px-16 md:px-10 px-4 h-full">
            <div data-aos="fade-right">
                <h3 class="text-6xl font-bold">Hi, I'm Moch Zoel!</h3>
                <h3 class="text-6xl font-bold">an <span class="text-[#305DFF]">UI UX Designer</span></h3>
                <h3 class="text-lg ">you can call me <span class="font-bold">Zoel</span></h3>
                <h3 class="text-lg ">I am a student in the Information Technology Education program at Brawijaya University.</h3>
            </div>
            <div>
                <img src="{{asset('images/zoel.png')}}" draggable="false"  alt="">
            </div>
        
        </div>
    </section>


    <section id="about" class="py-24  overflow-hidden bg-[#305DFF] text-white">
        <div class="container mx-auto py-5 flex justify-evenly items-center  gap-10 lg:px-16 md:px-10 px-4 h-full">
            <div class="flex flex-col gap-2 w-2/6">
                <img data-aos="fade-right" src="{{ asset('images/zoel.png')}}" draggable="false" class="w-full ms-auto" alt="">
                <h3 class="text-xl font-semibold">Moch Zoel Reinanda</h3>
                <p class="'text-xl">UI UX Designer</p>

            </div>
            <div class="w-4/6">
                <h3 data-aos="fade-left" class="text-7xl">“</h3>
                <h3 data-aos="fade-left" class="text-xl font-bold">Bio:</h3>
                <p class="text-base" data-aos="fade-left">Sebagai seorang UI/UX Designer, saya merasa ini bukanlah hal yang mudah. Awalnya, saya berpikir bahwa saya telah memilih jurusan kuliah yang salah karena merasa tidak memiliki keterampilan yang memadai selama berkuliah. Pandangan saya berubah ketika saya mengambil mata kuliah wajib UI/UX Design pada semester tiga. Seiring waktu, saya menyadari bahwa desain UI/UX dapat menjadi keterampilan yang sangat berharga bagi saya. Ternyata, masalahnya bukan pada pemilihan jurusan yang salah, tetapi kurangnya eksplorasi.
            </div>
        </div>
    </section>

  
    
 
    <section id="work" class="overflow-hidden py-10">
        <div data-aos="fade-up" class="flex justify-center">
            <h1 class="text-4xl inline-block font-semibold">My Work</h1>
        </div>
        <div class="container mx-auto py-5 lg:px-16 md:px-10 px-4 h-full">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($works as $work)
                    <div class="swiper-slide">
                        <div  class="w-full bg-[#305DFF] aspect-[12/5] rounded-3xl shadow relative group">
                            <img src="{{ asset('images/card.png') }}" class="w-full absolute bottom-0 translate-y-[20%] h-full object-contain" alt="">
                            <div class="flex gap-4 absolute w-3/5 top-1/2 -translate-y-1/2 right-1/2 translate-x-[40%]">
                              <div class="w-1/2">
                              <h1 class="text-4xl text-white font-semibold">{{$work->nama}}</h1>
                              <img src="{{ asset('storage/' . $work->gambar) }}" class="w-full -mt-7 aspect-square object-contain" alt="">
                              
                            </div>
                            <div  class="w-1/2">
                                  <h1 class="text-4xl text-yellow-400 text-white font-semibold">As {{$work->role}}</h1>
                                  <p class="text-3xl text-white">{{$work->deskripsi}}</p>
                                
                              </div>
                            </div>
                        
                        </div>
                    </div>
                    @endforeach
                </div>
            
            </div>
        </div>
    </section>


   
    <footer  id="contact" data-aos="fade-up" class=" text-white">
    <div data-aos="fade-up" class="flex justify-center py-20">
            <h1 class="text-4xl inline-block font-semibold text-black">Contact</h1>
        </div>
        <div class="bg-[#305DFF] w-full ">
            <div class="container  lg:px-16 md:px-10 px-4 mx-auto flex gap-6 py-16">
                <div class="w-1/2">
                    <h1 class="text-2xl mb-4">Let’s work together</h1>
                    <p class="text-lg mb-4">Together, we can create work that not only meets users' needs but also provides an exceptional experience. Let's collaborate and create something amazing!</p>
                    <div class="flex flex-col gap-1">
                        <div class="flex  items-center">
                            <img src="{{ asset('images/discord.png') }}" alt="">
                            <p class="text-lg">reinanda</p>
                        </div>
                        <div class="flex  items-center">
                            <img src="{{ asset('images/facebook.png') }}" alt="">
                            <p class="text-lg">mochZoel</p>
                        </div>
                        <div class="flex  items-center">
                            <img src="{{ asset('images/nstagram.png') }}" alt="">
                            <p class="text-lg">reindmz</p>
                        </div>

                    </div>
                </div>
                <div class="w-1/2 text-black flex flex-col gap-3">
                    <input type="text" class="text-2xl bg-white w-full px-4 py-2 text-black" name="" id="" placeholder="Name">
                    <input type="email" class="text-2xl bg-white w-full px-4 py-2 text-black" name="" id="" placeholder="Email">
                    <textarea name="" class="text-2xl bg-white w-full px-4 py-2 text-black h-40"  id="" placeholder="Type your message here"></textarea>
                    <button class="text-2xl px-8 py-2 w-fit rounded-2xl bg-yellow-400">Submit</button>

                </div>

            </div>
       
           
            
        </div>
    </footer>
    



    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 64,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
     
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('a[href^="#"]');
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');

            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.5
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const sectionId = entry.target.id;
                        navLinks.forEach(link => {
                            const divInsideLink = link.querySelector('div');
                            if (link.getAttribute('data-section') === sectionId) {
                        
                                if (divInsideLink) {
                                    divInsideLink.classList.add('active');
                                }
                                
                            } else {
                             
                                if (divInsideLink) {
                                    divInsideLink.classList.remove('active');
                                }
                            
                            }
                        });
                    }
                });
            }, observerOptions);

            sections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>

</body>

</html>
