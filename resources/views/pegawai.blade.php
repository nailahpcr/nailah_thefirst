<!DOCTYPE html>
<html>
<head>
    <title>Data Pegawai - Nailah Houra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        h1 {
            color: #2c3e50;
        }
        ul {
            list-style-type: disc;
            margin-left: 20px;
        }
        p {
            font-size: 16px;
        }
        .highlight {
            font-weight: bold;
            color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Data Pegawai</h1>
    <p><span class="highlight">Nama:</span> {{ $name }}</p>
    <p><span class="highlight">Umur:</span> {{ $my_age }} tahun</p>
    <p><span class="highlight">Hobi:</span></p>
    <ul>
        @foreach ($hobbies as $hobby)
            <li>{{ $hobby }}</li>
        @endforeach
    </ul>
    <p><span class="highlight">Tanggal Harus Wisuda:</span> {{ $tgl_harus_wisuda }}</p>
    <p><span class="highlight">Sisa Waktu Belajar (hari):</span> {{ $time_to_study_left }}</p>
    <p><span class="highlight">Semester Saat Ini:</span> {{ $current_semester }}</p>
    <p><span class="highlight">Info Semester:</span> {{ $semester_info }}</p>
    <p><span class="highlight">Cita-cita:</span> {{ $future_goal }}</p>
</body>
</html>
