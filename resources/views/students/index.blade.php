<h1>Data Students</h1>

<a href="/students/create">Tambah Data</a>

<ul>
    @foreach($students as $student)
        <li>
            {{ $student->nama }} -
            {{ $student->nim }} -
            {{ $student->jurusan }}
        </li>
    @endforeach
</ul>