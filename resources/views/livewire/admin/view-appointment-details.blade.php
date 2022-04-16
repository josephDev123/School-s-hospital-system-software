
    <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
              <h1 class="view_appointment_heading">View appointment details</h1>
          </div>

          <div class="col-sm-12 col-md-12 col-lg-12">
              <table class="table table-responsive">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student name</th>
                    <th scope="col">Student email</th>
                    <th scope="col">Medical department</th>
                    <th scope="col">Student matric</th>
                    <th scope="col">Student department</th>
                    <th scope="col">Medical number</th>
                    <th scope="col">Student Symptom</th>
                  </tr>
                </thead>
          @forelse ($appointment_lists as $appointment_list)
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>{{ $appointment_list->student_name }}</td>
                    <td>{{ $appointment_list->student_email }}</td>
                    <td>{{ $appointment_list->medical_department }}</td>
                    <td>{{ $appointment_list->student_matric }}</td>
                    <td>{{ $appointment_list->student_department }}</td>
                    <td>{{ $appointment_list->student_phoneNumber }}</td>
                    <td>{{ $appointment_list->symptom }}</td>
                  </tr>
                </tbody>
                @empty
              <div class="alert alert-warning">No Appointment</div>
                @endforelse
              </table>
        
          </div>
  </div>