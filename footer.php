<!-- FOOTER SECTION --> 

<footer id="main-footer" class="py-3">
        <div class="container text-center">
            <div class="row d-flex justify-content-center">
                <div>
                    <p class="lead">
                        Copyright &copy; <span id="year"></span> booksXchange
                    </p>
                </div>
                <div class="">
                  <div class="d-flex flex-row justify-content-center align-items-center">
                  <!-- Not showing twitter on mobile screen -->  
                    <div>
                      <a href="https://twitter.com/iamazizmohmdi" class="text-white p-3">
                        <i class="fab fa-twitter fa-2x" style="color: #1DA1F2;"></i>
                      </a>
                    </div>
                    <div>
                      <a href="https://facebook.com/iamazizmohmdi" class="text-white p-3">
                        <i class="fab fa-facebook fa-2x" style="color: #4267B2;"></i>
                      </a>
                    </div>
                    <div>
                      <a href="https://instagram.com/iamazizmohmdi" class="text-white p-3">
                        <i class="fab fa-instagram fa-2x" style="color: #405DE6;"></i>
                      </a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script>
        // Get Full Year
        $('#year').text(new Date().getFullYear());

      // Lightbox Init
      $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
       });
    </script>
  </body>
</html>