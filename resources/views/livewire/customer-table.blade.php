<div>


    <table class="table-fixed w-full text-center mt-3">
        <thead>


        <tr>

            <th>#</th>

            <th>Action</th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>

        </tr>
        </thead>

        <tbody>
        @isset($customers)
        @foreach($customers as $customer)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                </td>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->address }}</td>
            </tr>
        @endforeach
        @endisset
        </tbody>

    </table>

</div>
