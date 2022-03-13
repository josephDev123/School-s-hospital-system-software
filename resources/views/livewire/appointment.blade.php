<section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
         <div class="row">

              <div class="col-md-6 col-sm-6">
                   <img src="user/asset/images/appointment-image.jpg" class="img-responsive" alt="">
              </div>

              <div class="col-md-6 col-sm-6">
                   <!-- CONTACT FORM HERE -->
                   @if (session()->has('success'))
                   <div class="alert alert-success" role="alert">
                        {{session('success') }}
                  </div>
                   @endif
                   <form id="appointment-form" role="form" action="#" wire:submit.prevent = 'submit'>

                        <!-- SECTION TITLE -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                             <h2>Make an appointment</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                             <div class="col-md-6 col-sm-6">
                                  <label for="name">Student name</label>
                                  <input type="text" class="form-control" id="name" name="student_name" wire:model='student_name' placeholder="Full Name">
                                  @error('student_name')
                                   <div class="alert alert-warning" role="alert">{{ $message }}</div>
                                  @enderror
                             </div>
                           
                            

                             <div class="col-md-6 col-sm-6">
                                  <label for="email">Email</label>
                                  <input type="email" class="form-control" id="email" name="student_email" wire:model='student_email' placeholder="Your Email">
                                  @error('student_email')
                                        <div class="alert alert-warning" role="alert">{{ $message }}</div>
                                  @enderror
                             </div>

                             {{-- <div class="col-md-6 col-sm-6">
                                  <label for="date">Select Date</label>
                                  <input type="date" name="date" value="" wire:model='date' class="form-control">
                             </div> --}}

                             <div class="col-md-6 col-sm-6">
                                  <label for="select">Select Department</label>
                                  <select class="form-control">
                                       <option>General Health</option>
                                       <option>Cardiology</option>
                                       <option>Dental</option>
                                       <option>Medical Research</option>
                                  </select>
                             </div>

                             <div class="col-md-6 col-sm-6">
                                   <label for="matric">Matric no</label>
                                   <input type="text" name="student_matric" value="" id="matric" wire:model='student_matric' class="form-control" placeholder="matric number">
                                   @error('student_matric')
                                        <div class="alert alert-warning" role="alert">{{ $message }}</div>
                                  @enderror
                              </div>

                         <div class="col-md-6 col-sm-6">
                              <label for="department">Student Department</label>
                              <input type="text" name="student_department" value="" id="department" class="form-control" wire:model='student_department' placeholder="Department ">
                              @error('student_department')
                                   <div class="alert alert-warning" role="alert">{{ $message }}</div>
                              @enderror
                         </div>

                             <div class="col-md-12 col-sm-12">
                                  <label for="telephone">Phone Number</label>
                                  <input type="tel" class="form-control" id="phone" name="student_phoneNumber" wire:model='student_phoneNumber' placeholder="Phone">
                                  @error('student_phoneNumber')
                                    <div class="alert alert-warning" role="alert">{{ $message }}</div>
                                  @enderror

                                  <label for="symptom">Describe symptoms</label>
                                  <textarea class="form-control" rows="5" id="symptom" name="student_symptom" wire:model='student_symptom' placeholder="Describe symptom"></textarea>
                                  @error('student_symptom')
                                    <div class="alert alert-warning" role="alert">{{ $message }}</div>
                                  @enderror

                                  <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
                             </div>
                        </div>
                  </form>
              </div>

         </div>
    </div>
</section>
