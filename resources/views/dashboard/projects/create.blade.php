<x-master-layout>

    <h2></h2>
    <div class="w-full max-w-xs">
        <form class=" flex flex-col items-center basis-2 px-8 pt-6 pb-8 mb-4" action="{{route('project.store')}}" method="POST">
        @csrf
            <div class="flex flex-col items-start m-2">
                <label class="text-gray-700 color-black" for="title">
                    Title
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="title" id="title" type="text">
            </div>

            <div class="flex flex-col items-start m-2">
                <label class="text-gray-700 color-black" for="img-link">
                    Image link
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="image" id="imgLink" type="text">
            </div>

            <div class="flex flex-col items-start m-2">
                <label class="text-gray-700 color-black" for="description">
                    Description
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="description" id="description" type="text">
            </div>

            <div class="flex items-center m-2 gap-4">
                <label for="active">Active project?</label>
                <select class="rounded" name="active" id="active">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-white p-1 rounded border-black" type="submit">Submit!</button>
            </div>

        </form>
    </div>

</x-master-layout>