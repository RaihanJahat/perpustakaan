<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 ">
        <div class="card">
            <div class="card-header">
                <span class="card-title h4 text-black-50">Data pegawai</span>
            </div>
            <div class="card-body">
                <table id="table-movie" class="table table-sm table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Depan</th>
                            <th>Nama Belakang</th>
                            <th>Email</th>
                            <th>JK</th>
                            <th>Jabatan</th>
                            <th>Perusahaan</th>
                            <th>Kata sandi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pegawai as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->namaDepan}}</td>
                                <td>{{$item->namaBelakang}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->jenisKelamin}}</td>
                                <td>{{$item->jabatan}}</td>
                                <td>{{$item->pekerjaan}}</td>
                                <td>{{$item->kataSandi}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $pegawai->onEachSide(5)->links() }}
            </div>
        </div>
    </div>
    <x-alert />
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>