@extends('layouts.temp_admin.master')

@section('content')
    <div class="col-md-12 col-sm-12  ">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Master</a></li>
                <li class="breadcrumb-item active" aria-current="page">Brands</a></li>
            </ol>
        </nav>
        <div class="x_panel">
            <div class="x_title">
                <h2>List Brands</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <a href="{{ route('brands.create') }}" class="btn btn-sm btn-success">
                    <i class="fa fa-plus"></i>
                    Add Brand {{$brands}}
                </a>

                <div class="table-responsive">
                    <table class="table table-sm table-striped jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                        <th>
                            <input type="checkbox" id="check-all" class="flat">
                        </th>
                        <th class="column-title">Name </th>
                        <th class="column-title">Created At </th>
                        <th class="column-title no-link last"><span class="nobr">Action</span>
                        </th>
                        <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($brands as $key => $v)
                        <tr class="even pointer">
                            <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">{{ $v->name ?? '' }}</td>
                            <td class=" "> {{ $v->created_at }} </td>
                            <td class=" last">
                                <a href="#">
                                    <i class="fa fa-eye"></i>
                                    View
                                </a>&nbsp;
                                <a href="{{ route('brands.edit', $v->id) }}">
                                    <i class="fa fa-edit"></i>
                                    Edit
                                </a>&nbsp;
                                <a href="javascript:;" class="sa-delete" data-form-id="brand-delete-{{ $v->id }}">
                                    <i class="fa fa-trash"></i>
                                    Delete
                                </a>
                                <form method="POST" action="{{ route('brands.destroy', $v->id) }}" id="brand-delete-{{ $v->id }}">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-center" colspan="5">
                                Data Empty!
                            </td>
                        </tr>                            
                        @endforelse
                    </tbody>
                    </table>
                    <div class="col-md-12 text-center" style="font-size: 10px !important;">
                        {!! $brands->links() !!}
                    </div>
                </div>
                    
            </div>
        </div>
    </div>

    @push('js')
    {{-- sweetalert --}}
    <script src="{{ asset('temp_admin/vendors/sweetalert/sweetalert.min.js') }}"></script>

    <script>
        $('.sa-delete').on('click', function() {
    
        let form_id = $(this).data('form-id');

        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $('#'+form_id).submit();
                } else {
                    swal("Your data is safe!");
                }
            });
    });
    </script>
    @endpush
@endsection