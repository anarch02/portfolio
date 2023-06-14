@extends('layouts.admin')

@section('content')
<div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Subject</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($messages as $message)
          <tr >
            <td>
              {{$message->subject}}
            </td>
            <td>
              {{$message->name}}
            </td>
            <td>
              {{$message->email}}
            </td>
            <td>
                <a href="#" class="bi bi-eye"></a>
                @if (!$message->read)
                    <i class="bi bi-circle text-warning"></i>
                @endif
            </td>
          </tr>
          @endforeach
       
        
      </tbody>
    </table>
  </div>
@endsection