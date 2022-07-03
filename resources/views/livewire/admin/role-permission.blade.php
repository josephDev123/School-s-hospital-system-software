<div class="row mt-4">
    @forelse ($users as $user)
   
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">User type</th>
                <th scope="col">action</th>
            </tr>
            </thead>
            <tbody>
              
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->user_permission }}</td>
                <td><button class="btn btn-secondary" wire:click='editUserPermission'>user previledge</button></td>
            </tr>
        
            </tbody>
        </table>
       </div>      
    @empty
        <div class="alert alert-danger" role="alert"> No Users  </div>
    @endforelse
 </div>
 
