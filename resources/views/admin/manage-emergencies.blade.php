<x-admin-layout>
    <?php $number = 1 ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div
            class="d-sm-flex align-items-center justify-content-between mb-4"
            >
            <h1 class="h3 mb-0 text-gray-800">Manage Emergencies</h1>
            <a
                href="/emergency/create"
                class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"
                ><i class="fas fa-exclamation-triangle text-white-50 mr-2"></i> Add Emergency Type</a
            >
        </div>        
        <p class="mb-4">
          DataTables is a third party plugin that is used to generate the
          demo table below. For more information about DataTables, please
          visit the
        </p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">
              List of Emergencies
            </h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                class="table table-bordered"
                id="dataTable"
                width="100%"
                cellspacing="0"
              >
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Emergency Id</th>
                    <th>Emergency Type</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($emergencies as $emergency)
                    <tr>
                        <td>{{ $number++ }}</td>
                        <td>{{ $emergency->id }}</td>
                        <td>{{ $emergency->name }}</td>
                        <td>{{ $emergency->description }}</td>
                    </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="container">
            <div class="mt-3 p-3 pagination-md">
                {{ $emergencies->links() }}
            </div>
        </div>

      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
</x-admin-layout>