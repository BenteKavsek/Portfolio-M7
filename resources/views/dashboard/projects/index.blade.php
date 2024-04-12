<x-master-layout>

<h2>Ingelogde dashboard,  wouwie wat mooi</h2>

@foreach($project as $project)
    <a href="{{route('projectadmin.show', $item)}}">{{ $project->title }}</a><br>
@endforeach
{{$project->links()}};

</x-master-layout>
