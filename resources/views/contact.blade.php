@extends('layouts.app')
@section('meta_title', 'BitSabio - Contact')

@section('meta_description',
    'Get in touch with BitSabio for web development, AI solutions, SEO services, UI/UX design,
    and business growth consultation.')
@section('meta_keywords', 'contact bitsabio, web development consultation, AI agency contact')
@section('og_title', 'Contact BitSabio')
@section('og_description', 'Contact our team to discuss your project requirements.')

@section('content')

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="hero-badge aos-init aos-animate" data-aos="fade-down">
                        <i class="bi bi-circle-fill" style="color: var(--gradient-blue); font-size: 7px;"></i>
                        <span>Industry-Ready Training Programs</span>
                    </div>
                    <h1 data-aos="fade-up">Build <span class="color-liner-004ED0">Future-Ready Skills</span> With Expert-Led
                        Training</h1>
                    <p>
                        Gain hands-on experience through industry-focused courses in AI, Data Science,
                        Full Stack Development, Cloud Computing, and emerging technologies. Learn from
                        experienced professionals, work on real-world projects, and prepare for a
                        successful career with job-ready skills.
                    </p>
                    <!-- CTA Buttons -->
                    <div class="d-flex flex-column flex-sm-row gap-3 mb-5 mt-5" data-aos="fade-up" data-aos-delay="200">
                        <a href="#contact" class="btn btn-gradient">
                            Book a Free Demo
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-hero-img">
                        <img src="./images/contact.webp" alt="contact-hero-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Options -->
    <section class="section-contact-options py-5">
        <div class="container">
            <div class="contact-options">
                <div class="contact-option-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <i class="bi bi-telephone text-primary"></i>
                    </div>
                    <h3>Call Us</h3>
                    <a href="tel:+919872100824">+91 9872100824</a>
                    <a href="tel:+917717320084">+91 7717320084</a>

                    <p>Available Mon-Fri, 9am-8pm</p>
                </div>

                <div class="contact-option-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <i class="bi bi-envelope text-primary"></i>
                    </div>
                    <h3>Email Us</h3>
                    <a href="e-mil">contact@bitsabio.in</a>
                    <p>We respond within 24 hours</p>
                </div>

                <div class="contact-option-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <i class="bi bi-geo-alt text-primary"></i>
                    </div>
                    <h3>Visit Us</h3>
                    <a href="https://maps.app.goo.gl/Uia6ng7hmgkPbSuq9" target="_blank" class="location-link">
                        <p>D-229, Phase 8b,</p>
                        <p>Industrial Area Mohali, 160071</p>
                    </a>

                </div>

                <div class="contact-option-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <i class="bi bi-chat-left-dots text-primary"></i>
                    </div>
                    <h3>Live Chat</h3>
                    <a href="https://wa.me/917717320084" target="_blank">Open WhatsApp</a>
                    <p>Available for immediate assistance.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- mainCourseForm Form  --}}
    @include('components.mainCourseForm')


@endsection
