<h1>
    Ini Halaman File view dari Profile
    <br>
    Halo, <?php echo $name; ?> <!-- Versi PHP Native -->
    <br>
    Hai, {{ $name}} <!-- Versi Blade Laravel -->

</h1>
<hr>
<h2>Profile Information</h2>
<p>
    Name : {{ $name }} <br>
    Phone : {{ $phone }} <br>
    Position : {{ $position }}
    Tanggal Lahir : {{ $tanggallahir }}
    Jenis Kelamin : {{ $Jk }}
    Sekolah : {{ $sekolah }}
</p>

