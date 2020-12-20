@extends('admin')
@section('konten')

<!-- <center>
<br><br>
<h2>Edit Data</h2>

</center>
<br><br>
@foreach($bio as $b)
<form action="/admin/updateb" method="post">
	{{ csrf_field() }}
	<input type="hidden" name="id" value="{{ $b->id }}"> <br/>
	Judul        <input type="text" required="required" name="judul" value="{{ $b->nama }}"> <br/>
    
    Isi         <input type="text" required="required" name="isi" value="{{ $b->isi }}"> <br/>
	<input type="submit" value="Save">
</form>
@endforeach -->
<br><br>
@foreach($bio as $b)
 <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-body">
                    <center><h1>Edit Form</h1>
					<h3>Heroes Page</h3></center>
                    <br><br><br>
                    <form action="/admin/updateb" method="POST">
					    {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $b->id }}"> <br/>


                        <div class="form-group row" >
                            <label for="name" class="col-md-2 col-form-label text-md-right">Nama</label>
                            <div class="col-md-10">
                                <input type="text" required="required" class="form-control" name="judul" value="{{ $b->nama }}"  autofocus>
                            </div>
                        </div>

                        <div class="form-group row" >
                            <label for="name" class="col-md-2 col-form-label text-md-right">Isi</label>
                            <div class="col-md-10">
                                <input type="text" required="required" class="form-control" name="isi" value="{{ $b->isi }}"  >
                            </div>
                        </div>

                        <div class="form-group row" >
                            <label for="name" class="col-md-2 col-form-label text-md-right">Gambar</label>
                            <div class="col-md-6">
                            <input type="text" required="required" class="form-control" name="gambar" value="{{ $b->gambar }}" >
                                <input type="file" name="image"> 
                            </div>
                        </div>
                        

                        <input type="hidden" name="id" value="{{ $b->id }}"> <br/>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endforeach



 
@endsection