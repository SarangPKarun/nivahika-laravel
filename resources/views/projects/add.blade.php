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
    <form method="post" action="{{route('project.store')}}">
        @csrf
        @method('post')
        <div>
            <label for="">Project Name</label>
            <input type="text" name="projectname" placeholder="name"/>
        </div>
        <div>
            <label for="">Department</label>
            <input type="text" name="department" placeholder="Department"/>
        </div>
        <div>
            <label for="">Intender</label>
            <input type="text" name="intender" placeholder="Intender"/>
        </div>
        <div>
            <label for="">Date of Initiation</label>
            <input type="date" name="dateofinitiation"/>
        </div>
        <div>
            <input type="submit" value="Add Entry" />
        </div>
    </form>
</body>
</html>