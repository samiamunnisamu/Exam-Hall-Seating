@extends('layouts.app')

@section('content')
@php
    $departments = App\Department::get();
@endphp
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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

                        <div class="form-group row">
                        
                            <label for="option" class="col-md-4 col-form-label text-md-right">Rules </label>
                            <div class=" col-md-6">
                            <select name="select-option" class="form-control" id="option">
                 <option value="1" >Student</option>
                 <option value="2">Teacher</option>
                 
                            </select>                
            </select>
                        </div>
                        </div>

                        <div class="form-group row">
                        
                            <label for="department" class="col-md-4 col-form-label text-md-right">Select Department</label>
                            <div class="col-md-6">
                                <select name="dept-name" class="form-control" id="department">
                                    @foreach ($departments as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>

                                @endforeach
                </select>   </div>
                        </div>

                        <div class="form-group row">
                        
                            <label for="gender" class="col-md-4 col-form-label text-md-right">Select Gender</label>
                            <div class="col-md-6">
                            <select name="user-gender" class="form-control" id="gender">
                 <option value="1">Male</option>
                 <option value="2">Female</option>
                            </select>                
            </select>
                        </div>

                        </div>

                        <div class="form-group row">
                            
                                <label for="user-phone" class="col-md-4 col-form-label text-md-right">Phone</label>
                                <div class=" col-md-6">
                                <input type="number" name="user-phone" class="form-control" id="user-phone" />
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="user-image" class="col-md-4 col-form-label text-md-right">Image</label>
                                <div class="col-md-6">
                                <input type="file" name="user-image" class="form-control" id="user-image" />
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
