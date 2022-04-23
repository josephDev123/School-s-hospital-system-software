<div class="row">
    
    <div class='col'>
      <img class="doctors_banner" src="/admin/template/assets/images/add_doctor_and-view_doctor/undraw_medicine.png" alt="">
    </div>

    <div class='col'>
      <h3 class="mb-4">Doctor's informations gathering</h3>
      @if (session()->has('success'))
          <div class="alert alert-success mb-2">{{ session()->get('success') }}</div>
      @endif
        <form wire:submit.prevent = 'handleAddDoctor'>
            <div class="mb-3">
              <label for="doctor_name" class="form-label">Doctor's names</label>
              <input type="text" class="form-control" id="doctor_name" aria-describedby="doctor_nameHelp" wire:model='doctor_name'>
              @error('doctor_name') <div class="alert alert-primary">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
              <label for="Doctor_specialty" class="form-label">Doctor's specialty</label>
              <input type="text" class="form-control" id="Doctor_specialty" wire:model='Doctor_specialty'>
              @error('doctor_name') <div class="alert alert-primary">{{ $message }}</div> @enderror
            </div>
          
            <div class="mb-3">
              <label for="Doctor_email" class="form-label">Doctor's email</label>
              <input type="email" class="form-control" id="Doctor_email" wire:model='Doctor_email'>
              @error('doctor_name') <div class="alert alert-primary">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
              <label for="Doctor_telephone" class="form-label">Doctor's telephone</label>
              <input type="telophone" class="form-control" id="Doctor_telephone" wire:model='Doctor_telephone'>
              @error('doctor_name') <div class="alert alert-primary">{{ $message }}</div> @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
