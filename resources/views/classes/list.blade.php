<div class="table-wrapper table-responsive">
    {{-- <table class="table">
        <thead>
            <tr>
                <th>
                    <h6>Name</h6>
                </th>
                <th>
                    <h6>Actions</h6>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student_classes as $student_classe)
            <tr>
                <td>
                    <h4>Year {{ $student_classe->name }} </h4>
                </td>
                <td>
                    <div class="action">
                        <a class="text-success" href="{{ route('class.edit', $student_classe->id) }}">Edit</a>
                        &nbsp;
                        <form action="{{ route('class.destroy',$student_classe->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="text-danger delete-classes" value="Delete">
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
    </table> --}}
    <ul class="list-group">
        @foreach ($student_classes as $student_class)
        <li class="list-group-item">
            <p>Year {{ $student_class->name }} </p>
        </li>
        {{-- <a class="text-success" href="{{ route('class.edit', $student_classe->id) }}">Edit</a>
        &nbsp;
        <form action="{{ route('class.destroy',$student_classe->id) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" class="text-danger delete-classes" value="Delete">
        </form> --}}
        @endforeach
    </ul>

    {{ $student_classes->links() }}
</div>