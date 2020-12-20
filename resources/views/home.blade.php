

@extends('master')

@section('konten')
<style type="text/css">
.home{
    background-color: #212121;
    color:white;
}
.jasmerah{
    position : absolute;
    top: 50%;
    left: 50%;
    transform : translate(-50%, -50%);
    color: #680808;
    font-size: 50px;
    font-family: fantasy;
    letter-spacing: 10px;
}
.jgn{
    position: absolute;
    top: 65%;
    left: 10%;
    color: #f0f0f0;
    opacity: 70%;
    font-size: 30px;
    font-style: italic;
    font-family: serif;
}
.sjrh{
    position: absolute;
    top: 65%;
    right: 10%;
    color: #ffffff;
    opacity: 70%;
    font-size: 30px;
    font-style: italic;
    font-family: serif;
}
.row{
    margin: 10px-20px;
}
.row, .row> .column{
    padding: 10px;
}
.row:after{
    display : table;
    clear: both;
}
.column{
    float: center;
    width: 30px;
}
.content{
    padding: 10px;
    background-color: #e0e0e0;
    color: white;
    font-size: 13px;
}
.container{
    font-size: 15-x;
    font-family: monospace;
}
.pahlawan{
    font-size: 30px;
    color: white;
}
.pres{
    background-color:  #ececec;
    color: #212121;
}
.books{
    border:10px groove #ececec;
}
</style>

<br><br>
<div class="home">
    <div class="atas">
        <img src="/img/biohomee.png" alt="">
        <div class="jasmerah">JASMERAH</div>
        <div class="jgn">Jangan Sekali-kali</div>
        <div class="sjrh">Meniggalkan Sejarah</div>
    </div>
    <br><br><br>
    <div class="container">
        <div class="pahlawan">
            <center><p>-Pahlawan-</p><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-img">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/23/COLLECTIE_TROPENMUSEUM_Portret_van_Raden_Ajeng_Kartini_TMnr_10018776.jpg" alt="" style="width:50%">
                        <div class="card-body">
                            <h5>R.A Kartini</h5>
                            <a href="/biography/hdetail/4" class="btn btn-secondary">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-img">
                        <img src="https://kebudayaan.kemdikbud.go.id/wp-content/uploads/2017/02/WR-Supratman-696x1003.jpg" alt="" style="width:50%">
                        <div class="card-body">
                            <h5>W.R Supratman</h5>
                            <a href="/biography/hdetail/3" class="btn btn-secondary">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-img">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Sudirman.jpg" alt="" style="width:50%">
                        <div class="card-body">
                            <h5>Soedirman</h5>
                            <a href="/biography/hdetail/5" class="btn btn-secondary">See More</a>
                        </div>
                    </div>
                </div>
            </div></center>
        </div>
    </div>
    <br><br><br>
    <div class="pres"><br>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a href="/biography/hdetail/1">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/0/01/Presiden_Sukarno.jpg" alt="" style="width:90%"></a>
                </div>
                <div class="col-md-5">
                    <br><br><br> <h6>Presiden 1#</h6><h3>Ir.Soekarno</h3>
                </div>
                <div class="col-md-3">
                    <br><br><br> <h6>Wapres 1#</h6><h3>Drs. Moh.Hatta</h3>
                </div>
                <div class="col-md-2">
                    <a href="/biography/hdetail/2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/ff/Mohammad_Hatta_1950.jpg" alt="" style="width:90%">
                    </a>
                </div>
            </div>
        </div><br>
    </div>
    <br><br><br><br><br>

    <div class="container"><div class="books">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6"><br>
                <h1>Max Havelar</h1>
                <h6>Multilatuli</h6><br>
                <h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex sunt ducimus sapiente voluptatibus eligendi, nostrum, blanditiis autem iure culpa amet labore, natus quo! Facere aut suscipit excepturi facilis, commodi quis.</h6>
            </div>
            <div class=" col-md-4">
                <a href="/biography/bdetail/2">
                <img src="https://fagustin.files.wordpress.com/2016/05/max-havelaar.jpeg?w=640" alt="" style="width:100%"></a>
            </div>
        </div>
    </div></div>
    <br><br><br>
</div>
@endsection