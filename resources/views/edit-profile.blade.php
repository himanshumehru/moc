@extends('layouts.app')
@section('title')
Edit Your Profile
@endsection

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-sm-12 col-md-8">
			<div class="card">
				<div class="card-header">Edit your profile</div>
				<div class="card-body">
					   <form method="POST" action="">
              @csrf
      <div class="form-group row">
        <label for="edit_first_name" class="col-4 col-form-label">First Name</label> 
        <div class="col-8">
          <input id="edit_first_name" name="edit_first_name" type="text" class="form-control" value="{{Auth::user()->firstname}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="edit_last_name" class="col-4 col-form-label">Last Name</label> 
        <div class="col-8">
          <input id="edit_last_name" name="edit_last_name" type="text" class="form-control" value="{{Auth::user()->lastname}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="edit_abfm_number" class="col-4 col-form-label">ABFM Number<span class="text-primary">*</span></label> 
        <div class="col-8">
          <input id="edit_abfm_number" name="edit_abfm_number" type="text" class="form-control"readonly value="{{Auth::user()->abfmnumber}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="edit_email" class="col-4 col-form-label">Email</label> 
        <div class="col-8">
          <input id="edit_email" name="edit_email" type="text" class="form-control" value="{{Auth::user()->email}}">
        </div>
      </div>
      <!-- <div class="form-group row">
        <label for="edit_password" class="col-4 col-form-label">Password</label> 
        <div class="col-8">
          <input id="edit_password" name="edit_password" type="password" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="edit_password_confirmation" class="col-4 col-form-label">Confirm Password</label> 
        <div class="col-8">
          <input id="edit_password_confirmation" name="edit_password_confirmation" type="password" class="form-control">
        </div>
      </div> -->
      <div class="form-group row">
        <label for="edit_birth_year" class="col-4 col-form-label">Birth Year</label> 
        <div class="col-8">
          <select id="edit_birth_year" name="edit_birth_year" class="custom-select">
            <option value=""></option>
                                  <option value="1995" {{Auth::user()->age=='1995'? 'selected' : ''}}>1995</option>

  <option value="1994" {{Auth::user()->age=='1994'? 'selected' : ''}}>1994</option>

  <option value="1993" {{Auth::user()->age=='1993'? 'selected' : ''}}>1993</option>

  <option value="1992" {{Auth::user()->age=='1992'? 'selected' : ''}}>1992</option>

  <option value="1991" {{Auth::user()->age=='1991'? 'selected' : ''}}>1991</option>

  <option value="1990" {{Auth::user()->age=='1990'? 'selected' : ''}}>1990</option>

  <option value="1989" {{Auth::user()->age=='1989'? 'selected' : ''}}>1989</option>

  <option value="1988" {{Auth::user()->age=='1988'? 'selected' : ''}}>1988</option>

  <option value="1987" {{Auth::user()->age=='1987'? 'selected' : ''}}>1987</option>

  <option value="1986" {{Auth::user()->age=='1986'? 'selected' : ''}}>1986</option>

  <option value="1985" {{Auth::user()->age=='1985'? 'selected' : ''}}>1985</option>

  <option value="1984" {{Auth::user()->age=='1984'? 'selected' : ''}}>1984</option>

  <option value="1983" {{Auth::user()->age=='1983'? 'selected' : ''}}>1983</option>

  <option value="1982" {{Auth::user()->age=='1982'? 'selected' : ''}}>1982</option>

  <option value="1981" {{Auth::user()->age=='1981'? 'selected' : ''}}>1981</option>

  <option value="1980" {{Auth::user()->age=='1980'? 'selected' : ''}}>1980</option>

  <option value="1979" {{Auth::user()->age=='1979'? 'selected' : ''}}>1979</option>

  <option value="1978" {{Auth::user()->age=='1978'? 'selected' : ''}}>1978</option>

  <option value="1977" {{Auth::user()->age=='1977'? 'selected' : ''}}>1977</option>

  <option value="1976" {{Auth::user()->age=='1976'? 'selected' : ''}}>1976</option>

  <option value="1975" {{Auth::user()->age=='1975'? 'selected' : ''}}>1975</option>

  <option value="1974" {{Auth::user()->age=='1974'? 'selected' : ''}}>1974</option>

  <option value="1973" {{Auth::user()->age=='1973'? 'selected' : ''}}>1973</option>

  <option value="1972" {{Auth::user()->age=='1972'? 'selected' : ''}}>1972</option>

  <option value="1971" {{Auth::user()->age=='1971'? 'selected' : ''}}>1971</option>

  <option value="1970" {{Auth::user()->age=='1970'? 'selected' : ''}}>1970</option>

  <option value="1969" {{Auth::user()->age=='1969'? 'selected' : ''}}>1969</option>

  <option value="1968" {{Auth::user()->age=='1968'? 'selected' : ''}}>1968</option>

  <option value="1967" {{Auth::user()->age=='1967'? 'selected' : ''}}>1967</option>

  <option value="1966" {{Auth::user()->age=='1966'? 'selected' : ''}}>1966</option>

  <option value="1965" {{Auth::user()->age=='1965'? 'selected' : ''}}>1965</option>

  <option value="1964" {{Auth::user()->age=='1964'? 'selected' : ''}}>1964</option>

  <option value="1963" {{Auth::user()->age=='1963'? 'selected' : ''}}>1963</option>

  <option value="1962" {{Auth::user()->age=='1962'? 'selected' : ''}}>1962</option>

  <option value="1961" {{Auth::user()->age=='1961'? 'selected' : ''}}>1961</option>

  <option value="1960" {{Auth::user()->age=='1960'? 'selected' : ''}}>1960</option>

  <option value="1959" {{Auth::user()->age=='1959'? 'selected' : ''}}>1959</option>

  <option value="1958" {{Auth::user()->age=='1958'? 'selected' : ''}}>1958</option>

  <option value="1957" {{Auth::user()->age=='1957'? 'selected' : ''}}>1957</option>

  <option value="1956" {{Auth::user()->age=='1956'? 'selected' : ''}}>1956</option>

  <option value="1955" {{Auth::user()->age=='1955'? 'selected' : ''}}>1955</option>

  <option value="1954" {{Auth::user()->age=='1954'? 'selected' : ''}}>1954</option>

  <option value="1953" {{Auth::user()->age=='1953'? 'selected' : ''}}>1953</option>

  <option value="1952" {{Auth::user()->age=='1952'? 'selected' : ''}}>1952</option>

  <option value="1951" {{Auth::user()->age=='1951'? 'selected' : ''}}>1951</option>

  <option value="1950" {{Auth::user()->age=='1950'? 'selected' : ''}}>1950</option>

  <option value="1949" {{Auth::user()->age=='1949'? 'selected' : ''}}>1949</option>

  <option value="1948" {{Auth::user()->age=='1948'? 'selected' : ''}}>1948</option>

  <option value="1947" {{Auth::user()->age=='1947'? 'selected' : ''}}>1947</option>

  <option value="1946" {{Auth::user()->age=='1946'? 'selected' : ''}}>1946</option>

  <option value="1945" {{Auth::user()->age=='1945'? 'selected' : ''}}>1945</option>

  <option value="1944" {{Auth::user()->age=='1944'? 'selected' : ''}}>1944</option>

  <option value="1943" {{Auth::user()->age=='1943'? 'selected' : ''}}>1943</option>

  <option value="1942" {{Auth::user()->age=='1942'? 'selected' : ''}}>1942</option>

  <option value="1941" {{Auth::user()->age=='1941'? 'selected' : ''}}>1941</option>

  <option value="1940" {{Auth::user()->age=='1940'? 'selected' : ''}}>1940</option>



          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="edit_gender" class="col-4 col-form-label">Gender</label> 
        <div class="col-8">
          <select id="edit_gender" name="edit_gender" class="custom-select">
            <option value="male" {{ Auth::user()->gender == 'male'? 'selected': '' }} >Male</option>
            <option value="female"{{ Auth::user()->gender == 'female'? 'selected': '' }}>Female</option>
            <option value="other"{{ Auth::user()->gender == 'other'? 'selected': '' }}>Other</option>
            <option value="notsay"{{ Auth::user()->gender == 'notsay'? 'selected': '' }}>Rather not say</option>
          </select>
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Update Profile</button>
        </div>
      </div>
    </form>
    <div class="col-sm-12 col-md-8">
      <p><span class="text-primary">*</span>Please <a href="mailto:himanshu@mehrutherm.com">contact admin</a> if you need to change this value.</p>
    </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection