@extends('layouts/master')

@section('title', 'Contact')

@section('body')
  <div class="head-bread">
      <div class="container">
          <ol class="breadcrumb">
              <li><a href="/">Home</a></li>
              <li class="active">Contact</li>
          </ol>
      </div>
  </div>
  <!-- contact -->
  <div class="contact">
      <div class="container">
          <h3>Catch us</h3>
          <div class="contact-content">
              <form>
                  <input type="text" class="textbox" value=" Your Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name';}"><br>
                  <input type="text" class="textbox" value="Your E-Mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your E-Mail';}"><br>
                      <div class="clear"> </div>
                  <div>
                      <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Message ';}">Your Message</textarea><br>
                  </div>
                  <div class="submit">
                      <input class="btn btn-default cont-btn" type="submit" value="SEND " />
                  </div>
              </form>
              <div class="map">
                <iframe src="https://maps.google.com/maps?q=Polytech Montpellier&t=&z=13&ie=UTF8&iwloc=&output=embed"> </iframe>
              </div>
          </div>
      </div>
  </div>
  <!--contact-->
@stop
