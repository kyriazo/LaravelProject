<!doctype html>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">

    </head>

    <body>
        <h1>Create a new Project</h1>
        <form method="POST" action="/projects">

            {{ csrf_field() }}

            <div>
                <input type="text" name="title" placeholder="Project Title">
            </div>

            <div>
                <textarea name="description" placeholder="Project description"></textarea>
            </div>

            <div>
                <button type="submit">Create Project</button>
            </div>

            @if ($errors->any())    
                <div class= "notification is-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </body>
    
</html>