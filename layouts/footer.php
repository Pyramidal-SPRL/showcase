<footer class="bg-light">
    <div class="container pb-13 pb-md-15">
      <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-300 mb-14 pyramidal-background">
        <div class="card-body p-10 p-xl-12">
          <div class="row text-center">
            <div class="col-xl-11 col-xxl-9 mx-auto">
              <h2 class="fs-16 text-uppercase text-white mb-3"><?= $locale['footer']['join_us']; ?></h2>
              <h3 class="display-3 mb-8 px-lg-8 text-white"><?= $locale['footer']['join_us_description']; ?></h3>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <span><a class="btn btn-white rounded" href="/contact"><?= $locale['global']['contact_us']; ?></a></span>
          </div>
        </div>
      </div>
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title  mb-3">Pyramidal</h4>
            <p class="mb-4">© 2023 Pyramidal. <br class="d-none d-lg-block"/><?= $locale['footer']['copyright']; ?></p>
            <nav class="nav social ">
              <a href="https://www.facebook.com/profile.php?id=61554745736425" target="_blank"><i class="uil uil-facebook-f"></i></a>
            </nav>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title  mb-3"><?= $locale['global']['contact_us']; ?></h4>
            <address class="pe-xl-15 pe-xxl-17">Rue Reine  Astrid 44, 4260 Ciplet, Belgique</address>
            <a href="mailto:info@pyramidal.be" class="link-body">info@pyramidal.be</a><br />+32 (0) 496 26 65 69
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title  mb-3"><?= $locale['footer']['find_out_more']; ?></h4>
            <ul class="list-unstyled text-reset mb-0">
              <li><a href="#"></a></li>
              <li><a href="https://ez-link.be">EZLink</a></li>
              <li><a href="/contact"><?= $locale['global']['contact_us']; ?></a></li>
              <li><a href="https://my.pyramidal.be/login"><?= $locale['global']['login']; ?></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-12 col-lg-3">
          <div class="widget">
            <h4 class="widget-title  mb-3"><?= $locale['footer']['newsletter']; ?></h4>
            <p class="mb-5"><?= $locale['footer']['newsletter_description']; ?></p>
            <div class="newsletter-wrapper">
              <div id="mc_embed_signup2">
                <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate " target="_blank" novalidate>
                  <div id="mc_embed_signup_scroll2">
                    <div class="mc-field-group input-group form-floating">
                      <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                      <label for="mce-EMAIL2"><?= $locale['footer']['e_mail_address']; ?></label>
                      <input type="submit" value="<?= $locale['footer']['subscribe']; ?>" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-green">
                    </div>
                    <div id="mce-responses2" class="clear">
                      <div class="response" id="mce-error-response2" style="display:none"></div>
                      <div class="response" id="mce-success-response2" style="display:none"></div>
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                    <div class="clear"></div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="./assets/js/plugins.js"></script>
  <script src="./assets/js/theme.js"></script>
  <script src="./assets/js/pyramidal.js"></script>
</body>
</html>