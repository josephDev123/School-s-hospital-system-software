
    <div class="row appointment_details">
          <div class=''>
              <h4 class="view_appointment_heading"> Appointment details</h4>
          </div>

          <div class="table-responsive">
              <table class="table table-striped table-hover table-sm">
                    <thead class="table-dark">
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
              
                    <tbody>
                    @forelse ($appointment_lists as $appointment_list)
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
                    @empty
                      <div class="alert alert-warning">No Appointment</div>
                    @endforelse
                    </tbody>
              </table>  
          </div>    
  </div>