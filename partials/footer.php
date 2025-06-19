  <div class="p-bottom-45">
    <footer class="footer p-top-90 " data-aos="fade">

        <!-- Footer top -->
        <footer class="footer">
            <div class="container">
                <div class="row gy-4 ">
                    <div class="col-md-3 text-md-start text-center">
                        <div class="footer-logo"><a href="./"> <img src="assets/img/hero/logo.png" alt=""></a></div>
                        
                         <div class="social-icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>

                    </div>
                      <div class="col-md-3">
                        <h6>Useful Link</h6>
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Blog</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-3">
                       <h6>Useful Link</h6>
                        <ul>
                          
                            <li><a href=".about">About</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="contact-us">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h6>Say Hello</h6>
                        <ul>
                            <li><a href="mailto:admin@propedix.com"><i class="fas fa-envelope"></i>
                                    admin@propedix.com</a></li>
                            <li><a href="tel:+1800123456789"><i class="fas fa-phone"></i> +1-800123-456-789</a></li>
                        </ul>
                    </div>

                    <!-- <div class="col-md-4 text-md-start text-center">
                        <p class="subscribe">Subscribe to Our Newsletter</p>

                    </div>
                    <div class="col-md-5">
                        <form class="subscribe-form mt-3">
                            <input type="email" placeholder="Enter Your Email Address" required />
                            <button class="btn btn-primary1 btn-uppercase" type="submit">Subscribe Now <svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19"
                                    fill="none">
                                    <path
                                        d="M9.30603 15.8C9.21003 15.8 9.10203 15.77 8.98203 15.71C8.85003 15.614 8.76303 15.488 8.72103 15.332C8.67903 15.176 8.70003 15.026 8.78403 14.882L8.80203 14.864C9.18603 14.252 9.66003 13.634 10.224 13.01C11.34 11.798 12.564 10.826 13.896 10.094H0.90003C0.74403 10.094 0.60603 10.034 0.48603 9.91399C0.36603 9.79399 0.30603 9.65299 0.30603 9.49099C0.30603 9.32899 0.36603 9.19099 0.48603 9.07699C0.60603 8.96299 0.74403 8.90599 0.90003 8.90599H13.896C13.128 8.48599 12.396 7.98199 11.7 7.39399C11.136 6.91399 10.602 6.39199 10.098 5.82799C9.73803 5.41999 9.41403 5.01199 9.12603 4.60399C8.93403 4.33999 8.82003 4.17199 8.78403 4.09999C8.70003 3.96799 8.67903 3.82099 8.72103 3.65899C8.76303 3.49699 8.85303 3.37399 8.99103 3.28999C9.12903 3.20599 9.27903 3.18499 9.44103 3.22699C9.60303 3.26899 9.73203 3.36199 9.82803 3.50599C10.08 3.91399 10.422 4.36399 10.854 4.85599C11.61 5.73199 12.438 6.48799 13.338 7.12399C14.574 7.98799 15.876 8.58199 17.244 8.90599C17.376 8.94199 17.484 9.01699 17.568 9.13099C17.652 9.24499 17.694 9.36799 17.694 9.49999C17.694 9.63199 17.652 9.75499 17.568 9.86899C17.484 9.98299 17.376 10.052 17.244 10.076C15.864 10.4 14.556 11 13.32 11.876C12.42 12.524 11.592 13.286 10.836 14.162C10.416 14.654 10.074 15.104 9.81003 15.512C9.70203 15.68 9.53403 15.776 9.30603 15.8Z"
                                        fill="white"></path>
                                </svg></button>
                        </form>
                    </div> -->
                </div>

                <div class="pt-20"></div>
                <div class="row">
                    <div class="col-md-3">

                       
                    </div>
                  
                </div>

            </div>

            <div class="footer-bottom mt-5 pt-3">
                <div class="rights">© 2025 Propedix. All Rights Reserved.</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Term And Condition</a>
                    <a href="#">FAQ</a>
                </div>
            </div>
            </div>
        </footer>
        <!-- /Footer top -->

        <!-- Footer Bottom -->

        <!-- /Footer Bottom -->

    </footer>
    </div>
    
    <!-- /Footer -->

    
    <!-- Scroll top -->
    <a href="#" class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </a>
    <!-- /Scroll top -->

    <script defer src="assets/js/theme-1.min.js"></script>
    <script defer src="assets/js/theme-2.min.js"></script>
    <script defer src="assets/js/theme-3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get the current page URL
        const currentPage = window.location.pathname;

        // Get all nav links
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
            // Get the href attribute value
            const linkHref = link.getAttribute('href');

            // Check if it matches the current page URL
            if (linkHref && currentPage.includes(linkHref)) {
                // Remove .active class from all links
                navLinks.forEach(l => l.classList.remove('active'));

                // Add active class to the matched link
                link.classList.add('active');
            }
        });
    });
</script>

<script>
if (document.querySelector('.destination-slider')) {
  new Splide('.destination-slider', {
    perPage: 4,
    padding: 0,
    gap: '1.5rem',
    speed: 1000,
    type: 'loop',
    focus: 0,
    autoplay: true,
    interval: 3000,
    pauseOnHover: false,
    pauseOnFocus: false,
    arrows: true,
    breakpoints: {
      1400: {
        perPage: 3,
        padding: { left: 0, right: '180px' },
      },
      1200: {
        perPage: 1,
        padding: { left: 0, right: '280px' },
        arrows: false,
      },
      992: {
        perPage: 1,
        padding: { left: 0, right: '250px' },
        arrows: false,
      },
      576: {
        perPage: 1,
        gap: '0.75rem',
        arrows: false,
        padding: 0,
      },
    },
  }).mount();
}


</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const recentArticles = document.getElementById("recent-articles");

    function toggleSidebar() {
      const rect = recentArticles.getBoundingClientRect();
      const windowHeight = window.innerHeight;

      // Hide sidebar when "Recent Articles" section is visible
      if (rect.top < windowHeight && rect.bottom > 100) {
        sidebar.classList.add("hide");
      } else {
        sidebar.classList.remove("hide");
      }
    }

    window.addEventListener("scroll", toggleSidebar);
    window.addEventListener("resize", toggleSidebar);

    toggleSidebar(); // Run on page load
  });
</script>

    <script>
        // jQuery Counter
        $('.counter').each(function () {
            let $this = $(this),
                target = +$this.data('target'),
                count = 0,
                increment = target / 100;

            function updateCounter() {
                count += increment;
                if (count < target) {
                    $this.text(Math.ceil(count));
                    requestAnimationFrame(updateCounter);
                } else {
                    $this.text(target);
                }
            }

            updateCounter();
        });
    </script>

</body>




</html>