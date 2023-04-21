@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Jemaat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Jemaat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
<div class="container">
    <a href="/tambahjemaat" type="button" class="btn btn-success">Tambah+</a>
    <div class="row g-3 align-items-center mt-2">
        <div class="col-auto">
            <form action="/datajemaat" method="get">
                <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
            </form>
        </div>
      </div>
    <div class="row">
        <!-- Menampilkan pesan success jika data berhasil di inpunput -->
        @if ($message= Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
          </div>
            
        @endif
        <table class="table">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Telepon</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php $nomor=1 ?>
                @foreach ($data as $index=>$row)
                    
                    <tr>
                        <th scope="row">{{ $index + $data->firstItem() }}</th> <!-- firstitem agar nomor terutut walau dipagination berbeda-->
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->jeniskelamin }}</td>
                        <td>{{ $row->alamat }}</td>
                        <td>{{ $row->notelpon }}</td>
                        <td>
                            <a href="/tampilkandata/{{ $row->id }}" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger delete" nama="{{ $row->nama }}" data-id="{{ $row->id }}">Delete</a>
                        </td>
                    </tr>
                </tbody>
                <?php $nomor++ ?>   
            
            @endforeach
        </table>
        {{ $data->links() }}
        <!-- Optional JavaScript; choose one of the two! -->
    </div>
</div>
</div>
<script>
$('.delete').click(function(){
  var pegawaiid= $this.attr('data-id');
  var namaid=$this.attr('nama');
  Swal.fire({
  title: Y
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
})
</script>
@endsection