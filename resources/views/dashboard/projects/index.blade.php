<x-master-layout>

<h2>Ingelogde dashboard,  wouwie wat mooi</h2>

<a href="{{route('project.create')}}" class="bg-green hover:bg-green text-white font-bold py-2 px-4 rounded float-right">
    {{ __('New project') }}
</a>

@foreach($projects as $project)
    <a href="{{route('project.show', $project)}}">{{ $project->title }}</a><br>
@endforeach
{{$projects->links()}}



</x-master-layout>
