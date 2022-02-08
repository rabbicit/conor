<div class="about-page">
  <section class="intro intro-mini full-width jIntro bg-blog" id="anchor00">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-center">
            <h1 class="primary-title">About</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
      <!-- BIOGRAPHY -->
      <section class="section biography inverse-color" id="anchor03">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="voffset70"></div>
                    <div class="voffset30"></div>
                    <p class="pretitle">About Us</p>
                    <div class="voffset20"></div>
                    <h2 class="title">TOPWAVEMUSIC</h2>
                    <div class="voffset110"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('images/biography.jpg') }}" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="voffset50"></div>
                    <div class="quote">
                        <p>"If I can play one note and make you cry, then that's better than thouse fancy dancers playing twenty notes."</p>
                        <p class="author">Robbie Robertson</p>
                    </div>
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam iure blanditiis velit, suscipit quidem fuga, magni repudiandae atque placeat sint corporis commodi praesentium dolore necessitatibus minima nemo ipsam, perspiciatis
                            libero, quos. Obcaecati consectetur vel nostrum praesentiu.</p>
                        <p>Obcaecati consectetur vel nostrum praesentium dolore necessitatibus minima nemo ipsam, perspiciatis libero, quos, odio quaerat asperiores repudiandae atque placeat sint corporis commodi onsectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="voffset150"></div>
        </div>
    </section>
  <section class="section inverse-color contact" id="anchor08">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="voffset70"></div>
          <div class="voffset30"></div>
          <p class="pretitle">get it touch</p>
          <div class="voffset20"></div>
          <h2 class="title">say hello!</h2>
          <div class="voffset80"></div>
        </div>
      </div>       
      <div class="row">
        <div class="col-sm-6 col-md-7">
          <form action="#" wire:submit.prevent="sendMessage" method="post" id="contactform" class="contact-form">
            <div class="form-group">
              <label class="title small" for="name">Your name:</label>
              <input type="text" placeholder="Full Name" name="name" id="name" class="text name required" wire:model="name">
              @error('name') <p class="text-danger">{{$message}}</p>@enderror
            </div>
            
            <div class="form-group">
              <label class="title small" for="email">Your email:</label>
              <input type="email" placeholder="Your Email" name="email" id="email" class="text email required" wire:model="email">
              @error('email') <p class="text-danger">{{$message}}</p>@enderror
            </div>

            <div class="form-group">
              <label class="title small" for="name">Phone:</label>
              <input type="text" placeholder="Phone number" name="phone" id="phone" class="text name" wire:model="phone">
              @error('phone') <p class="text-danger">{{$message}}</p>@enderror
            </div>
            
            <div class="form-group">
              <label class="title small" for="message">Your message:</label>
              <textarea name="message" class="text area required" id="message" placeholder="Type Message" wire:model="comment"></textarea>
              @error('comment') <p class="text-danger">{{$message}}</p>@enderror
            </div>

            @if(Session::has('message'))
            <div class="formSent"><p><strong>{{Session::get('message')}}</strong></p></div>
            @endif
            <input type="submit" value="Submit" class="btn rounded">   
            <div class="voffset80"></div>            
          </form>
        </div>
        <div class="col-sm-6 col-md-5">
          <div class="col-contact">
            <h4 class="title small">Top Wave</h4>
            <div class="voffset20"></div>
            <p>1000 NE Miami Gardens Suite #100</p>
            <p>Miami Beach, FL, 3343</p>
            <ul class="contact">
              <li><i class="fa fa-envelope"></i> support@topwavemusic.com</li>
            </ul>
            <h4 class="title small">Get socialized with us</h4>
            <ul class="social-links">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>