<div class="row">
    <div class="col-md-6 col-sm-12 mt-4 createAppointment">
        <img class="create_appoint_img" src="/admin/template/assets/images/createAppointment_img/undraw_medical_care_movn.png" class="img-responsive" alt="">
    </div>
    

    <div class="col-md-6 col-sm-12 mt-4">
        @if (session()->has('success'))
            <div class="alert alert-primary" role="alert">
                {{ session()->get('success') }}
            </div>
            
        @endif
        <h1 class="createAppointmentHeading"><i class="fas fa-calendar-check mb-4 me-4"></i>Make Appointment</h1>
        
        <form wire:submit.prevent="appointSubmit">
    
            <div class="mb-4">
                <label for="Fullname" class="form-label">Fullname</label>
                <input type="text" class="form-control" name="name" id="Fullname" aria-describedby="FullnameHelp" wire:model.debounce='fullname'>
                @error('fullname') <div id="emailHelp" class="form-text text-danger">{{ $message }}</div> @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" wire:model='email'>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                @error('email') <div id="emailHelp" class="form-text text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-4">
                <label for="doctor_deparment" class="form-label">Select Medical Department</label>
                <select class="form-control" wire:model='medical_department'>
                    <option value="General Health" selected>General Health</option>
                    <option value="Cardiology">Cardiology</option>
                    <option value="Dental">Dental</option>
                    <option value="Medical Research">Medical Research</option>
               </select>
               @error('medical_department') <div id="emailHelp" class="form-text text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-4">
                <label for="matric_no" class="form-label">Matric no</label>
                <input type="text" class="form-control" name="matric_no"  id="matric_no" aria-describedby="matric_noHelp" wire:model='matric_no'>
                @error('matric_no') <div id="emailHelp" class="form-text text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-4">
                <label for="student_department" class="form-label">Student Department</label>
                <input type="text" class="form-control" id="student_department" name="student_department" aria-describedby="student_departmenteHelp" wire:model='student_department'>
                @error('student_department') <div id="emailHelp" class="form-text text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-4">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone_number" name="phone_number" aria-describedby="phone_numberHelp" wire:model='phone_number'>
                @error('phone_number') <div id="emailHelp" class="form-text text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-4">
                <label for="symptom" class="form-label">Describe symptoms</label>
                <textarea class="form-control" id="message" name="message" aria-describedby="symptomHelp" rows="3" wire:model='symptom'></textarea>
                @error('symptom') <div id="emailHelp" class="form-text text-danger">{{ $message }}</div> @enderror
            </div>
            <button type="submit" class="btn btn-primary">Appointment</button>
        </form>
    </div>

</div>
