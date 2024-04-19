<x-master-layout>

<h2>Ingelogde dashboard,  wouwie wat mooi</h2>

<a href="{{route('project.create')}}" class="bg-green hover:bg-green text-white font-bold py-2 px-4 rounded float-right">
    {{ __('New project') }}
</a>

    <a href="{{route('project.show', $project)}}">{{ $project->title }}</a><br>

<p>{{$project->description}}</p>
{{$project->image}}



</x-master-layout>
