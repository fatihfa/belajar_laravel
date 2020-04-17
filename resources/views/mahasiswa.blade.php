@extends('layout/main')

@section ('title', 'mahasiswa')

@section ('container')
<div class="container mt-4">
<div class="row">
<div class ="col-10">
<h1 class="mt-10">Laravel - Mahasiswa Page</h1>

<body>

	<br/>

	<a href="" class="badge badge-succes">Create</a>
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Umur</th>
				<th>Alamat</th>
				<th>Opsi</th>
			</tr>
			@foreach($student as $p)
			<tr>
				<td>{{ $p->nama }}</td>
				<td>{{ $p->nim }}</td>
				<td>{{ $p->email }}</td>
				<td>{{ $p->jurusan }}</td>
				<td>
					<a href="/mahasiswa/edit/{{ $p->id }}" class="badge badge-succes">Edit</a>
					|
					<a href="/mahasiswa/hapus/{{ $p->id }}" class="badge badge-danger">Hapus</a>
				</td>
			</tr>
			@endforeach
		</thead>
		
	</table>


</body>

</div>
</div>
</div>
@endsection
