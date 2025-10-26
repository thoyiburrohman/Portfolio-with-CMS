<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile->name }} | {{ $profile->short_bio }}</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link href="{{ asset('libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Sweet Alerts js -->
    <script src="{{ asset('libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/fa97313657.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

</head>

<body class="gradient-bg">
    <!-- Navbar -->

    @include('partials.navbar')

    @yield('content')

    <!-- Footer -->
    @include('partials.footer')

    <!-- Back to Top Button -->
    <button id="back-to-top"
        class="fixed bottom-8 right-8 w-12 h-12 rounded-full bg-teal-500 text-white flex items-center justify-center shadow-lg hover:bg-teal-700 hover:shadow-xl transition-all duration-300 opacity-0 invisible">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="{{ asset('libs/jquery.com/jquery-3.6.0.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#send-btn').click(function() {
                var formData = $('#formContact').serialize(); // Mengambil data formulir modal
                $.ajax({
                    type: 'POST',
                    url: '{{ route('form-message') }}', // Ganti dengan URL endpoint Anda
                    data: formData,
                    success: function(response) {
                        // Logika setelah berhasil
                        $('#formContact')[0].reset();
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Pesan anda berhasil dikirim'
                        })

                    },
                    error: function(xhr, status, error) {
                        // Logika jika terjadi kesalahan
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Mohon Cek Kembali'
                        });
                        console.log(error);
                    }
                });
            });
        });
    </script>
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });

                    // Close mobile menu if open
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });

        // Back to top button
        const backToTopButton = document.getElementById('back-to-top');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });

        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });


        // ScrollReveal animations
        ScrollReveal().reveal('.blob', {
            origin: 'top',
            distance: '50px',
            duration: 1000,
            delay: 200,
            easing: 'cubic-bezier(0.5, 0, 0, 1)',
            scale: 0.9,
            opacity: 0
        });

        ScrollReveal().reveal('section', {
            origin: 'bottom',
            distance: '50px',
            duration: 800,
            delay: 200,
            easing: 'ease-out',
            opacity: 0,
            interval: 200
        });

        // Animate skill bars on scroll
        const skillBars = document.querySelectorAll('.skill-progress');

        const animateSkillBars = () => {
            skillBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0%';

                const observer = new IntersectionObserver((entries) => {
                    if (entries[0].isIntersecting) {
                        bar.style.width = width;
                        observer.unobserve(bar);
                    }
                }, {
                    threshold: 0.5
                });

                observer.observe(bar);
            });
        };

        // Run once when page loads
        animateSkillBars();

        // Highlight active nav link on scroll
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', () => {
            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;

                if (pageYOffset >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active-nav');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active-nav');
                }
            });
        });
    </script>
</body>

</html>
