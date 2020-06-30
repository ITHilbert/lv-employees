@extends('layouts.app')

@section('content')
<card title="@lang('employees::employee.header_list')">

@include('include.message')

{{--<button-create route="{{ route('employees.create') }}">Neuer Mitarbeiter</button-create>--}}

<table class="table table-bordered data-table">
    <thead>
    <tr>
        <th width="50px">Nr.</th>
        <th>@lang('employees::employee.name')</th>
        <th>@lang('employees::employee.phone')</th>
        <th>@lang('employees::employee.mobile')</th>
        <th>@lang('employees::employee.email')</th>
        <th width="100px"></th>
    </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</card>

{{--
<dialog-delete title="Mitarbeiter löschen" body="Wollen Sie wirklich diesen Mitarbeiter löschen?" route="{{ route('employees.delete',0) }}" ></dialog-delete>
--}}
@endsection


@section('js')
    <script>
        $(function() {

            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                language: { url: "{{ asset("DataTable_DE.json ") }}" },
                ajax: "{{ route('employees.index') }}",
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                    { data: 'name', name: 'name' },
                    { data: 'phone', name: 'phone' },
                    { data: 'mobile', name: 'mobile' },
                    { data: 'mailto', name: 'mailto' },
                    { data: 'action', name: 'action', orderable: false, searchable: false },
                ],
            });

        });
    </script>
@endsection
