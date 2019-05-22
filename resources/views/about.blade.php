@extends('layouts.razo')

@section('content')
<div id="colorlib-about">
  <div class="container">
    <div class="row">
      <div class="about-flex">
        <div class="col-one-forth aside-stretch animate-box">
          <div class="row">
            <div class="col-md-12 about">
              <h2>About</h2>

              <ul>
                <li><a href="#">History</a></li>
                <li><a href="#">Staff</a></li>
                <li><a href="#">Connect with us</a></li>
                <li><a href="#">Faqs</a></li>
                <li><a href="#">Career {{ $id }}</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-three-forth animate-box">
          <h2>History</h2>
          <div class="row">
            <div class="col-md-12">
           
            @if (isset($message)) {
             <p>{{ $message }}</p>
            }
            @endif
            
              <div class="row row-pb-sm">
                <div class="col-md-6">
                  <img class="img-responsive" src="images/hotel-7.jpg" alt="">
                </div>
                <div class="col-md-6">
                  <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                  <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                </div>
              </div>


              <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>

              <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

              <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
