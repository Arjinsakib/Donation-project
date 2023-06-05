@extends('frontend.master')

@section('title')
About
@endsection

@section('contant')
 <div class="container">
    <div class="row">
        <section class="about row d-flex flex-column text-center jusfify-content-center align-items-center">
            <div class="col-md-12">
              <div class="about-title">
                <h3>Be the <span style="color: #1a8fe3">Change</span></h3>
              </div>
              <div class="about-slogan">
                <p>Please help us to help other people who don’t have basic need.</p>
              </div>
              <div class="cards d-flex">
                <!-- help card -->
                <div class="card">
                  <div class="card-items pt-3">
                    <!-- heart icon -->
                    <span> <i class="fa fa-heart-pulse fa-2xl"></i></span>
                    <h4 class="py-3">Help</h4>

                    <button class="mt-5 card-btn">Learn More</button>
                  </div>
                </div>
                <!-- Donation Card -->
                <div class="card">
                  <div class="card-items pt-3">
                    <!-- heart icon -->
                    <span> <i class="fa fa-hand-holding-heart fa-2xl"></i></span>
                    <h4 class="py-3">Donation</h4>

                    <button class="mt-5 card-btn">Learn More</button>
                  </div>
                </div>
                <!-- Volunteer Card -->
                <div class="card">
                  <div class="card-items pt-3">
                    <!-- heart icon -->
                    <span> <i class="fa fa-handshake-angle fa-2xl"></i></span>
                    <h4 class="py-3">Volunteer</h4>

                    <button class="mt-5 card-btn">Learn More</button>
                  </div>
                </div>
              </div>
                <div class="row help-area">
                  <div class="col-md-8 d-flex align-content-lg-start">
                    <div class="help-img">
                      <img src="https://i.ibb.co/bKTbXQq/donating.png" alt="Helping Hand" />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="categories">
                      <div
                        class="d-flex category-details my-5 align-items-center justify-content-start border-bottom pb-2 border-secondary pe-5 pe-lg-5"
                      >
                        <span class="cate-icon"> <i class="fa fa-hand-holding-heart fa-xl mt-4 pt-1"></i></span>
                        <h5 class="py-3">CATEGORY 1</h5>
                      </div>
                      <div
                        class="d-flex category-details my-5 align-items-center justify-content-start border-bottom pb-2 border-secondary pe-5 pe-lg-5"
                      >
                        <span class="cate-icon"> <i class="fa fa-hand-holding-heart fa-xl mt-4 pt-1"></i></span>
                        <h5 class="py-3">CATEGORY 1</h5>
                      </div>
                      <div
                        class="d-flex category-details my-5 align-items-center justify-content-start border-bottom pb-2 border-secondary pe-5 pe-lg-5"
                      >
                        <span class="cate-icon"> <i class="fa fa-hand-holding-heart fa-xl mt-4 pt-1"></i></span>
                        <h5 class="py-3">CATEGORY 1</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="selfless-team">
                  <h1 class="fw-bold text-start">
                    Our
                    <span style="color: #1a8fe3">Selfless</span> Team
                  </h1>
                </div>
              </div>
            </div>
          </section>
          <div class="selfless-card-area py-5 my5">
            <!-- card  -->
            <div class="selfless-card">
                <div class="selfless-card-img">
                  <img src="https://scontent.fdac138-2.fna.fbcdn.net/v/t39.30808-6/338242540_135343032823695_817299987142090419_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeH1w9-eZEz-JSkBwU8Qk2XYYOOyRs2J3IRg47JGzYnchEiD1tCRhuRELWTp5jprkCa3Dd5RNm_AWDw0KtgBWDZv&_nc_ohc=EeZzODaqXssAX-VQKfW&_nc_ht=scontent.fdac138-2.fna&oh=00_AfDkfXZn94ExhUFf3yhovkVH1wyEoDwKwhXjmKCAAO5UKw&oe=6478BC76" alt="" />
                </div>
                <div class="selfless-card-details">
                  <h2>Rayhan Mahmud</h2>
                  <h5 class="">(volunteer)</h5>
                  <div class="social-icons">
                    <span class="social-icon"> <i class="fab fa-facebook-f"></i></span>
                    <span class="social-icon"> <i class="fab fa-twitter"></i></span>
                    <span class="social-icon"> <i class="fab fa-instagram"></i></span>
                    <span class="social-icon"> <i class="fab fa-linkedin-in"></i></span>
                  </div>
                </div>
              </div>
            <div class="selfless-card">
                <div class="selfless-card-img">
                  <img src="https://scontent.fdac138-1.fna.fbcdn.net/v/t39.30808-6/313410975_2096630477201032_5027175571730445037_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=174925&_nc_eui2=AeHsJqMIKF75Bf59CYIw1_eDBNt_hwR4QEIE23-HBHhAQt_braGh1x548OTd_J5mU508FSFf9cDMIID2p0G2Cv9U&_nc_ohc=0XtwRxDHppUAX-sCxYo&_nc_ht=scontent.fdac138-1.fna&oh=00_AfBS6WEGgtq-7YFuKujl-bikwEWh6MApleKLwaGu3c13cA&oe=6478991D" alt="" />
                </div>
                <div class="selfless-card-details">
                  <h2>Nazmul Islam Sakib</h2>
                  <h5 class="">(volunteer)</h5>
                  <div class="social-icons">
                    <span class="social-icon"> <i class="fab fa-facebook-f"></i></span>
                    <span class="social-icon"> <i class="fab fa-twitter"></i></span>
                    <span class="social-icon"> <i class="fab fa-instagram"></i></span>
                    <span class="social-icon"> <i class="fab fa-linkedin-in"></i></span>
                  </div>
                </div>
              </div>
              <div class="selfless-card">
              <div class="selfless-card-img">
                <img src="https://scontent.fdac138-1.fna.fbcdn.net/v/t39.30808-6/316002614_3009379982694651_812756078947260571_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHC6lOqiEDj6Cof5q8T1cs4BcnzMGQKWh8FyfMwZApaH4gyUn6loxuAWw704GBgor7chutqH2fJI9IQycqhLib1&_nc_ohc=lspS1V_8tigAX_DKK9G&_nc_ht=scontent.fdac138-1.fna&oh=00_AfB5PhumawRqYainvm83J0zyD5PWb1Tn4jYwWLSfJ25B7g&oe=64791A47" alt="" />
              </div>
              <div class="selfless-card-details">
                <h2>Abdul Goni</h2>
                <h5 class="">(volunteer)</h5>
                <div class="social-icons">
                  <span class="social-icon"> <i class="fab fa-facebook-f"></i></span>
                  <span class="social-icon"> <i class="fab fa-twitter"></i></span>
                  <span class="social-icon"> <i class="fab fa-instagram"></i></span>
                  <span class="social-icon"> <i class="fab fa-linkedin-in"></i></span>
                </div>
              </div>
            </div>
            <!-- card  -->
            <div class="selfless-card">
              <div class="selfless-card-img">
                <img src="https://i.ibb.co/fv77Nbn/avatar.jpg" alt="" />
              </div>
              <div class="selfless-card-details">
                <h2>Salimul Haq Roni</h2>
                <h5 class="">(volunteer)</h5>
                <div class="social-icons">
                  <span class="social-icon"> <i class="fab fa-facebook-f"></i></span>
                  <span class="social-icon"> <i class="fab fa-twitter"></i></span>
                  <span class="social-icon"> <i class="fab fa-instagram"></i></span>
                  <span class="social-icon"> <i class="fab fa-linkedin-in"></i></span>
                </div>
              </div>
            </div>
            <!-- card  -->
            <div class="selfless-card">
              <div class="selfless-card-img">
                <img src="https://i.ibb.co/fv77Nbn/avatar.jpg" alt="" />
              </div>
              <div class="selfless-card-details">
                <h2>Sristy Banik</h2>
                <h5 class="">(volunteer)</h5>
                <div class="social-icons">
                  <span class="social-icon"> <i class="fab fa-facebook-f"></i></span>
                  <span class="social-icon"> <i class="fab fa-twitter"></i></span>
                  <span class="social-icon"> <i class="fab fa-instagram"></i></span>
                  <span class="social-icon"> <i class="fab fa-linkedin-in"></i></span>
                </div>
              </div>
            </div>
            <!-- card  end-->
          </div>
        </div>
    </div>
 </div>



  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
  <script src="donation.js"></script>
  <script src="https://kit.fontawesome.com/6d0b1f8f6a.js" crossorigin="anonymous"></script>
@endsection
