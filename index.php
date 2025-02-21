<?php include './layouts/header.php';?>
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300 pyramidal-background">
      <div class="container pt-17 pb-19 pt-md-18 pb-md-17 text-center">
        <div class="row">
          <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto" data-cues="slideInDown" data-group="page-title">
            <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0"><?= $locale['homepage']['header']; ?></h1>
            <p class="lead fs-24 text-white lh-sm mb-7 mx-md-13 mx-lg-10"><?= $locale['homepage']['header_subtitle']; ?></p>
            <div>
              <a class="btn btn-white rounded mb-10 mb-xxl-5" href="#notre-offre"><?= $locale['homepage']['header_button']; ?></a>
            </div>
          </div>
        </div>
      </div>
      <div class="overflow-hidden">
        <div class="divider text-light mx-n2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
            <path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
          </svg>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light">
      <div class="container pb-15 pb-md-17">
        <div class="row gx-md-5 gy-5 mt-n19 mb-14 mb-md-17">
          <div class="col-md-6 col-xl-4">
            <div class="card shadow-lg">
              <div class="card-body">
                <img src="./assets/img/icons/solid/touchscreen.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-green mb-3" alt="" />
                <h4><?= $locale['homepage']['services_first_title']; ?></h4>
                <p class="mb-2"><?= $locale['homepage']['services_first_description']; ?></p>
                <a href="#notre-offre" class="more hover link-green"><?= $locale['homepage']['discover_our_offer']; ?></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4">
            <div class="card shadow-lg">
              <div class="card-body">
                <img src="./assets/img/icons/solid/script.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-green mb-3" alt="" />
                <h4><?= $locale['homepage']['services_second_title']; ?></h4>
                <p class="mb-2"><?= $locale['homepage']['services_second_description']; ?></p>
                <a href="#notre-offre" class="more hover link-green"><?= $locale['homepage']['discover_our_offer']; ?></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4">
            <div class="card shadow-lg">
              <div class="card-body">
                <img src="./assets/img/icons/solid/gears.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-green mb-3" alt="" />
                <h4><?= $locale['homepage']['services_third_title']; ?></h4>
                <p class="mb-2"><?= $locale['homepage']['services_third_description']; ?></p>
                <a href="/contact" class="more hover link-green"><?= $locale['global']['contact_us']; ?></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="notre-offre">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mx-auto text-center">
            <h2 class="fs-16 text-uppercase text-muted mb-3"><?= $locale['homepage']['offer_subtitle']; ?></h2>
            <h3 class="display-3 mb-10 px-xl-10 px-xxl-15"><?= $locale['homepage']['offer_title']; ?></h3>
          </div>
        </div>
        <ul class="nav nav-tabs nav-tabs-bg nav-tabs-shadow-lg d-flex justify-content-between nav-justified flex-lg-row flex-column">
          <li class="nav-item"> <a class="nav-link d-flex flex-row active offer-step-btn" data-bs-toggle="tab" href="#tab2-1">
              <div><img src="./assets/img/icons/solid/bulb.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-green me-4" alt="" /></div>
              <div>
                <h4><?= $locale['homepage']['offer_first_step']; ?></h4>
                <p><?= $locale['homepage']['offer_first_step_short']; ?></p>
              </div>
            </a> </li>
          <li class="nav-item"> <a class="nav-link d-flex flex-row offer-step-btn" data-bs-toggle="tab" href="#tab2-2">
              <div><img src="./assets/img/icons/solid/compare.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-green me-4" alt="" /></div>
              <div>
                <h4><?= $locale['homepage']['offer_second_step']; ?></h4>
                <p><?= $locale['homepage']['offer_second_step_short']; ?></p>
              </div>
            </a> </li>
          <li class="nav-item"> <a class="nav-link d-flex flex-row offer-step-btn" data-bs-toggle="tab" href="#tab2-3">
              <div><img src="./assets/img/icons/solid/delivery-box.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-green me-4" alt="" /></div>
              <div>
                <h4><?= $locale['homepage']['offer_third_step']; ?></h4>
                <p><?= $locale['homepage']['offer_third_step_short']; ?></p>
              </div>
            </a> </li>
        </ul>
        <div class="tab-content mt-6 mt-lg-8" id="offer-step-content">
          <div class="tab-pane fade show active" id="tab2-1">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
              <div class="col-lg-6">
                <figure class="rounded shadow-lg"><img src="./assets/img/photos/se5.jpg" srcset="./assets/img/photos/se5@2x.jpg 2x" alt=""></figure>
              </div>
              <div class="col-lg-6">
                <h2 class="mb-3"><?= $locale['homepage']['offer_first_step']; ?></h2>
                <p><?= $locale['homepage']['offer_first_step_description']; ?></p>
                <ul class="icon-list bullet-bg bullet-soft-green">
                <?= $locale['homepage']['offer_first_step_keys']; ?>
                </ul>
                <a href="/contact" class="btn btn-green mt-2"><?= $locale['homepage']['a_question_contact_us']; ?></a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab2-2">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
              <div class="col-lg-6 order-lg-2">
                <figure class="rounded shadow-lg"><img src="./assets/img/photos/se6.jpg" srcset="./assets/img/photos/se6@2x.jpg 2x" alt=""></figure>
              </div>
              <div class="col-lg-6">
                <h2 class="mb-3"><?= $locale['homepage']['offer_second_step']; ?></h2>
                <p><?= $locale['homepage']['offer_second_step_description']; ?></p>
                <ul class="icon-list bullet-bg bullet-soft-green">
                <?= $locale['homepage']['offer_second_step_keys']; ?>
                </ul>
                <a href="/contact" class="btn btn-green mt-2"><?= $locale['homepage']['a_question_contact_us']; ?></a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab2-3">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
              <div class="col-lg-6">
                <figure class="rounded shadow-lg"><img src="./assets/img/photos/se7.jpg" srcset="./assets/img/photos/se7@2x.jpg 2x" alt=""></figure>
              </div>
              <div class="col-lg-6">
                <h2 class="mb-3"><?= $locale['homepage']['offer_third_step']; ?></h2>
                <p><?= $locale['homepage']['offer_third_step_description']; ?></p>
                <ul class="icon-list bullet-bg bullet-soft-green">
                <?= $locale['homepage']['offer_third_step_keys']; ?>
                </ul>
                <a href="/contact" class="btn btn-green mt-2"><?= $locale['homepage']['a_question_contact_us']; ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-gray">
      <div class="container py-15 py-md-17 pb-md-19">
        <div class="row align-items-center gy-8 mb-13">
          <div class="col-lg-7 text-center text-lg-start">
            <h2 class="fs-16 text-uppercase text-muted mb-3"><?= $locale['homepage']['reviews_subtitle']; ?></h2>
            <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15"><?= $locale['homepage']['reviews_title']; ?></h3>
          </div>
          <div class="col-lg-5">
            <div class="row gy-6 text-center">
              <div class="col-md-6">
                <div class="progressbar semi-circle green" data-value="95"></div>
                <h4 class="mb-0"><?= $locale['homepage']['reviews_customer_satisfaction']; ?></h4>
              </div>
              <div class="col-md-6">
                <div class="progressbar semi-circle green" data-value="80"></div>
                <h4 class="mb-0"><?= $locale['homepage']['reviews_time_saved']; ?></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light">
      <div class="container"> <!-- py-16 py-md-18 -->
        <!-- <div class="card shadow-lg mt-n21 mt-md-n23"> -->
          <!-- <div class="row gx-0">
            <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start" data-image-src="./assets/img/photos/tm2.jpg">
            </div>
            <div class="col-lg-6">
              <div class="p-10 p-md-11 px-lg-13 py-lg-14">
                <div class="swiper-container dots-closer mb-6" data-margin="30" data-dots="true">
                  <div class="swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide text-center">
                        <span class="ratings five mt-4 mb-3"></span>
                        <blockquote class="border-0 fs-lg text-center">
                          <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio.”</p>
                          <div class="blockquote-details justify-content-center text-center">
                            <div class="info ps-0">
                              <h5 class="mb-1">Nom Prénom</h5>
                              <p class="mb-0">Role</p>
                            </div>
                          </div>
                        </blockquote>
                      </div>
                      <div class="swiper-slide text-center">
                        <span class="ratings five mt-4 mb-3"></span>
                        <blockquote class="border-0 fs-lg text-center">
                          <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio.”</p>
                          <div class="blockquote-details justify-content-center text-center">
                            <div class="info ps-0">
                              <h5 class="mb-1">Nom Prénom</h5>
                              <p class="mb-0">Role</p>
                            </div>
                          </div>
                        </blockquote>
                      </div>
                      <div class="swiper-slide text-center">
                        <span class="ratings five mt-4 mb-3"></span>
                        <blockquote class="border-0 fs-lg text-center">
                          <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio.”</p>
                          <div class="blockquote-details justify-content-center text-center">
                            <div class="info ps-0">
                              <h5 class="mb-1">Nom Prénom</h5>
                              <p class="mb-0">Role</p>
                            </div>
                          </div>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        <!-- </div> -->
        <div class="row mt-17">
          <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto text-center">
            <h2 class="fs-16 text-uppercase text-muted mb-3"><?= $locale['homepage']['projects_subtitle']; ?></h2>
            <h3 class="display-3 mb-10"><?= $locale['homepage']['projects_title']; ?></h3>
          </div>
        </div>
        <div class="swiper-container grid-view" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <figure class="rounded mb-6"><img src="./assets/img/realisations/emilievanlaethem.png" srcset="./assets/img/photos/pd7@2x.jpg 2x" alt="" /><a class="item-link" href="./assets/img/realisations/emilievanlaethem.png" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                <div class="project-details d-flex justify-content-center flex-column">
                  <div class="post-header">
                    <h2 class="post-title h3"><a href="https://emilievanlaethem.be" target="_blank" class="link-dark">emilievanlaethem.be</a></h2>
                    <div class="post-category text-ash">Professeur de chant</div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <figure class="rounded mb-6"><img src="./assets/img/realisations/f2architecte.png" srcset="./assets/img/photos/pd8@2x.jpg 2x" alt="" /><a class="item-link" href="./assets/img/realisations/f2architecte.png" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                <div class="project-details d-flex justify-content-center flex-column">
                  <div class="post-header">
                    <h2 class="post-title h3"><a href="https://f2architecte.be" target="_blank" class="link-dark">f2architecte.be</a></h2>
                    <div class="post-category text-ash">Architecte</div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <figure class="rounded mb-6"><img src="./assets/img/realisations/ezlink.png" srcset="./assets/img/photos/pd9@2x.jpg 2x" alt="" /><a class="item-link" href="./assets/img/realisations/ezlink.png" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                <div class="project-details d-flex justify-content-center flex-column">
                  <div class="post-header">
                    <h2 class="post-title h3"><a href="https://ez-link.be" target="_blank" class="link-dark">ez-link.be</a></h2>
                    <div class="post-category text-ash">Logiciel pour hôpitaux</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mt-17 mb-5">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-12 text-center">
                <img src="./assets/img/equipe/yves_delvaux.jpg" width="250rem" alt="">
              </div>
              <div class="col-md-6 text-center">
                <img src="./assets/img/equipe/coralie_gillard.jpg" width="250rem">
              </div>
              <div class="col-md-6 text-center">
                <img src="./assets/img/equipe/gaspard_delvaux.jpg" width="250rem" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <h2 class="fs-16 text-uppercase text-muted mb-3"><?= $locale['homepage']['company_subtitle']; ?></h2>
            <h3 class="display-3 mb-8"><?= $locale['homepage']['company_title']; ?></h3>
            <div class="row gy-6">
              <div class="col-md-6">
                <div class="d-flex flex-row">
                  <div>
                    <img src="./assets/img/icons/solid/lamp.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-green me-4" alt="" />
                  </div>
                  <div>
                    <h4 class="mb-1"><?= $locale['homepage']['company_creativity_title']; ?></h4>
                    <p class="mb-0"><?= $locale['homepage']['company_creativity_description']; ?></p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex flex-row">
                  <div>
                    <img src="./assets/img/icons/solid/bulb.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-green me-4" alt="" />
                  </div>
                  <div>
                    <h4 class="mb-1"><?= $locale['homepage']['company_collaboration_title']; ?></h4>
                    <p class="mb-0"><?= $locale['homepage']['company_collaboration_description']; ?></p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex flex-row">
                  <div>
                    <img src="./assets/img/icons/solid/puzzle.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-green me-4" alt="" />
                  </div>
                  <div>
                    <h4 class="mb-1"><?= $locale['homepage']['company_experience_title']; ?></h4>
                    <p class="mb-0"><?= $locale['homepage']['company_experience_description']; ?></p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex flex-row">
                  <div>
                    <img src="./assets/img/icons/solid/headphone.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-green me-4" alt="" />
                  </div>
                  <div>
                    <h4 class="mb-1"><?= $locale['homepage']['company_support_title']; ?></h4>
                    <p class="mb-0"><?= $locale['homepage']['company_support_description']; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include './layouts/footer.php';?>