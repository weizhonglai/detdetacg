@extends('layouts.master')
@section('title', 'Contact Us')
@extends('components.main-footer')
 
@section('css_include')
@stop

@section('javascript_include')
@stop

@section('content')
  <div class="row">
      <div id="map-outer" class="col-md-12">
          <div id="address" class="col-md-4">
            <h2>Our Location</h2>
            <hr>
            <address>
            <strong>DetDetACG</strong><br>
                Example Address<br>
                30123<br>
                Jalan Bukit<br>
                Bukit Mertajam<br>
                <abbr>Tel: </abbr> +041234567
           </address>
          </div>
        <div id="map-container" class="col-md-8" style=" height: 400px; "></div>
      </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
        <h3>Contact</h3>
        <p>Our Campany ......... Example Contact Information</p>
        <hr/>
        <h4>Address</h4>
        <address><strong>DetDetACG</strong><br/>1234, Example Address<br/><abbr
                title="Phone">H/P: &nbsp;</abbr> +601212345678
        </address>
        <address class="mbxl"><strong>Email</strong><br/><a href="mailto:#">example@email.com</a>
        </address>
    </div>
    <div class="col-lg-6">
        <h3>Feedback</h3>
        <p>Example Feedback
        	Any Problem or need us to improve please Feedback to Us Thank You.</p>
        <hr/>
        <form action="#">
            <div class="form-group">
                <div class="input-icon"><i class="fa fa-check"></i><input type="text"
                                                                          placeholder="Subject"
                                                                          class="form-control"/>
                </div>
            </div>
            <div class="form-group">
                <div class="input-icon"><i class="fa fa-user"></i><input type="text"
                                                                         placeholder="Name"
                                                                         class="form-control"/>
                </div>
            </div>
            <div class="form-group">
                <div class="input-icon"><i class="fa fa-envelope"></i><input
                        type="password" placeholder="Email" class="form-control"/></div>
            </div>
            <div class="form-group"><textarea rows="3" placeholder="Content"
                                              class="form-control"></textarea></div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
  </div>

@stop