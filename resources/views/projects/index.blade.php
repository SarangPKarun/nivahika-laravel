<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance Report</title>
</head>
<body>
    <h1>Maintenance Report</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <a href="{{route('project.add')}}">Add Project</a>
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Project Name</th>
                <th>Department</th>
                <th>Intender</th>
                <th>Date of Initiation</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($projects as $project)
                <tr>
                    <td>{{$project->id}}</td>
                    <td>{{$project->projectname}}</td>
                    <td>{{$project->department}}</td>
                    <td>{{$project->intender}}</td>
                    <td>{{$project->dateofinitiation      
                    }}</td>
                    <td><a href="{{route('project.edit', ['project' => $project])}}">Edit</a></td>
                    <td><form method="post" action="{{route('project.destroy', ['project' => $project])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form></td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>