@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add User') }}</div>

                    <div class="card-body">
                        <form action="{{ route('users.update',$user->id) }}" method="post">

                            @csrf

                            @method('put')

                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}"/>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <input type="text" name="email" class="form-control" value="{{ $user->email }}"/>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input type="password" name="password" class="form-control" />
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div> --}}

                            <div class="form-group">
                                <label for="roles">roles</label>
                                <select class="form-control" multiple name="roles[]">
                                    @foreach ($roles as $role)
                                        <option 
                                        value="{{ $role->id }}"
                                        @if (in_array($role->id,$user->roles->pluck('id')->toarray()))
                                           selected 
                                        @endif>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                @error('roles')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
