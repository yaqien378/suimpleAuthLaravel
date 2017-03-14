@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List User
                    <div class="pull-right">
                        <a href="{{ url('user/tambah') }}" class="btn btn-success">Tambah</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="5%" style="text-align:center">No</th>
                                <th width="20%" style="text-align:center">Nama</th>
                                <th width="30%" style="text-align:center">Email</th>
                                <th width="20%" style="text-align:center">Hak Akses</th>
                                <th width="20%" style="text-align:center">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($users as $val)
                            <tr>
                                <td style="text-align:center">{{ $no }}</td>
                                <td>{{ $val->name }}</td>
                                <td>{{ $val->email }}</td>
                                <td>
                                    @php
                                        switch ($val->level) {
                                            case '1':
                                                echo "Super Admin";
                                                break;
                                            case '2':
                                                echo "Admin";
                                                break;
                                            case '4':
                                                echo "Pengawas";
                                                break;

                                            default:
                                                echo "Operator";
                                                break;
                                        }
                                    @endphp
                                </td>
                                <td style="text-align:center">
                                    <a href="{{ url('/user/hapus') }}" onClick="return confirm('Apakah anda ingin menghapus data ini? ')" name="button" class="btn btn-danger">hapus</a>
                                </td>
                            </tr>
                            @php
                                $no++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
