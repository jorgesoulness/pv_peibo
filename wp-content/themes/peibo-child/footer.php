          </div>
        </main>

        <!-- footer -->
        <footer class="g-footer" data-blur-content>
          <div class="container" style="z-index:4;">
            <div class="row justify-content-ccenter">
              <div class="col-12 col-md-4">
                <ul class="listFooter">
                  <li>
                    <img src="/wp-content/themes/peibo-child/assets/img/logos/LOGO.png" class="imgFooterLogo">
                  </li>
                  <li>
                    <label>Bosques de las Lomas, CDMX</label>
                  </li>
                  <li>
                    <a href="tel:+5212345678">T. 12.34.56.78</a>
                  </li>
                  <li>
                    <ul class="listSociales">
                      <li>
                        <a href="#">
                            <img src="/wp-content/themes/peibo-child/assets/img/ico-ins.png" width="50%">
                        </a>
                      </li>
                      <li>
                        <a href="#">
                            <img src="/wp-content/themes/peibo-child/assets/img/ico-fb.png" width="50%">
                        </a>
                      </li>
                      <li>
                        <a href="#">
                            <img src="/wp-content/themes/peibo-child/assets/img/icon-tw.png" width="50%">
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-4">
                <ul class="listFooter">
                    <!--<li>
                      <a href="/personal">Personal</a>
                    </li>-->
                    <li>
                      <a href="/empresas">Empresas</a>
                    </li>
                    <li>
                      <a href="/blog">Blog</a>
                    </li>
                  </ul>
              </div>
              <div class="col-12 col-md-4">
                <ul class="listFooter">
                    <li>
                      <a href="/legales">Legales</a>
                    </li>
                    <li>
                      <a href="/privacidad">Aviso de Privacidad</a>
                    </li>
                    <li>
                      <a href="/terminos-y-condiciones">Términos y Condiciones</a>
                    </li>
                  </ul>
              </div>
            </div>
          </div><!-- end.container -->
        </footer><!-- end.Footer -->
        
        <?php wp_footer(); ?>

        <script> 
          $('body').show();
          // $('.version').text(NProgress.version);  
          NProgress.start();
          setTimeout(function () {
            NProgress.done();
            $('.fadeX').addClass('out');
            $('body').removeClass('is-preload');
          }, 1000);

          // $("#b-0").click(function() { NProgress.start(); });
          // $("#b-40").click(function() { NProgress.set(0.4); });
          // $("#b-inc").click(function() { NProgress.inc(); });
          // $("#b-100").click(function() { NProgress.done(); });

          $(document).ready(function() {  
            function generateCVV() {
               var max = 900;
               var min = 0;
                var num = Math.floor(Math.random() * (max - min));
                var num_final = num + min;

                if(num_final < 100 && num_final > 10){
                  num_final = "0" + num_final;
                }
                if(num_final < 10){
                  num_final = "00" + num_final;
                }
                

                $(".cvvGene").empty().html(num_final);
            }
            setInterval(generateCVV, 1000);

            var scrollPos = 0;
            window.addEventListener('scroll', function(){
              if ((document.body.getBoundingClientRect()).top < scrollPos){
                $(".g-header").addClass("activeHead");
              }
              else{
                $(".g-header").removeClass("activeHead");
              }
            });

            $(".iconHambur").click(function(){
              if($(".menuDesMobile").hasClass("menu-none") == true){
                $(".menuDesMobile").show("slow").removeClass("menu-none").addClass("menu-open");
              }
              else{
                if($(".menuDesMobile").hasClass("menu-open") == true){
                  $(".menuDesMobile").hide("slow").removeClass("menu-open").addClass("menu-none");
                }
              }

            });

            $(".iconCloseMobile").click(function(){
              if($(".menuDesMobile").hasClass("menu-none") == true){
                $(".menuDesMobile").show("slow").removeClass("menu-none").addClass("menu-open");
              }
              else{
                if($(".menuDesMobile").hasClass("menu-open") == true){
                  $(".menuDesMobile").hide("slow").removeClass("menu-open").addClass("menu-none");
                }
              }
            });

        });
        </script>


    </body>
</html>
