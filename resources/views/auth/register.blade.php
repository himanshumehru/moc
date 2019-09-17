@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-8">
            <div class="card">
                <div class="card-header"><h1>Create A New Account</h1><p>It's quick and easy.</p></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}"  required autocomplete="firstname" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname">

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">Year of birth</label>

                            <div class="col-md-6">
                                <select id="age" type="text" class="form-control @error('age') is-invalid @enderror" style="width: auto;" name="age" value="{{ old('age') }}" required autocomplete="age">
                                    <option value=""></option>
                                  <option value="1995" {{old('age')=='1995'? 'selected' : ''}}>1995</option>

  <option value="1994" {{old('age')=='1994'? 'selected' : ''}}>1994</option>

  <option value="1993" {{old('age')=='1993'? 'selected' : ''}}>1993</option>

  <option value="1992" {{old('age')=='1992'? 'selected' : ''}}>1992</option>

  <option value="1991" {{old('age')=='1991'? 'selected' : ''}}>1991</option>

  <option value="1990" {{old('age')=='1990'? 'selected' : ''}}>1990</option>

  <option value="1989" {{old('age')=='1989'? 'selected' : ''}}>1989</option>

  <option value="1988" {{old('age')=='1988'? 'selected' : ''}}>1988</option>

  <option value="1987" {{old('age')=='1987'? 'selected' : ''}}>1987</option>

  <option value="1986" {{old('age')=='1986'? 'selected' : ''}}>1986</option>

  <option value="1985" {{old('age')=='1985'? 'selected' : ''}}>1985</option>

  <option value="1984" {{old('age')=='1984'? 'selected' : ''}}>1984</option>

  <option value="1983" {{old('age')=='1983'? 'selected' : ''}}>1983</option>

  <option value="1982" {{old('age')=='1982'? 'selected' : ''}}>1982</option>

  <option value="1981" {{old('age')=='1981'? 'selected' : ''}}>1981</option>

  <option value="1980" {{old('age')=='1980'? 'selected' : ''}}>1980</option>

  <option value="1979" {{old('age')=='1979'? 'selected' : ''}}>1979</option>

  <option value="1978" {{old('age')=='1978'? 'selected' : ''}}>1978</option>

  <option value="1977" {{old('age')=='1977'? 'selected' : ''}}>1977</option>

  <option value="1976" {{old('age')=='1976'? 'selected' : ''}}>1976</option>

  <option value="1975" {{old('age')=='1975'? 'selected' : ''}}>1975</option>

  <option value="1974" {{old('age')=='1974'? 'selected' : ''}}>1974</option>

  <option value="1973" {{old('age')=='1973'? 'selected' : ''}}>1973</option>

  <option value="1972" {{old('age')=='1972'? 'selected' : ''}}>1972</option>

  <option value="1971" {{old('age')=='1971'? 'selected' : ''}}>1971</option>

  <option value="1970" {{old('age')=='1970'? 'selected' : ''}}>1970</option>

  <option value="1969" {{old('age')=='1969'? 'selected' : ''}}>1969</option>

  <option value="1968" {{old('age')=='1968'? 'selected' : ''}}>1968</option>

  <option value="1967" {{old('age')=='1967'? 'selected' : ''}}>1967</option>

  <option value="1966" {{old('age')=='1966'? 'selected' : ''}}>1966</option>

  <option value="1965" {{old('age')=='1965'? 'selected' : ''}}>1965</option>

  <option value="1964" {{old('age')=='1964'? 'selected' : ''}}>1964</option>

  <option value="1963" {{old('age')=='1963'? 'selected' : ''}}>1963</option>

  <option value="1962" {{old('age')=='1962'? 'selected' : ''}}>1962</option>

  <option value="1961" {{old('age')=='1961'? 'selected' : ''}}>1961</option>

  <option value="1960" {{old('age')=='1960'? 'selected' : ''}}>1960</option>

  <option value="1959" {{old('age')=='1959'? 'selected' : ''}}>1959</option>

  <option value="1958" {{old('age')=='1958'? 'selected' : ''}}>1958</option>

  <option value="1957" {{old('age')=='1957'? 'selected' : ''}}>1957</option>

  <option value="1956" {{old('age')=='1956'? 'selected' : ''}}>1956</option>

  <option value="1955" {{old('age')=='1955'? 'selected' : ''}}>1955</option>

  <option value="1954" {{old('age')=='1954'? 'selected' : ''}}>1954</option>

  <option value="1953" {{old('age')=='1953'? 'selected' : ''}}>1953</option>

  <option value="1952" {{old('age')=='1952'? 'selected' : ''}}>1952</option>

  <option value="1951" {{old('age')=='1951'? 'selected' : ''}}>1951</option>

  <option value="1950" {{old('age')=='1950'? 'selected' : ''}}>1950</option>

  <option value="1949" {{old('age')=='1949'? 'selected' : ''}}>1949</option>

  <option value="1948" {{old('age')=='1948'? 'selected' : ''}}>1948</option>

  <option value="1947" {{old('age')=='1947'? 'selected' : ''}}>1947</option>

  <option value="1946" {{old('age')=='1946'? 'selected' : ''}}>1946</option>

  <option value="1945" {{old('age')=='1945'? 'selected' : ''}}>1945</option>

  <option value="1944" {{old('age')=='1944'? 'selected' : ''}}>1944</option>

  <option value="1943" {{old('age')=='1943'? 'selected' : ''}}>1943</option>

  <option value="1942" {{old('age')=='1942'? 'selected' : ''}}>1942</option>

  <option value="1941" {{old('age')=='1941'? 'selected' : ''}}>1941</option>

  <option value="1940" {{old('age')=='1940'? 'selected' : ''}}>1940</option>




                                </select>
                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>
 <div class="form-group row justify-content-center">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>

                            <div class="form-check form-check-inline">
  <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="male" value="male" {{ old('gender')=='male'? 'checked' : '' }} required>
  <label class="form-check-label" for="male">Male </label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="female" value="female" {{ old('gender')=='female'? 'checked' : '' }}>
  <label class="form-check-label" for="female">Female </label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="other" value="other" {{ old('gender')=='other'? 'checked' : '' }}>
  <label class="form-check-label" for="other">Other </label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="notsay" value="notsay" {{ old('gender')=='notsay'? 'checked' : '' }}>
  <label class="form-check-label" for="notsay">I'd rather not say </label>
</div>
          @error('gender')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                        
</div>


 <div class="form-group row">

                            <label for="abfmnumber" class="col-md-4 col-form-label text-md-right">ABFM Number</label>

                            <div class="col-md-6">
                                <input id="abfmnumber" type="text" class="form-control @error('abfmnumber') is-invalid @enderror" name="abfmnumber" value="{{ old('abfmnumber') }}" required  onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" autocomplete=off>

                                @error('abfmnumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ str_replace('abfmnumber', 'ABFM Number', $message) }}</strong>
                                    </span>
                                @enderror
                            </div>
                                
                        </div>

 <div class="form-group row">
                            <label for="abfmnumber_confirmation" class="col-md-4 col-form-label text-md-right">Confirm ABFM Number</label>

                            <div class="col-md-6">
                                <input id="abfmnumber_confirmation" type="text" class="form-control @error('abfmnumber') is-invalid @enderror" name="abfmnumber_confirmation" value="{{ old('abfmnumber_confirmation') }}"   required onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" autocomplete=off>
                            </div>

                        </div>




                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
