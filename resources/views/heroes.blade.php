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
    <center> <h2>-Heroes-</h2><br>
            <h4>Pahlawan-Pahlawan Di Indonesia</h4> <br><br>
    <br><br><br>
    <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/01/Presiden_Sukarno.jpg" style="width:50%">
                        <h5>Ir. Sorkarno</h5>
                        <a href="/biography/hdetail/1" class="btn btn-secondary">See More</a>
                    </div>
                    <div class="col-md-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/ff/Mohammad_Hatta_1950.jpg"style="width:50%">
                        <h5>Drs. Moh. Hatta</h5>
                        <a href="/biography/hdetail/2" class="btn btn-secondary">See More</a><br>
                    </div>
                    <div class="col-md-4">
                        <img src="https://kebudayaan.kemdikbud.go.id/wp-content/uploads/2017/02/WR-Supratman-696x1003.jpg"style="width:50%">
                        <h5>W.R Supratman</h5>
                        <a href="/biography/hdetail/3" class="btn btn-secondary">See More</a><br>
                    </div>
                    <div class="col-md-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/23/COLLECTIE_TROPENMUSEUM_Portret_van_Raden_Ajeng_Kartini_TMnr_10018776.jpg"style="width:50%">
                        <h5>R.A Kartini</h5>
                        <a href="/biography/hdetail/4" class="btn btn-secondary">See More</a><br>
                    </div>
                    <div class="col-md-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Sudirman.jpg"style="width:50%">
                        <h5>Jendral Soedirman</h5>
                        <a href="/biography/hdetail/5" class="btn btn-secondary">See More</a><br>
                    </div>
                    <div class="col-md-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/ed/Bung_Tomo.jpg"style="width:50%">
                        <h5>Bung Tomo</h5>
                        <a href="/biography/hdetail/6" class="btn btn-secondary">See More</a>
                    </div>
                    <div class="col-md-12">
                        <img src="https://i1.wp.com/news.schmu.id/wp-content/uploads/2020/10/biografi-ki-hajar-dewantara-jejak-sejarah-singkat.jpg?resize=840%2C1024&ssl=1"style="width:15%">
                        <h5>Ki Hajar Dewantara</h5>
                        <a href="/biography/hdetail/7" class="btn btn-secondary">See More</a>
                    </div>
                </div> <br><br><br><br>
                </center>
    
</div>

@endsection
