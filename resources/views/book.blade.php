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
    <center> <h2>-Book-</h2><br>
            <h4>Buku - buku tentang perjuangan Indonesia</h4> <br><br>
    <br><br><br>

    <div class="isi">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://cf.shopee.co.id/file/9f15bd08f7492f73218e2a30e64a0668" style="width:50%">
                        <h5>PKI</h5><br><br>
                        <a href="/biography/bdetail/1" class="btn btn-secondary">See More</a>
                    </div>
                    <div class="col-md-4">
                        <img src="https://fagustin.files.wordpress.com/2016/05/max-havelaar.jpeg?w=640"style="width:70%">
                        <h5>Max Havelar</h5><br>
                        <a href="/biography/bdetail/2" class="btn btn-secondary">See More</a>
                    </div>
                    <div class="col-md-4">
                        <img src="https://cf.shopee.co.id/file/66f479375a88e22b7a21bf1daf0ec3bd"style="width:50%">
                        <h5>Habis Gelap Terbitlah Terang</h5>
                        <a href="/biography/bdetail/3" class="btn btn-secondary">See More</a>
                    </div>
                </div> <br><br>
            
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2016/9/1/506680/506680_330624ec-bf7f-4e26-912f-987433750e28" style="width:45%">
                        <h5>Di Bawah Bendera Revolusi</h5>
                        <a href="/biography/bdetail/4" class="btn btn-secondary">See More</a>
                    </div>
                    <div class="col-md-5">
                        <img src="https://mmc.tirto.id/image/otf/880x495/2018/05/31/tetralogi-pramoedya-ananta-toer-tirto.jpg" style="width:45%">
                        <h5>Tetralogi Buru</h5>
                        <a href="/biography/bdetail/5" class="btn btn-secondary">See More</a>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>

                </center><br><br><br>
    
    
</div>


@endsection
