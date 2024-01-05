<div class="d-flex justify-content-around">
        <div class="col-4">
            
        </div>
        <div class="col-7">
            <div class="bg-light p-2 my-2">
                <h5>SIGNED UP USERS</h5>
            </div>
            <div>
                <table class="table table-striped table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th class="text-secondary">User Name</th>
                            <th class="text-secondary">User Email</th>
                            <th class="text-secondary">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->user_name }}</td>
                                <td>{{ $user->user_email }}</td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
