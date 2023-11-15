<?php include './layouts/header.php';?>
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300 pyramidal-background">
      <div class="container pt-17 pb-19 pt-md-18 pb-md-17 text-center">
        <div class="row">
          <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto" data-cues="slideInDown" data-group="page-title">
            <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0">Travaillons ensemble, dès <span class="underline-3 style-2 white">maintenant</span>.</h1>
            <p class="lead fs-24 text-white lh-sm mb-7 mx-md-13 mx-lg-10">Contactez-nous dès aujourd'hui.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light angled upper-end">
      <div class="container py-14 py-md-16">
        <div class="row gy-10 gx-lg-8 gx-xl-12 mb-16 align-items-center">
          <div class="col-lg-7 position-relative">
            <div class="shape bg-dot primary rellax w-18 h-18" data-rellax-speed="1" style="top: 0; left: -1.4rem; z-index: 0;"></div>
            <div class="row gx-md-5 gy-5">
              <div class="col-md-6">
                <figure class="rounded mt-md-10 position-relative"><img src="./assets/img/photos/g5.jpg" srcset="./assets/img/photos/g5@2x.jpg 2x" alt=""></figure>
              </div>
              <div class="col-md-6">
                <div class="row gx-md-5 gy-5">
                  <div class="col-md-12 order-md-2">
                    <figure class="rounded"><img src="./assets/img/photos/g6.jpg" srcset="./assets/img/photos/g6@2x.jpg 2x" alt=""></figure>
                  </div>
                  <div class="col-md-10">
                    <div class="card bg-pale-primary text-center counter-wrapper">
                      <div class="card-body py-11">
                        <h3 class="counter text-nowrap">100+</h3>
                        <p class="mb-0">Clients satisfaits</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <h2 class="display-4 mb-8">Vous êtes convaincu? Réalisons quelque chose de grand ensemble.</h2>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">Adresse</h5>
                <address>Rue Reine Astrid 44, <br class="d-none d-md-block" />4260 Ciplet, Belgique</address>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">Téléphone</h5>
                <p>+32 (0) 496 26 65 69</p>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">E-mail</h5>
                <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-body">info@pyramidal.be</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
            <h2 class="display-4 mb-3 text-center">Laissez-nous un message</h2>
            <p class="lead text-center mb-10">Contactez-nous et nous vous répondrons dans les plus brefs délais.</p>
            <form class="contact-form needs-validation" method="post" action="./assets/php/contact.php" novalidate>
              <div class="messages"></div>
              <div class="row gx-4">
                <div class="col-md-6">
                  <div class="form-floating mb-4">
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required>
                    <label for="form_name">Prénom *</label>
                    <div class="valid-feedback"> Parfait! </div>
                    <div class="invalid-feedback"> Veuillez saisir votre prénom. </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-4">
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe" required>
                    <label for="form_lastname">Nom de famille *</label>
                    <div class="valid-feedback"> Parfait! </div>
                    <div class="invalid-feedback"> Veuillez saisir votre nom de famille. </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-4">
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
                    <label for="form_email">E-mail *</label>
                    <div class="valid-feedback"> Parfait! </div>
                    <div class="invalid-feedback"> Veuillez fournir une adresse électronique valide. </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-select-wrapper mb-4">
                    <select class="form-select" id="form-select" name="department" required>
                      <option selected disabled value="">Sélectionner un département</option>
                      <option value="Sales">Création de sites & applications web</option>
                      <option value="Marketing">Bases de données ou partage d'informations</option>
                      <option value="Customer Support">Consultance ou administration</option>
                    </select>
                    <div class="valid-feedback"> Parfait! </div>
                    <div class="invalid-feedback"> Veuillez sélectionner un département. </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-4">
                    <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                    <label for="form_message">Message *</label>
                    <div class="valid-feedback"> Parfait! </div>
                    <div class="invalid-feedback"> Veuillez saisir votre message. </div>
                  </div>
                </div>
                <div class="col-12 text-center">
                  <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Send message">
                  <p class="text-muted"><strong>*</strong> Ces champs sont obligatoires.</p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include './layouts/footer.php';?>