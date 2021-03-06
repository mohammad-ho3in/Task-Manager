@extends('task-manager.layouts.master')
@php
$title='وظیفه ها'
@endphp
@section('content')
<div class="container mt-3">
   <div class="row">
      <div class="col-12">
         <a href="{{ route('task-manager.create') }}" class="btn btn-sm btn-success">ایجاد وظیفه جدید</a>
         @if (Session::has('success'))
         @include('task-manager.alert.toast.success')
         @endif
         <table class="table">
            <thead>
               <tr>
                  <th scope="col">#</th>
                  <th scope="col">نام</th>
                  <th scope="col">تنظیمات</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($tasks as $index=>$task)
               <tr>
                  <th scope="row">{{ ++$index }}</th>
                  <td>{{ $task->name }}</td>
                  <td class="d-flex">
                     <a href="{{ route('task-manager.edit', $task->id) }}"
                        class="btn btn-sm btn-warning ms-2">ویرایش</a>
                     <form action="{{ route('task-manager.destroy',$task->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger me-2 delete">حذف</button>
                     </form>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>
@endsection

@section('script')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
   $(document).ready(function () {
            $(".toast").toast('show');
         });
</script>

@include('task-manager.alert.sweet.delete-confirm',['className'=>'delete'])

@endsection