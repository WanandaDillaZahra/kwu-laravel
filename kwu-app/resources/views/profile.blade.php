<h1>
    Ini Halaman File View dari Profile
    <br>
    Halo, <?php echo $name; ?> <!-- Versi PHP Native -->
    <br>
    Hai, {{ $name }} <!-- Versi Blade Laravel -->
</h1>

<hr>
<h2>Profile</h2>
<p>
    Name : {{ $name }} <br>
    Phone : {{ $phone }} <br>
    Position : {{ $position }}
</p>