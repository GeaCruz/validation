@extends('layouts.app')
        @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('User Task Form') }}</div>
                        
                        <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                        </div>
                        @endif
                        </div>

                        <form action="{{url('user_task')}}" method="POST">
            @csrf
            <div class="row mb-3 mx-3">
                <label for="task_name">Task Name:</label>
                <input type="text" id="name" name="task_name" class="form-control @error('task_name') is-invalid @enderror" value="{{ old('task_name') }}"/>
                @error('task_name')
                <div class="invalid-feedback p-0" role="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="row mb-3 mx-3">
                <label for="status">Status</label>
                <select id="status" name="status" class="form-control @error('task_name') is-invalid @enderror">
                    <option value="">--</option>
                    <option value="Pending">Pending</option>
                    <option value="Completed">Completed</option>
                    <option value="On Process">On Process</option>
                </select>
                    @error('status')
                    <div class="invalid-feedback p-0" role="alert">{{ $message }}</div>
                    @enderror
            </div>
            <div class="row mb-3 mx-3">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control @error('task_name') is-invalid @enderror" rows="5" style="width: 100%"></textarea>
            @error('description')
            <div class="invalid-feedback p-0" role="alert">{{ $message }}</div>
            @enderror
        </div>
            <div class="row mb-3 mx-3">
                <label for="deadline">Deadline</label>
                <input type="date" id="deadline" name="deadline" class="form-control @error('task_name') is-invalid @enderror" value="{{ old('deadline') }}"/>
                @error('deadline')
                <div class="invalid-feedback p-0" role="alert">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">SUBMIT</button>
        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection