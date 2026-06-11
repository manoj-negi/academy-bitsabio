    <!-- ========== FOOTER ========== -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4 mb-3">
                <!-- Brand Column -->
                <div class="col-lg-3">
                    <div class="footer-brand gradient-text">
                        <a href="/">
                            <img src="{{ asset('images/bitsabio_logo.webp') }}">
                        </a>
                    </div>
                    <p class="footer-description">
                        Build job-ready skills through practical IT training, real-world projects, expert mentorship, and industry-focused learning programs.
                    </p>
                  
                </div>

                <!-- Course Column -->
                <div class="col-lg-2 col-md-3">
                    <h5 class="footer-title">Courses</h5>
                    <ul class="footer-links">
                        {{-- <a href="{{ route('service.details', 'web-development-services') }}"> --}}
                        <li><a href="{{ route('content.showCourse', 'full-stack-development') }}">Full Stack Development</a></li>
                        <li><a href="{{ route('content.showCourse', 'aiml') }}">Artificial Intelligence & Machine Learning</a></li>
                        <li><a href="{{ route('content.showCourse', 'data-science-course') }}">Data Science</a></li>
                        <li><a href="{{ route('content.showCourse', 'data-analyst') }}">Data Analyst</a></li>
                        <li><a href="{{ route('content.showCourse', 'python-training') }}">Python</a></li>
                    </ul>
                </div>
                <!-- Services Column -->
                <div class="col-lg-2 col-md-3">
                    <h5 class="footer-title">Courses</h5>
                    <ul class="footer-links">
                        <li><a href="{{ route('content.showCourse', 'devops') }}">DevOps</a></li>
                        <li><a href="{{ route('content.showCourse', 'mobile-app-development') }}">App Development</a></li>
                        <li><a href="{{ route('content.showCourse', 'custom-software-solutions') }}">AWS Cloud</a></li>
                        <li><a href="{{ route('content.showCourse', 'it-Security') }}">IT Security </a></li>
                        <li><a href="{{ route('content.showCourse', 'uiux') }}">UI/UX Design</a></li>
                    </ul>
                </div>

                    <!-- Company Column -->
                <div class="col-lg-2 col-md-3">
                    <h5 class="footer-title">Company</h5>
                    <ul class="footer-links">
                        <li><a href="{{url('/about')}}">About Us</a></li>
                                   
                        <!-- <li><a href="#process">Our Process</a></li> -->
                        <!-- <li><a href="#work">Case Studies</a></li> -->
                        <!-- <li><a href="#">Careers</a></li> -->
                        <li><a href="{{url('blogs')}}">Blogs</a></li>
                        <li><a href="{{url('/contact')}}">Contact</a></li>
                        <li><a href="{{ url('/faq') }}">FAQ</a></li>
                        <li><a href="{{ url('/privacy-policy') }}">Privacy-Policy</a></li>

                    </ul>
                </div>

            

                <!-- Newsletter Column -->
                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title">Contact</h5>
                        <div class="footer-contact">
                            <a href="mailto:contact@bitsabio.in">
                                <i class="bi bi-envelope"></i>
                                contact@bitsabio.in
                            </a>
                            <a href="tel:+ +917717320084">
                                <i class="bi bi-telephone"></i>
                                +91 7717320084
                            </a>
                            <a 
                                href="https://maps.app.goo.gl/Uia6ng7hmgkPbSuq9"
                                target="_blank" class="location-link"
                            >
                                <i class="bi bi-geo-alt"></i>
                                D-229 Prosperity Arcade, Phase 8b,<br/> Industrial Area Mohali, 160071
                            </a>
                        </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p class="text-secondary small mb-0">
                    © 2026 BitSabio. All rights reserved.
                </p>
                <div class="social-links">
                    <a href="https://www.linkedin.com/company/bitsabio-pvt-ltd" class="social-link">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="https://www.facebook.com/bitsabio.in" class="social-link">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <!-- <a href="#" class="social-link">
                        <i class="bi bi-github"></i>
                    </a> -->
                    <a href="https://www.instagram.com/bitsabio.in" class="social-link">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>