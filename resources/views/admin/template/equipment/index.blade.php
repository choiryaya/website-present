@extends('admin.template.default')
@section('content')

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">RFID Data</h1>
          </div>
          @if (session('success'))
          <div class="alert alert-success">{{ session('success')}}</div>
         @endif
         @if (session('info'))
          <div class="alert alert-success">{{ session('info')}}</div>
         @endif

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>RFID</th>
                    <th>Weight</th>
                  </tr>
                </thead>
                {{-- <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                  </tr>
                </tbody> --}}
              </table>
              <form action="" method="POST" id="deleteForm">
                @csrf
                @method("DELETE")
                <input type="submit" class="btn btn-outline-danger" value="Delete" style="display: none">
            </form>
            </div>
          </div>
        </div>

@endsection
@push('scripts')
  <script>
    $(function () {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('equipment.data') }}',
            columns: [
                { data: 'DT_RowIndex', orderable:false},
                { data: 'rfid'},
                { data: 'weight'},
            ]
        });
    });
</script>
@endpush
