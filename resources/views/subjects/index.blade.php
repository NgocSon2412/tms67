<?php $i = 0; ?>
@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row">
        <h2 class="sub-header">All Subject</h2>
        <div class="table-responsive">
            @if (count($subjects) > 0)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Number</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Progress</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subjects as $subject)    
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $subject->name }}</td>
                                <td>{{ $subject->description }}</td>
                                <td>{{ $subject->progress }} %</td>
                                <td>
                                    <a class="btn btn-primary" href="">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ url('subject/'.$subject->id) }}" method="POST" class="form-inline">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" id="delete-subject-{{ $subject->id }}" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i>Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php $i ++; ?>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
    <div class="row">
        <a href="{{ url('admin/subject/create') }}" class="btn btn-default">Add Subject</a>
    </div>
</div>
@endsection
