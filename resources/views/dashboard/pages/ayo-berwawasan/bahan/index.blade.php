@extends('dashboard.layouts.master')
@section('content')
<div class="container p-0">
    <h1 class="h3 mb-3">
        <strong>Bahan Pembelajaran</strong>
    </h1>

    <div class="row mb-2">
        <div class="col-12">
            <a href="{{route('dashboard.bahan.create')}}" class="btn btn-primary">Create</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex">
            <div class="card flex-fill container py-3">
                <div class="table-responsive">
                    <table class="table table-hover my-0" id="datatable">
                        <thead>
                            <tr>
                                <th class="d-none d-xl-table-cell">Title</th>
                                <th class="d-none d-xl-table-cell">File</th>
                                <th class="d-none d-xl-table-cell">Description</th>
                                <th class="d-none d-xl-table-cell" style="min-inline-size: 100px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($table as $index => $row)
                            <tr>
                                <td>{{$row->title}}</td>
                                <td>
                                    <img src="{{asset('storage/'.$row->file)}}" class="rounded-circle" style="width:50px;height:50px;">
                                </td>
                                <td>{{$row->description}}</td>
                                <td>
                                    <a href="{{route('dashboard.bahan.show',$row->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('dashboard.bahan.edit',$row->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
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
                $("#frmDelete").attr("action", "{{ route('dashboard.bahan.destroy', 'id') }}".replace("id", id));
                $("#frmDelete").find('input[name="id"]').val(id);
                $("#frmDelete").submit();
            }
        })
    });
</script>
@endsection