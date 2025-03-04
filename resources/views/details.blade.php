@extends('layouts.layout')

@section('main')
<style>
    @media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}

.gradient-custom-2 {
/* fallback for old browsers */
background: #a1c4fd;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1))
}

.bg-indigo {
background-color: #4835d4;
}
@media (min-width: 992px) {
.card-registration-2 .bg-indigo {
border-top-right-radius: 15px;
border-bottom-right-radius: 15px;
}
}
@media (max-width: 991px) {
.card-registration-2 .bg-indigo {
border-bottom-left-radius: 15px;
border-bottom-right-radius: 15px;
}
}
</style>
<section class="h-100 h-custom gradient-custom-2">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="p-5">
                    <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>

                    <div class="mb-4 pb-2">
                      <select data-mdb-select-init>
                        <option value="1">Title</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                      </select>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">

                        <div data-mdb-input-init class="form-outline">
                          <input type="text" id="form3Examplev2" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Examplev2">First name</label>
                        </div>

                      </div>
                      <div class="col-md-6 mb-4 pb-2">

                        <div data-mdb-input-init class="form-outline">
                          <input type="text" id="form3Examplev3" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Examplev3">Last name</label>
                        </div>

                      </div>
                    </div>

                    <div class="mb-4 pb-2">
                      <select data-mdb-select-init>
                        <option value="1">Position</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                      </select>
                    </div>

                    <div class="mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Examplev4" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplev4">Position</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">

                        <div data-mdb-input-init class="form-outline">
                          <input type="text" id="form3Examplev5" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Examplev5">Bussines Arena</label>
                        </div>

                      </div>
                      <div class="col-md-6">

                        <select data-mdb-select-init>
                          <option value="1">Employees</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                          <option value="4">Four</option>
                        </select>

                      </div>
                    </div>

                  </div>
                </div>
                <div class="col-lg-6 bg-indigo text-white">
                  <div class="p-5">
                    <h3 class="fw-normal mb-5">Contact Details</h3>

                    <div class="mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline form-white">
                        <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea2">Street + Nr</label>
                      </div>
                    </div>

                    <div class="mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline form-white">
                        <input type="text" id="form3Examplea3" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea3">Additional Information</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-5 mb-4 pb-2">

                        <div data-mdb-input-init class="form-outline form-white">
                          <input type="text" id="form3Examplea4" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Examplea4">Zip Code</label>
                        </div>

                      </div>
                      <div class="col-md-7 mb-4 pb-2">

                        <div data-mdb-input-init class="form-outline form-white">
                          <input type="text" id="form3Examplea5" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Examplea5">Place</label>
                        </div>

                      </div>
                    </div>

                    <div class="mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline form-white">
                        <input type="text" id="form3Examplea6" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea6">Country</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-5 mb-4 pb-2">

                        <div data-mdb-input-init class="form-outline form-white">
                          <input type="text" id="form3Examplea7" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Examplea7">Code +</label>
                        </div>

                      </div>
                      <div class="col-md-7 mb-4 pb-2">

                        <div data-mdb-input-init class="form-outline form-white">
                          <input type="text" id="form3Examplea8" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Examplea8">Phone Number</label>
                        </div>

                      </div>
                    </div>

                    <div class="mb-4">
                      <div data-mdb-input-init class="form-outline form-white">
                        <input type="text" id="form3Examplea9" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea9">Your Email</label>
                      </div>
                    </div>

                    <div class="form-check d-flex justify-content-start mb-4 pb-3">
                      <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" />
                      <label class="form-check-label text-white" for="form2Example3">
                        I do accept the <a href="#!" class="text-white"><u>Terms and Conditions</u></a> of your
                        site.
                      </label>
                    </div>

                    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg"
                      data-mdb-ripple-color="dark">Register</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
