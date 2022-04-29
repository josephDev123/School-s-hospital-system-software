<div class="view_doctor_container">
    @forelse ($all_doctors as $all_doctor)
        <div class="row table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Doctor's name</th>
                    <th scope="col">Doctor's specialty</th>
                    <th scope="col">Doctor's email</th>
                    <th scope="col">Doctor's telephone</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>{{ $all_doctor->doctor_name}}</td>
                    <td>{{ $all_doctor->Doctor_specialty}}</td>
                    <td>{{ $all_doctor->Doctor_email}}</td>
                    <td>{{ $all_doctor->Doctor_telephone}}</td>
                  </tr>
                </tbody>
              </table>
        </div>
    @empty
        <div class="row">
            <div class="alert alert-warning"> No Doctor's detail yet</div>
        </div>
    @endforelse
</div >
