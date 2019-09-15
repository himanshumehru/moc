        <div class="col-md-4 ">
            <div class="card">
                <div class="card-header">Your Profile 
                </div>
                <div class="card-body">
                    <ul>
                        <li>First Name: {{Auth::user()->firstname}}</li>
                        <li>Last Name: {{Auth::user()->lastname}}</li>
                        <li>ABFM Number: {{Auth::user()->abfmnumber}}</li>
                        <li>Email: {{Auth::user()->email}}</li>
                        <li>Birth Year: {{Auth::user()->age}}</li>
                        <li>Gender: {{Auth::user()->gender}}</li>
                        <a href="{{url('/edit-profile')}}">Edit</a>
                    </ul>
                </div>
            </div>
        </div>