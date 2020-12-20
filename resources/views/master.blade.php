
<!DOCTYPE html>
<html lang=”en”>
<head>  
    <title>JAYA MAHENDRA</title>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    <body>
    <style type="text/css">
  .footer{
    background-color: #ececec;
    color: black;
    font-family: serif;
  }
    </style>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand" >JYM15</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="heroes">Heroes</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="book">Book</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">{{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf
            </form>
            </li>
        </ul>
      </div>
 
    </nav>
       
          @section('konten')
          @show
          <div class="footer">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <br><br>
                  <h3>JYM15</h3><br>
                  
                    <a href="https://www.instagram.com/rjaia/?hl=id">
                    <img src="/img/ig_logo2.png" style="width:8%"></a>

                    <a href="www.facebook.com">
                    <img src="/img/fb_logo.png" style="width:8%"></a>

                    <a href="www.twitter.com">
                    <img src="/img/twitter_logo2.png" style="width:8%"></a>
                    
                  <br>
                </div>
                <div class="col-md-4"><br><h3>About</h3>
                  <br><h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita placeat laudantium reprehenderit assumenda dolore laboriosam architecto quo illo?</h6></div>
                <div class="col-md-1"></div>
                <div class="col-md-3"><br>
                  <h3>Contact</h3>
                  <br>
                  Jaya Mahendra <br> 1931710015 <br> Politeknik Negeri Malang
                </div>
              </div>
            </div>
          </div>
          
    </body>
</html>