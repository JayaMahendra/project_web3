@extends('master')

@section('konten')

<style type="text/css">
.heroes{
        background-color: #212121;
        color: white;
        font-family: monospace;
}
.isi{
    font-size: 0px;
}
</style>


<div class="heroes"><br><br><br><br><br><br><br>
    <div class="isi">
        <div class="container">
            <div class="row">
                    <center> <img src="{{ $hdetail[0]->gambar }}" style="width:30%"> 
                    <h3>{{ $hdetail[0]->nama}}</h3>
                    <br><br>
                    <h6>{{ $hdetail[0]->isi}}</h6>
                    </center>
            </div>
        </div>
    </div>
</div>
<br><br><br>

@endsection
