<div class="offcanvas-body">
    <ul class="navbar-nav align-items-center justify-content-end align-items-center flex-grow-1 ">
      <li class="nav-item">
        <a class="nav-link @if ( $title == 'Beranda' ) active @endif me-md-4" href="/">Beranda</a>
      </li>
      <li class="nav-item">
      <a class="nav-link @if ( $title == 'Peta' ) active @endif{ 'active'} me-md-4" href="/peta">Peta</a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if ( $title == 'Panduan' ) active @endif me-md-4" href="/panduan">Panduan</a>
      </li>


      </li>
      <li class="nav-item">
        <a class="btn-medium btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
      </li>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="tabs-listing mt-4">
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade active show" id="nav-sign-in" role="tabpanel"
                    aria-labelledby="nav-sign-in-tab">
                    
                    <form id="form1" class="form-group flex-wrap p-3 " method="POST" action="{{ route('login') }}">
                      @csrf
                      <h2 style="color: black; text-align: center;">Silahkan Login!</h2>

<!-- Error pesan global jika login gagal -->
@if (session('error'))
    <div class="alert alert-danger text-center">
        {{ session('error') }}
    </div>
@endif

<div class="form-input col-lg-12 my-4">
    <label for="exampleInputEmail1" class="form-label fs-6 text-uppercase fw-bold text-black">Email Address</label>
    <input type="text" id="exampleInputEmail1" name="email" placeholder="Email"
           class="form-control ps-3 @error('email') is-invalid @enderror">
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>    
    @enderror
</div>

<div class="form-input col-lg-12 my-4">
    <label for="inputPassword1" class="form-label fs-6 text-uppercase fw-bold text-black">Password</label>
    <input type="password" id="inputPassword1" name="password" placeholder="Password"
           class="form-control ps-3 @error('password') is-invalid @enderror" aria-describedby="passwordHelpBlock">
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>                              
    @enderror
    {{-- <div id="passwordHelpBlock" class="form-text text-center">
        <a href="#" class="password">Forgot Password?</a>
    </div> --}}
</div>

                      <label class="py-3">
                        <input type="checkbox" required="" class="d-inline">
                        <span class="label-body text-black">Remember Me</span>
                      </label>
                      <div class="d-grid my-3">
                        <button class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Log
                          In</button>
                      </div>
                    </form>
                  </div>
                  <div class="tab-pane fade" id="nav-register" role="tabpanel"
                    aria-labelledby="nav-register-tab">
                    <form id="form2" class="form-group flex-wrap p-3 ">
                      <div class="form-input col-lg-12 my-4">
                        <label for="exampleInputEmail2"
                          class="form-label fs-6 text-uppercase fw-bold text-black">Email
                          Address</label>
                        <input type="text" id="exampleInputEmail2" name="email" placeholder="Email"
                          class="form-control ps-3">
                      </div>
                      <div class="form-input col-lg-12 my-4">
                        <label for="inputPassword2"
                          class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
                        <input type="password" id="inputPassword2" placeholder="Password"
                          class="form-control ps-3" aria-describedby="passwordHelpBlock">
                      </div>
                      <label class="py-3">
                        <input type="checkbox" required="" class="d-inline">
                        <span class="label-body text-black">I agree to the <a href="#"
                            class="text-black password border-bottom">Privacy Policy</a>
                        </span>
                      </label>
                      <div class="d-grid my-3">
                        <button
                          class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Sign
                          Up</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      {{-- <li class="nav-item">
        <a class="btn-medium btn btn-primary" href="#" data-bs-toggle="modal"
          data-bs-target="#exampleModal2">Sign Up</a>
      </li>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="tabs-listing mt-4">
                <nav>
                  <div class="nav nav-tabs d-flex justify-content-center border-0" id="nav-tab2" role="tablist">
                    <button class="btn btn-outline-primary text-uppercase me-4 " id="nav-sign-in-tab2"
                      data-bs-toggle="tab" data-bs-target="#nav-sign-in2" type="button" role="tab"
                      aria-controls="nav-sign-in2" aria-selected="false">Log In</button>
                    <button class="btn btn-outline-primary text-uppercase active" id="nav-register-tab2"
                      data-bs-toggle="tab" data-bs-target="#nav-register2" type="button" role="tab"
                      aria-controls="nav-register2" aria-selected="true">Sign Up</button>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent1">
                  <div class="tab-pane fade " id="nav-sign-in2" role="tabpanel"
                    aria-labelledby="nav-sign-in-tab2">
                    <form id="form3" class="form-group flex-wrap p-3 ">
                      <div class="form-input col-lg-12 my-4">
                        <label for="exampleInputEmail3"
                          class="form-label fs-6 text-uppercase fw-bold text-black">Email
                          Address</label>
                        <input type="text" id="exampleInputEmail3" name="email" placeholder="Email"
                          class="form-control ps-3">
                      </div>
                      <div class="form-input col-lg-12 my-4">
                        <label for="inputPassword3"
                          class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
                        <input type="password" id="inputPassword3" placeholder="Password"
                          class="form-control ps-3" aria-describedby="passwordHelpBlock">
                        <div id="passwordHelpBlock2" class="form-text text-center">
                          <a href="#" class=" password">Forgot Password ?</a>
                        </div>

                      </div>
                      <label class="py-3">
                        <input type="checkbox" required="" class="d-inline">
                        <span class="label-body text-black">Remember Me</span>
                      </label>
                      <div class="d-grid my-3">
                        <button class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Log
                          In</button>
                      </div>
                    </form>
                  </div>
                  <div class="tab-pane fade active show" id="nav-register2" role="tabpanel"
                    aria-labelledby="nav-register-tab2">
                    <form id="form4" class="form-group flex-wrap p-3 ">
                      <div class="form-input col-lg-12 my-4">
                        <label for="exampleInputEmail4"
                          class="form-label fs-6 text-uppercase fw-bold text-black">Email
                          Address</label>
                        <input type="text" id="exampleInputEmail4" name="email" placeholder="Email"
                          class="form-control ps-3">
                      </div>
                      <div class="form-input col-lg-12 my-4">
                        <label for="inputPassword4"
                          class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
                        <input type="password" id="inputPassword4" placeholder="Password"
                          class="form-control ps-3" aria-describedby="passwordHelpBlock">
                      </div>
                      <label class="py-3">
                        <input type="checkbox" required="" class="d-inline">
                        <span class="label-body text-black">I agree to the <a href="#"
                            class="text-black password border-bottom">Privacy Policy</a>
                        </span>
                      </label>
                      <div class="d-grid my-3">
                        <button
                          class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Sign
                          Up</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
    </ul>

  </div>