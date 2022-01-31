<h6 class="mb-10">Table head options</h6>

<div class="table-wrapper table-responsive">
    <table class="table striped-table">
        <thead>
            <tr>
                <th></th>
                <th>
                    <h6>Teacher Name</h6>
                </th>
                <th>
                    <h6>Class Observed</h6>
                </th>
                <th>
                    <h6>Score</h6>
                </th>
                <th>
                    <h6>Observed by</h6>
                </th>
                <th>
                    <h6>Actions</h6>
                </th>
            </tr>
            <!-- end table row-->
        </thead>
        <tbody>
            @foreach ($lessons as $lesson)
            <tr>
                <td>
                    <h6 class="text-sm">#{{ $lesson->id }}</h6>
                </td>
                <td>
                    <p>{{ $lesson->teacher->name }}</p>
                </td>
                <td>
                    <p>Year {{ $lesson->studentClass->name }}</p>
                </td>
                <td>
                    <p>Waiting to add in some stuff</p>
                </td>
                <td>
                    <p>{{ $lesson->user->name }}</p>
                </td>
                <td>
                    <a href="{{ route('lesson.show', $lesson->id) }}" class="text-primary">View</a>
                    <a href="{{ route('lesson.edit', $lesson->id) }}" class="text-success">Edit</a>
                    {{-- <a href="#" class="text-danger">Delete</a> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $lessons->links() }}

    <!-- end table -->
</div>