@extends('task-manager.layouts.master')
@php($title = 'ویرایش وظیفه')
@section('content')

<div class="container mt-3">
   <div class="row">
      <div class="col-12">
         <a href="{{ route('task-manager.index') }}" class="btn btn-sm btn-success mb-3">بازگشت</a>
         <form action="{{ route('task-manager.update',$task) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
               <label for="task" class="form-label">عنوان وظیفه</label>
               <input type="text" class="form-control" id="task" name="name" value="{{ old('name',$task->name) }}" placeholder="نام کاری که میخواهید انجام دهید">
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