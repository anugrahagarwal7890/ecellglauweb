 <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<div class="nav transbar mobile_hide" id="nav">
    <div class="nav_logo_small">
        <a href="https://www.gla.ac.in/ecell/"><img src="images/E-Cell%20Logo%20Black.png" alt="nav logo"></a>

    </div>
    <div class="nav_links">
        <a href="https://www.gla.ac.in/ecell/">
            <h2>HOME</h2>
        </a>
    </div>
    
 
  
</div>


<script type="text/javascript">
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 100) {
                $(".transbar").addClass("darkbar");
            } else {
                $(".transbar").removeClass("darkbar");
            }
        });

    </script>

        <!--Smooth Scrolling javascript from Github-->
    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });

    </script>

</script>
