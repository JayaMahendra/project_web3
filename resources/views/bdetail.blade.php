@extends('master')

@section('konten')

<style type="text/css">
.book{
        background-color: #212121;
        color: white;
        font-family: monospace;
}
.isi{
    font-size: 0px;
}
</style>


<div class="book"><br><br><br><br><br><br><br>
    <div class="isi">
        <div class="container">
            <div class="row">
                    <center> <img src="{{ $bdetail[0]->gambar }}" style="width:30%"> 
                    <h3>{{ $bdetail[0]->judul}}</h3>
                    <br><br>
                    <h6>{{ $bdetail[0]->isi}}</h6>
                    </center>
            </div>
        </div>
    </div>
</div>

@endsection
