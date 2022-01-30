<div class="table-wrapper table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>
                    {{-- <h6>id</h6> --}}
                </th>
                <th>
                    <h6>name</h6>
                </th>
                <th>
                    <h6>Actions</h6>
                </th>
            </tr>
            <!-- end table row-->
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
            <tr>
                <td>
                    {{-- <p>{{ $teacher->id }}</p> --}}
                </td>
                <td>
                    <h4>{{ $teacher->name }} </h4>
                </td>
                <td>
                    <div class="action">
                        <a class="text-success"
                            href="{{ route('teacher.edit', $teacher->id) }}">Edit</a>
                        &nbsp;
                        <form action="{{ route('teacher.destroy',$teacher->id) }}"
                            method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="text-danger delete-teacher"
                                value="Delete">
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
    </table>
    {{ $teachers->links() }}
    <!-- end table -->
</div>
