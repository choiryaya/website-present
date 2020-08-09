@extends('admin.template.default')
@section('content')

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">RFID Data</h1>
        <a href="{{ route('rfid.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Data</a>
          </div>
          @if (session('success'))
          <div class="alert alert-success">{{ session('success')}}</div>
         @endif

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>School</th>
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
            ajax: '{{ route('rfid.data') }}',
            columns: [
                { data: 'id'},
                { data: 'name'},
                { data: 'school'}
            ]
        });
    });
</script>
@endpush
