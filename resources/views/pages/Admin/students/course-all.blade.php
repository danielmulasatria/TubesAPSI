<x-admin-layout>
    <div class="w-full py-2">
        <div>
            <div class="text-gray-900">
                <div class="w-full flex justify-between py-4 border-b-2">
                    <div class="px-4">
                        <p class="text-3xl font-bold">List All Courses</p>
                    </div>
                    <div>
                        <a class="inline-block rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
                            href="{{ route('admin.course.form') }}">
                            New Courses
                        </a>
                    </div>
                </div>
                <div class="w-fulloverflow-x-auto">
                    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                        <thead class="ltr:text-left rtl:text-right">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Course Name</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Number of Credits</th>

                                {{-- <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Course Lecturer</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Courses Date</th> --}}
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            @foreach ($courses as $courses)
                                <tr class="text-center">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                        {{ $courses->coursesName }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        {{ $courses->coursesSKS }} SKS</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        {{ $courses->coursesLecture }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        {{ $courses->coursesDate }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 flex gap-2">
                                        <a class="inline-block rounded border border-indigo-600 bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
                                            href="{{ route('admin.course.edit.form', ['courseId' => $courses->coursesId]) }}">
                                            Edit
                                        </a>
                                        <form
                                            action="{{ route('admin.course.delete.form.process', ['courseId' => $courses->coursesId]) }}"
                                            method="post">
                                            @method('delete')
                                            @csrf
                                            <button
                                                class="inline-block rounded border border-indigo-600 bg-red-600 px-4 py-2 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
