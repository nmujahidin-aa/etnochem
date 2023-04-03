@extends('dashboard.layouts.master')
@section('content')

<div class="container p-0">
    <h1 class="h3 mb-3">
        <strong>Soal</strong>
    </h1>

    <div class="row mb-2">
        <div class="col-12">
            <a href="{{route('dashboard.soal.create')}}" class="btn btn-primary">Create</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex">
            <div class="card flex-fill container py-3">
                <div class="table-responsive">
                    <table class="table table-hover my-0" id="datatable">
                        <thead>
                            <tr>
                                <th class="d-none d-xl-table-cell">No.</th>
                                <th class="d-none d-xl-table-cell">Soal</th>
                                <th class="d-none d-xl-table-cell">Jawaban</th>
                                <th class="d-none d-xl-table-cell">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($table as $index => $row)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$row->question}}</td>
                                <td>
                                    A. {{$row->answer_a}} <br>
                                    B. {{$row->answer_b}} <br>
                                    C. {{$row->answer_c}} <br>
                                    D. {{$row->answer_d}} <br>
                                    E. {{$row->answer_e}}
                                </td>
                                <td>
                                    <a href="{{route('dashboard.soal.show',$row->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('dashboard.soal.edit',$row->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger btn-delete" data-id="{{$row->id}}"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<form id="frmDelete" method="POST">
    @csrf
    @method('DELETE')
    <input type="hidden" name="id"/>
</form>
@endsection

@section("script")
<script type="text/javascript">
    $(function(){
        $("#datatable").DataTable();
        
        $(document).on("click",".btn-delete",function(){
            let id = $(this).data("id");
            if(confirm("Apakah anda yakin ingin menghapus data ini ?")){
                $("#frmDelete").attr("action", "{{ route('dashboard.soal.destroy', 'id') }}".replace("id", id));
                $("#frmDelete").find('input[name="id"]').val(id);
                $("#frmDelete").submit();
            }
        })
    });
</script>
@endsection