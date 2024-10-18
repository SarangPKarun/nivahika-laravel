<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance Project</title>
</head>
<body>
    <h1>Maintenance Project</h1>
    <div>Add a project</div>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('project.update', ['project' => $project])}}">
        @csrf
        @method('put')
        <div>
            <label for="projectname">Project Name</label>
            <input type="text" name="projectname" placeholder="name" value="{{$project->projectname}}"/>
        </div>
        <div>
            <label for="department">Department</label>
            <input type="text" name="department" placeholder="Department" value="{{$project->department}}"/>
        </div>
        <div>
            <label for="intender">Intender</label>
            <input type="text" name="intender" placeholder="Intender" value="{{$project->intender}}"/>
        </div>
        <div>
            <label for="dateofinitiation">Date of Initiation</label>
            <input type="date" name="dateofinitiation" value="{{$project->dateofinitiation}}"/>
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>