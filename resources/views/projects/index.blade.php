<!doctype html>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">

        
    </head>

    <body>
        <h1 class = "title">Projects</h1>
        <div class = "container">
            <ul>
            @foreach ($projects as $project)
                <li>
                    <a href="/projects/{{ $project->id}}">
                        {{ $project->title }} 
                    </a>
                </li>
            @endforeach
            </ul>
        </div>
</body>
    
</html>