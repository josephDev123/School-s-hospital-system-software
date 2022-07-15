<div class="container">
    <section class="tag mb-4">
        /Student register page
    </section>
    <section class="register_student_parent">

        <section class="register_graphic_wrapper">
            <img src="/admin/template/assets/images/student-register/clip-student.png" alt="student image clip">

        </section>
        <section class="register_form_wrapper">
            @if (session()->get('success') )
                <div class="alert alert-danger"> {{ session()->get("success") }}</div>
        
            @endif
              
            <form wire:submit.prevent='submitStudentRecord' method="POST">
                <div class="mb-3">
                    <label for="firstname" class="form-label">Firstname</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="firstnameHelp" wire:model.defer='firstname'>
                </div>

                <div class="mb-3">
                    <label for="lastname" class="form-label">Lastname</label>
                    <input type="text" class="form-control" id="lastname" name="lastname"  aria-describedby="lastnameHelp" wire:model.defer='lastname'>
                </div>
                <div class="mb-3">
                    <div id="error" class="form-text">@error('email') {{ $message }} @enderror</div>
                    <label for="InputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="InputEmail1" name="email"  aria-describedby="emailHelp" wire:model.defer='email'>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="department" class="form-label">Department</label>
                    <input type="text" class="form-control" id="department" name="department" aria-describedby="departmentHelp" wire:model.defer='department'>
                </div>

                <div class="mb-3">
                    <label for="college" class="form-label">College</label>
                    <input type="text" class="form-control" id="college" name="college" aria-describedby="collegeHelp" wire:model.defer='college'>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">student image</label>
                    <input type="file" class="form-control" id="image" name="image" aria-describedby="imageHelp" wire:model.defer='student_image'>
                </div>
                <div class="mb-3">
                    <label for="level" class="form-label">Level</label>
                    <input type="text" class="form-control" id="level" name="level" aria-describedby="levelHelp" wire:model.defer='student_level'>
                </div>
                <div class="mb-3">
                    <div id="error" class="form-text">@error('matric') {{ $message }} @enderror</div>
                    <label for="matric" class="form-label">Matric no</label>
                    <input type="text" class="form-control" id="matric" name="matric" aria-describedby="matricHelp" wire:model.defer='matric_no'>
                </div>
                <button type="submit" class="btn btn-primary" >Submit</button>
            </form>
        </section>
    </section>
</div>
