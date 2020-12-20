@extends('admin')

@section('konten')
  <br><br>
                              <center>  <h2> Halaman Data User</h2>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($user as $u)
                            <tr>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->email }}</td>
                                <td>
                                    <a href="/admin/edit/{{ $u->id }}" class="btn btn-warning">Edit</a>

                                <form action="{{route('userr.destroy', $u->id) }}" method="POST">

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to deleted this?')">Delete</button>
                                </form>           
                            
                            
                            
                        

                                     
                                </td>
                            </tr>
                        </form>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


@endsection