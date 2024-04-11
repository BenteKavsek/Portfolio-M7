<x-master-layout>
    @foreach( $projects as $project )
            <div
                class="max-w-sm p-2 bg-white border border-gray-200 rounded-lg shadow dark:bg-blue-700 dark:border-blue-900">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">
                    {{$project->title}}
                </h5>
            </div>
        @endforeach
</x-master-layout>