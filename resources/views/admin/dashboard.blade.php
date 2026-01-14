@extends('layouts.app')

@section('content')
<h1>Admin Dashboard</h1>
<p>Total Projects: {{ count($projects) }}</p>

<table>
    <tr>
        <th>Project</th>
        <th>Client</th>
        <th>Deadline</th>
        <th>Status</th>
    </tr>
    @foreach($projects as $project)
    <tr>
        <td>{{ $project->name }}</td>
        <td>{{ $project->client }}</td>
        <td>{{ $project->deadline }}</td>
        <td>{{ $project->status }}</td>
        <td><a href="{{ route('admin.project.detail', $project->id) }}">View</a></td>
    </tr>
    @endforeach
</table>
@endsection
