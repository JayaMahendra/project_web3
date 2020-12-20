@extends('admin')

@section('konten')
  <br><br>
                              <center>  <h2> Halaman Heroes</h2>
                                <h4> CRUD </h4> </center>
                                <br><br>
                                
        <div class="container">
            <div class="card mt-1">
                <div class="card-header text-center">
                      
                </div>
                <div class="card-body">
                    
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Isi</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($bio as $o)
                            <tr>
                                <td>{{ $o->nama }}</td>
                                <td>{{ $o->isi }}</td>
                                <td>
                                    <a href="/admin/editb/{{ $o->id }}" class="btn btn-warning">Edit</a>
                                    <a href="{{url('/admin/delete'). '/'. $o->id}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


@endsection