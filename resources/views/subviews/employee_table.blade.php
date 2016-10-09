<table class="table table-stripped table-responsive">
    <thead>
    <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Birth Date</th>
        <th>Hire Date</th></tr>
    </thead>
    <tbody>
    @if (count($employees) > 0)

        @foreach ($employees as $employee)
            <tr>
                <th scope="row">{{ $employee->emp_no }}</th>
                <td><strong>{{ $employee->first_name }}</strong></td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->gender }}</td>
                <td>{{ $employee->birth_date }}</td>
                <td>{{ $employee->hire_date }}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="6" class="text-center">
                <p class="text-muted">Query returned {{ count($employees) }} records.</p>
            </td>
        </tr>

    @else
        <tr>
            <td colspan="6" class="text-center">
                <p class="text-muted">Query did not return any records.</p>
            </td>
        </tr>
    @endif

    </tbody>
</table>