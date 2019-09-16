        <div class="col-md-4 ">
            <div class="card">
                <div class="card-header">Your Profile 
                </div>
                <div class="card-body">
                    <ul>
                        <li><strong>First Name:</strong> {{$user->firstname}}</li>
                        <li><strong>Last Name:</strong> {{$user->lastname}}</li>
                        <li><strong>ABFM Number:</strong> {{$user->abfmnumber}}</li>
                        <li><strong>Email:</strong> {{$user->email}}</li>
                        <li><strong>Birth Year:</strong> {{$user->age}}</li>
                        <li><strong>Gender:</strong> {{$user->gender == 'notsay'?"I'd rather not say":ucfirst($user->gender)}}</li>
                        <a href="{{route('user.edit', $user->id)}}">Edit</a>
                    </ul>
                </div>
            </div>
        </div>