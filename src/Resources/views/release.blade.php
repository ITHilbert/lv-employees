@extends('customers::layouts.master3')

@section('title', Lang::get('customers::customer.header_release'))

{{-- @section('content_header')
@stop --}}

@section('content')
<card title="@lang('customers::customer.customer') {{ $customer->getName() }} - @lang('customers::customer.releases')">

  @include('include.message')

  <hform action="{{route('customer.release.store', $customer->id) }}">
    <div class="row">
      <div class="col-2">
        <combobox name="userid" :options="{{ Helper::getUserNoAdminCB() }}"></combobox>
      </div>
      <div col-1>
        <button-save name="btnAdd">Benutzer hinzufügen</button-save>
      </div>
    </div>
  </hform>

  <table class="table table-bordered data-table">
      <thead>
      <tr>
          <th width="50px">Nr.</th>
          <th>@lang('customers::customer.employee')</th>
          <th>@lang('customers::customer.email')</th>
          <th width="100px"></th>
      </tr>
      </thead>
      <tbody>
      </tbody>
  </table>
</card>

<dialog-delete title="Mitarbeiter freigabe löschen" body="Wollen Sie wirklich die Freigabe löschen?" route="{{ route('customer.release.delete', [$customer->id, 0] ) }}" ></dialog-delete>


@stop


@section('js')
<script>
  $(function() {

    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        language: { url: "{{ asset("DataTable_DE.json ") }}" },
        ajax: "{{ route('customer.release', $customer->id) }}",
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ],
    });

  });
</script>
@stop
