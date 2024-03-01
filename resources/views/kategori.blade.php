<!DOCTYPE html>
<html>
    <head>
        <title>Data Level Pengguna</title>
    </head>
    <body>
        <h1>Data Level Pengguna</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Kode Kategori</th>
                <th>Nama Kategori</th>
            </tr>
            @foreach ($data as $d)
            <tr>
                <th>{{ $d->kategori_id }}</th>
                <th>{{ $d->kategori_kode }}</th>
                <th>{{ $d->kategori_nama }}</th>
            </tr>
            @endforeach
        </table>
    </body>
</html>