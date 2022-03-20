

  @extends('admin.master')

      @section('section')
          <div class="content-wrapper pb-0">
          
              <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card h-100 bg-primary">
                    <div class="card-body ">
                      <h5 class="card-title text-danger">Appointment</h5>
                      <i class="fas fa-calendar-check fa-4x me-2"></i>
                      <p class="text-white mt-2">Number :</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100 bg-success ">
                    <div class="card-body">
                      <h5 class="card-title text-white">Doctors</h5>
                      <i class="fas fa-user-md fa-4x me-2"></i>
                      <p class="text-white mt-2">Number :</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100 bg-danger">
                    <div class="card-body">
                      <h5 class="card-title text-white">Student Records</h5>
                      <i class="fas fa-book-medical fa-4x"></i>
                      <p class="text-white mt-2 text-primary">Number :</p>
                    </div>
                  </div>
                </div>
              </div>
          </div>

      @endsection

          

   