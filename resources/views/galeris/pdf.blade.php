<!DOCTYPE html>
<html>
<head>
    <title>Galeri Data PDF</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 8px; text-align: left; border: 1px solid #ddd; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Galeri Data Report</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Foto</th>
                <th>Deskripsi</th>
                <th>Tanggal Unggah</th>
                <th>Album</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galeris as $index => $galeri)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $galeri->JudulFoto }}</td>
                    <td>{{ $galeri->DeskripsiFoto }}</td>
                    <td>{{ $galeri->TanggalUnggah }}</td>
                    <td>{{ $galeri->album->NamaAlbum ?? 'Tidak ada album' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
