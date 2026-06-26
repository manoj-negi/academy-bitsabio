@extends('layouts.app')
@section('meta_title', 'BitSabio - About')

@section('meta_description', 'Learn about BitSabio, our mission, team, expertise, and commitment to delivering
    innovative AI and digital solutions.')
@section('meta_keywords', 'about bitsabio, digital agency, AI experts, web development company')
@section('og_title', 'About BitSabio')
@section('og_description', 'Meet the team behind BitSabio and discover our vision.')

@section('content')

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="hero-badge aos-init aos-animate" data-aos="fade-down">
                        <i class="bi bi-circle-fill" style="color: var(--gradient-blue); font-size: 7px;"></i>
                        <span>Your Trusted IT Partner</span>
                    </div>
                    <h1 data-aos="fade-up">Building the Future of <span class="color-liner-004ED0">Intelligent Systems</span>
                    </h1>
                    <p data-aos="fade-up" data-aos-delay="100">
                        We're a team of AI engineers, data scientists, and product builders creating production-ready AI
                        solutions that drive real business value.

                    </p>
                    <div class="d-flex align-items-center">
                        <a href="#contact" class="btn btn-gradient btn-lg me-3" data-aos="fade-up" data-aos-delay="200">
                            Book Free Demo
                        </a>
                        <a href="{{ route('courses') }}" class="btn btn-gray btn-lg" data-aos="fade-up" data-aos-delay="200">
                            View All Courses
                        </a>
                    </div>

                </div>
                <div class="col-md-5">
                    {{-- <div class=""> --}}
                    {{-- <img src="./images/service-hero-img.webp" alt="service-hero-img"> --}}
                    @include('components.courseForm')
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- ========== PROCESS SECTION ========== -->
    <section class="py-5 my-5" style="background: var(--bg-overlay);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="mb-3" data-aos="fade-up">
                        <h3 class="section-title gradient-text">About Bitsabio Learning</h3>
                        <p><b>Bitsabio</b> is a fast-growing <b>IT training company</b> focused on delivering practical,
                            job-oriented learning. We help <b>students, professionals, and businesses </b>build
                            </b>in-demand skills</b>and stay ahead in the evolving tech industry.</p>
                        <p>Our programs are designed with a <b>hands-on approach,</b>including <b>live projects</b> and
                            <b>expert mentorship</b>. We aim to <b> bridge the gap between learning and industry needs,</b>
                            helping individuals gain <b>real-world experience </b>and succeed in their careers.</p>

                        </ul>
                        <li>✔ Key Highlights</li>
                        <li>✔ Job-Oriented Training Programs</li>
                        <li>✔ Work on Live & Real-World Projects</li>
                        <li>✔ Skill Development with Practical Approach</li>
                        <li>✔ Career Guidance & Interview Preparation</li>
                        <li>✔ Affordable Courses with High Value</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="rounded" src="./images/about-us.jpg" alt="about-home">
                </div>
            </div>
        </div>
    </section>


    <!-- Mission & Vision -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card-compact" style="height: 100%;">
                        <div class="icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white"
                                stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 6v6l4 2"></path>
                            </svg>
                        </div>
                        <h3>Our Mission</h3>
                        <p>To democratize AI technology by making enterprise-grade intelligent systems accessible to
                            businesses of all sizes. We believe AI should solve real problems, not just showcase impressive
                            demos.</p>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card-compact" style="height: 100%;">
                        <div class="icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white"
                                stroke-width="2">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                            </svg>
                        </div>
                        <h3>Our Vision</h3>
                        <p>A world where every company has access to intelligent systems that augment human capability,
                            drive innovation, and create sustainable competitive advantages through ethical AI
                            implementation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="py-5" style="background-color: var(--color-surface);">
        <div class="container">
            <div class="text-center mb-5">
                <h2 data-aos="fade-up">Why Students Choose Bitsabio Learning</h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Our training approach is designed to help students gain practical skills, confidence, and career
                    success.
                </p>
            </div>

            <div class="service-grid">
                <div class="service-card-compact" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white"
                            stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <h3>Practical Learning</h3>
                    <p>Learn through hands-on coding, live projects, case studies, and real-world implementation rather than
                        just theory.</p>
                </div>

                <div class="service-card-compact" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white"
                            stroke-width="2">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <polyline points="17 11 19 13 23 9"></polyline>
                        </svg>
                    </div>
                    <h3>Expert Mentorship</h3>
                    <p>Get guidance from experienced industry professionals who help you learn the latest technologies and
                        best practices.</p>
                </div>

                <div class="service-card-compact" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white"
                            stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <h3>Job-Oriented Training</h3>
                    <p>Our curriculum is designed according to current industry requirements to make students job-ready.</p>
                </div>

                <div class="service-card-compact" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white"
                            stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                            <path d="M2 17l10 5 10-5"></path>
                            <path d="M2 12l10 5 10-5"></path>
                        </svg>
                    </div>
                    <h3>Live Project Experience</h3>
                    <p>Work on real-world projects that strengthen your portfolio and provide practical industry exposure.
                    </p>
                </div>

                <div class="service-card-compact" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white"
                            stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3>Career Support</h3>
                    <p>Receive resume building, interview preparation, career guidance, and professional development
                        support.</p>
                </div>

                <div class="service-card-compact" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white"
                            stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <h3>Continuous Skill Development</h3>
                    <p>Stay updated with emerging technologies including AI, Cloud Computing, Data Science, DevOps, and Full
                        Stack Development.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Culture & Careers Teaser -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="section-badge">Industry-Focused Training</div>
                    <h3 class="mb-4">Become Industry Ready with Practical Training</h3>
                    <p class="mb-4" style="font-size: 1.125rem; color: var(--color-text-secondary);">
                        Gain practical skills, real-world project experience, and expert mentorship through industry-focused
                        training programs designed to prepare you for today's technology careers. </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 32px;">
                        <li style="padding: 12px 0; display: flex; align-items: center; gap: 12px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span>Industry-Oriented Curriculum</span>
                        </li>
                        <li style="padding: 12px 0; display: flex; align-items: center; gap: 12px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span>Build Real-World Projects</span>
                        </li>
                        <li style="padding: 12px 0; display: flex; align-items: center; gap: 12px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span>Gain Practical Technical Skills</span>
                        </li>
                        <li style="padding: 12px 0; display: flex; align-items: center; gap: 12px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span>Career Guidance & Placement Support</span>
                        </li>
                    </ul>
                    <a href="{{ route('courses') }}" class="btn btn-gradient btn-lg">
                        View All Courses
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="problem-grid">
                        <div class="problem-card">
                            <div class="icon" style="background: var(--gradient-light);">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <h4>Full Stack Development</h4>
                            <p>Build modern web applications using Laravel, React, Node.js and databases.</p>
                        </div>

                        <div class="problem-card">
                            <div class="icon" style="background: var(--gradient-light);">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <polyline points="16 18 22 12 16 6"></polyline>
                                    <polyline points="8 6 2 12 8 18"></polyline>
                                </svg>
                            </div>
                            <h4>Data Science & AI</h4>
                            <p>Learn Machine Learning, Data Analytics and Artificial Intelligence.</p>
                        </div>

                        <div class="problem-card">
                            <div class="icon" style="background: var(--gradient-light);">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
                                    <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                                    <path d="M2 2l7.586 7.586"></path>
                                </svg>
                            </div>
                            <h4>AWS Cloud Computing</h4>
                            <p>Master cloud infrastructure, deployment and DevOps fundamentals.</p>
                        </div>

                        <div class="problem-card">
                            <div class="icon" style="background: var(--gradient-light);">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2">
                                    </rect>
                                    <line x1="8" y1="21" x2="16" y2="21"></line>
                                    <line x1="12" y1="17" x2="12" y2="21"></line>
                                </svg>
                            </div>
                            <h4></h4>
                            <h4>Digital Marketing</h4>
                            <p>Learn SEO, Social Media Marketing, Google Ads and Analytics.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== STATS ========== -->

    <div id="stats-section" class="info-lable">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h3 class="section-title gradient-text">Real Results from Real Learning</h3>
                <p class="section-subtitle">Helping students build skills, complete projects, and confidently step into the
                    tech industry.</p>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="info-lable-box d-flex align-items-center">
                        <i class="bi bi-patch-check"></i>
                        <div class="ps-3">
                            <h5 class="mb-0" data-target="200">500+ Students Trained</h5>
                            <p class="m-0">Successfully guided in tech careers</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info-lable-box d-flex align-items-center">
                        <svg width="" height="" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18 19V18C18 15.7909 16.2091 14 14 14H10C7.79086 14 6 15.7909 6 18V19M23 19V18C23 15.7909 21.2091 14 19 14H18.5M1 19V18C1 15.7909 2.79086 14 5 14H5.5M17 11C18.6569 11 20 9.65685 20 8C20 6.34315 18.6569 5 17 5M7 11C5.34315 11 4 9.65685 4 8C4 6.34315 5.34315 5 7 5M15 8C15 9.65685 13.6569 11 12 11C10.3431 11 9 9.65685 9 8C9 6.34315 10.3431 5 12 5C13.6569 5 15 6.34315 15 8Z"
                                stroke="#004ED0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="ps-3">
                            <h5 class="mb-0" data-target="50">100+ Real Projects Built</h5>
                            <p class="m-0">Hands-on learning experience</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info-lable-box d-flex align-items-center">

                        <svg width="" height="" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <>ionicons-v5-c</ title>
                            <polyline points="352 144 464 144 464 256"
                                style="fill:none;stroke:#004ED0;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                            <path d="M48,368,169.37,246.63a32,32,0,0,1,45.26,0l50.74,50.74a32,32,0,0,0,45.26,0L448,160"
                                style="fill:none;stroke:#004ED0;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                        </svg>
                        <div class="ps-3">
                            <h5 class="mb-0" data-target="98">Career-Focused Training</h5>
                            <p class="m-0">Skills aligned with industry needs</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info-lable-box d-flex align-items-center">
                        <i class="">
                            <?xml version="1.0" encoding="iso-8859-1"?>
                            <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                            <!DOCTYPE svg>
                            <svg fill="#004ED0" height="" width="" version="1.1" id="Capa_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 476.583 476.583" xml:space="preserve">
                                <g>
                                    <path
                                        d="M476.583,262.835c0-32.208-25.811-58.375-57.815-59.259c-2.33-3.642-5.623-6.553-9.505-8.495
                                            c5.14-76.723-61.653-157.01-144.843-167.175c-10.731-1.864-15.576-1.568-26.105-2.29C115.523,29.172,62.645,132.404,67.288,195.135
                                            c-3.851,1.942-7.097,4.829-9.411,8.433C25.841,204.421,0,230.604,0,262.835c0,32.224,25.841,58.407,57.878,59.261
                                            c4.239,6.631,11.632,11.057,20.079,11.057c13.169,0,23.853-10.677,23.853-23.853v-92.935c0-8.045-4.006-15.126-10.109-19.444
                                            c10.295-57.87,62.893-122.232,146.613-123.598c5.063,0.364,15.964,0.278,20.562,1.498c41.649,3.844,111.531,44.663,125.99,122.162
                                            c-6.056,4.325-10.031,11.376-10.031,19.382v92.935c0,10.017,6.18,18.55,14.922,22.091v10.117c0,26.415-17.842,49.594-43.373,56.364
                                            l-72.042,19.078c-3.882-5.148-9.767-8.687-16.74-8.687c-11.787,0-21.353,9.565-21.353,21.352c0,11.803,9.567,21.353,21.353,21.353
                                            c10.855,0,19.428-8.183,20.81-18.644l72.042-19.078c32.502-8.619,55.206-34.948,55.206-81.249
                                            c5.467-1.678,10.095-5.187,13.108-9.909C450.772,321.202,476.583,295.035,476.583,262.835z" />
                                    <path
                                        d="M184.443,293.405h-23.201v-0.256c13.402-11.135,29.63-24.537,29.63-41.953c0-37.783-60.207-27.783-53.888-11.88
                                            c1.724,4.635,6.305,5.933,9.831,4.217c11.213-5.475,24.739-3.161,24.739,9.317c-0.374,13.767-20.546,29.173-36.448,43.561
                                            c-2.392,2.166-3.013,12.889,2.702,12.889h46.635C194.956,309.299,194.956,293.405,184.443,293.405z" />
                                    <path d="M247.741,309.299c10.343,0,9.147-9.497,9.147-19.706c13.914,0,13.572-14.498,0-14.498v-44.421
                                            c0-2.222-1.802-4.023-4.023-4.023c-25.653,0-14.861-7.663-49.166,47.544c-2.794,4.542-3.354,15.398,2.283,15.398h32.596
                                            C238.578,299.78,237.383,309.299,247.741,309.299z M220.021,275.095v-0.256l11.057-18.052c2.796-5.211,4.969-10.041,7.625-15.382
                                            h0.512c-0.854,12.175-0.636,15.264-0.636,33.69H220.021z" />
                                    <path d="M278.038,233.33v66.241c0,12.842,19.46,12.897,19.46,0v-26.129h31.913v26.191c0,12.75,19.334,12.796,19.334,0v-66.364
                                            c0-5.343-4.332-9.667-9.659-9.667c-13.278,0-9.675,19.31-9.675,32.93h-31.913V233.33
                                            C297.497,220.432,278.038,220.487,278.038,233.33z" />
                                </g>
                            </svg>
                        </i>
                        <div class="ps-3">
                            <h5 class="mb-0">Interview & Career Support</h5>
                            <p class="m-0">Resume, mock interviews & guidance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Reviews Section --}}
    @include('components.google-reviews')
    <!-- CTA Section -->
    @include('components.mainCourseForm')

@endsection
