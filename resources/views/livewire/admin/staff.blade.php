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
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>John</td>
            <td>Doe</td>
            <td>Otto@gmail.com</td>
            <td>user</td>
        </tr>
    
        </tbody>
    </table>
   </div>
   @empty
       <div class="alert alert-info">No Admin user(s)</div>
   @endforelse
</div>
