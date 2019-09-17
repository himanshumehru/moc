        <div class="col-md-4 ">
            <div class="card">
                <div class="card-header">Your Profile 
                    <div class="settings-icon" style="float: right;"><a href="{{route('user.edit', $user->id)}}"><i class="fa fa-cogs" aria-hidden="true"></i></a></div>
                </div>
                <div class="card-body">
                    <ul>
                        <li><strong>First Name:</strong> {{$user->firstname}}</li>
                        <li><strong>Last Name:</strong> {{$user->lastname}}</li>
                        <li><strong>ABFM Number:</strong> {{$user->abfmnumber}}</li>
                        <li><strong>Email:</strong> {{$user->email}}</li>
                        <li><strong>Birth Year:</strong> {{$user->age}}</li>
                        <li><strong>Gender:</strong> {{$user->gender == 'notsay'?"I'd rather not say":ucfirst($user->gender)}}</li>
                        
                    </ul>
                </div>
            </div>
        </div>