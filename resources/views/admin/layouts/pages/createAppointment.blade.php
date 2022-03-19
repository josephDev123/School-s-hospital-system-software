
  @extends('admin.master')
    @section('section')
    <div class="content-wrapper pb-0">
        <h4 class="text-center"><i class="fas fa-calendar-check me-2"></i>Make Appointment</h4>
        <div class="d-flex justify-content-center align-item-center">
            
            <form class='w-75'>
                
                <div class="mb-4">
                    <label for="Fullname" class="form-label">Fullname</label>
                    <input type="text" class="form-control" name="name" id="Fullname" aria-describedby="FullnameHelp">
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-4">
                    <label for="date" class="form-label">Select Date</label>
                    <input type="date" class="form-control" id="date" name="date" aria-describedby="dateHelp">
                </div>

                <div class="mb-4">
                    <label for="doctor_deparment" class="form-label">Select Doctor Department</label>
                    <select class="form-control">
                        <option>General Health</option>
                        <option>Cardiology</option>
                        <option>Dental</option>
                        <option>Medical Research</option>
                   </select>
                </div>

                <div class="mb-4">
                    <label for="matric_no" class="form-label">Matric no</label>
                    <input type="text" class="form-control" name="matric_no"  id="matric_no" aria-describedby="matric_noHelp">
                </div>

                <div class="mb-4">
                    <label for="student_department" class="form-label">Student Department</label>
                    <input type="text" class="form-control" id="student_department" name="student_department" aria-describedby="student_departmenteHelp">
                </div>

                <div class="mb-4">
                    <label for="phone_number" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone_number" name="phone_number" aria-describedby="phone_numberHelp">
                </div>

                <div class="mb-4">
                    <label for="message" class="form-label">Describe symptoms</label>
                    <textarea class="form-control" id="message" name="message" aria-describedby="symptomHelp"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Appointment</button>
            </form>
        </div>
        
    </div>
        
    @endsection