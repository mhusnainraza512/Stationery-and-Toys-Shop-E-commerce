@extends('layouts.manager-master')

@section('title', 'Create New Employee')

@section('content')
    <section>
        <div class="container">
            <form action="{{ route('employees.store') }}" method="post" enctype="multipart/form-data">
                <h4 class="text-center my-4">Add New Employee</h4>
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input id="title" class="form-control" type="text" name="name" placeholder="Enter Name...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" class="form-control" type="text" name="email" placeholder="Enter Email...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input id="phone" class="form-control" type="text" name="phone" placeholder="Enter Phone...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cnic">Cnic</label>
                            <input id="cnic" class="form-control" type="text" name="cnic" placeholder="Enter Cnic...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="salary">Salary</label>
                            <input id="salary" class="form-control" type="text" name="salary" placeholder="Enter Salary...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input id="address" class="form-control" type="text" name="address" placeholder="Enter Address...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input id="age" class="form-control" type="text" name="age" placeholder="Enter Age...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="age">Role</label>
                        <select name="role" id="" class="form-control mb-2">
                            <option value="0">Select Roles</option>
                            @if(!$roles->isEmpty())
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" class="form-control" type="password" name="password" placeholder="Enter Password...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input id="image" class="form-control form-file-control" type="file" name="image" placeholder="Choose File...">
                        </div>
                    </div>
                    <div class="col-md-4 offset-5">
                        <button type="submit" class="btn px-5 mt-3 my-btn">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
