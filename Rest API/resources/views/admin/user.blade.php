<x-admin.template-layout :title="$judul" :menu="$menu">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Managemen User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-navy">
            <div class="card-header">
                <h3 class="card-title">Daftar User</h3>
                <button class="btn btn-sm btn-success float-right">Tambah</button>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="tableUser">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Nama</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Created</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; ?>
                    @foreach($tabelUser as $row)
                    <tr>
                        <th class="text-center">{{$no++}}</th>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td class="text-center">{{$row->created_at}}</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-primary">Suspend</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</x-admin.template-layout>
