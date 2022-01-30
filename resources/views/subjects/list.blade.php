<div class="table-wrapper table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>
                    {{-- <h6>id</h6> --}}
                </th>
                <th>
                    <h6>Name</h6>
                </th>
                <th>
                    <h6>Actions</h6>
                </th>
            </tr>
            <!-- end table row-->
        </thead>
        <tbody>
            @foreach ($subjects as $subject)
            <tr>
                <td>
                    {{-- <p>{{ $subject->id }}</p> --}}
                </td>
                <td>
                    <h6>{{ $subject->name }} </h6>
                </td>
                <td>
                    <div class="action">
                        <a class="text-success"
                            href="{{ route('subject.edit', $subject->id) }}">Edit</a>
                        &nbsp;
                        <form action="{{ route('subject.destroy',$subject->id) }}"
                            method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="text-danger delete-subject"
                                value="Delete">
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
    </table>
    {{ $subjects->links() }}
    <!-- end table -->
</div>