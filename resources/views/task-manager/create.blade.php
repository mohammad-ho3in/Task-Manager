@extends('task-manager.layouts.master')
@php($title = 'ایجاد وظیفه جدید')
@section('content')
<div class="container mt-3">
   <div class="row">
      <div class="col-12">
         <form action="{{ route('task-manager.store') }}" method="POST">
            @csrf
            <div class="mb-3">
               <label for="task" class="form-label">عنوان وظیفه</label>
               <input type="text" class="form-control" id="task" name="name" value="{{ old('name') }}" placeholder="نام کاری که میخواهید انجام دهید">
               @error('name')
                  <span class="bg-danger form-control form-control-sm mt-1 text-white text-center">{{ $message }}</span>
               @enderror
             </div>
             <button type="submit" class="btn btn-primary float-start">ثبت</button>
         </form>
      </div>
   </div>
</div>
@endsection