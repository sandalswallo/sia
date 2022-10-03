@extends('layout.app')

@section('title')
    Kelas
@endsection

@section('content')

 <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Data Kelas</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Kelas</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data kelas</h3>
                        <div class="card-tools">

                            <button type="button" onclick="addForm('{{route('kelas.store')}}')" class="btn btn-tool">
                            <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover text-nowrap" style="width: 100%">
                        <thead>

                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>

                        </thead>
                        </table>
                    </div>

                </div>

            </section>

            @includeIf('kelas.form')
@endsection

@push('script')
    <script>

        let table;

        $(function(){
            table = $('.table').DataTable({
                proccesing: true,
                autowitdh: false,
                ajax: {
                    url: '{{route('kelas.data')}}'
                },
                columns:[
                    {data: 'DT_RowIndex'},
                    {data: 'nama'},
                    {data: 'aksi'}
                ]
            });
        })

        $('#kelasForm').on('submit', function(e){
            if(! e.preventDefault()){
                $.post($('#kelasForm form').attr('action'),$('#kelasForm form').serialize())
                .done((response) => {
                    $('#kelasForm').modal('hide');
                    table.ajax.reload();

                    iziToast.success({
                    title: 'Sukses',
                    message: 'Data Berhasil Disimpan',
                    position: 'topRight',
                })
                })
                .fail((errors) => {

                    iziToast.error({
                    title: 'error',
                    message: 'Data Gagal Disimpan',
                    position: 'topRight',
                })
                    return;
                })
            }
        })

        function addForm(url){
            $('#kelasForm').modal('show');
            $('#kelasForm .modal-title').text('Tambah Data kelas');

            $('#kelasForm form')[0].reset();
            $('#kelasForm form').attr('action', url);
            $('#kelasForm [name=_method]').val('post');
        }

        function editData(url){
            $('#kelasForm').modal('show');
            $('#kelasForm .modal-title').text('Edit Data kelas');

            $('#kelasForm form')[0].reset();
            $('#kelasForm form').attr('action', url);
            $('#kelasForm [name=_method]').val('put');

            $.get(url)
            .done((response) => {
                $('#kelasForm [name=nama]').val(response.nama);
                
            })
            .fail((errors) => {
                alert('Tidak dapat menampilkan data');
                return;
            })
        }

        function deleteData(url){

            swal({
  title: "Yakin ingin menghapus data ini?",
  text: "Jika Anda klik Ok! Maka data akan terhapus",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    $.post(url, {
                    '_token': $('[name=csrf-token]').attr('content'),
                    '_method': 'delete'
                })
                .done((response)=> {
                    swal({
                    title: "Sukses",
                    text: "Data Berhasil Dihapus",
                    icon: "success",
                    });
                    return;
                })
                .fail((erros) => {
                    swal({
                    title: "Gagal",
                    text: "Data Gagal Dihapus",
                    icon: "error",
                    });
                    return;
                })
                table.ajax.reload();
  } else {
    swal("File Anda Aman");
  }
});     
        }
    </script>
@endpush