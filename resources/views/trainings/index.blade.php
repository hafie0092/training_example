@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Training Index') }}</div>

                <div class="card-body">
                   <table class="table">
                       <thead>
                           <th> ID</th>
                           <th> Title</th>
                           <th> Description </th>
                       </thead>
                       <tbody>
                           @foreach ($trainings as $training)
                                <tr>
                                    <td>{{ $training->id }}</td>
                                    <td> {{ $training->title }}</td>
                                    <td> {{ $training->description }} </td>
                                </tr>
                            @endforeach
                       </tbody>

                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection