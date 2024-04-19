<x-master-layout>
    @foreach( $projects as $project )
    <a href="{{route('project.show', $project)}}">Bekijk dit item</a>
            <div
                class="max-w-sm p-2 bg-white border border-gray-200 rounded-lg shadow dark:bg-blue-700 dark:border-blue-900">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">
                    {{$project->title}}
                </h5>
                {{$project->id}}
                <p>
                {{$project->description}}
                </p>
                
            </div>
        @endforeach
</x-master-layout>