@section('content')
    <h2>Contact.</h2>
    <div>
        <table cellpading=10 cellspacing=0 border=1>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Waktu Entri</th>
            <tr>
            @foreach($data as $person)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $person->nis }}</td>
                <td>{{ $person->namalengkap }}</td>
                <td>{{ $person->jk }}</td>
                <td>{{ $person->created_at }}</td>
            </tr>
            @endsection
        </table>
    </div>
@endsection
