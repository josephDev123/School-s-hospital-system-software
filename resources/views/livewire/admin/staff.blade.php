<div class="row">
   @forelse ($permitted_users as $permitted_user)
   <div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
            <th scope="col">User type</th>
            <th scope="col">User-permission</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>John</td>
            <td>Doe</td>
            <td>Otto@gmail.com</td>
            <td>user</td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown button
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">user</a></li>
                      <li><a class="dropdown-item" href="#">admin</a></li>
                      <li><a class="dropdown-item" href="#">chief-admin</a></li>
                    </ul>
                  </div>
            </td>
        </tr>
    
        </tbody>
    </table>
   </div>
   @empty
       <div class="alert alert-info">No Admin user(s)</div>
   @endforelse
</div>
