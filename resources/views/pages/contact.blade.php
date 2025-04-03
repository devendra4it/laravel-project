@extends('layouts.masterlayout')
@section('title')
    Contact Us
@endsection

@section('content')
<!-- Contact section -->
<div class="w3-container w3-light-grey w3-padding-32 w3-padding-large" id="contact">
    <div class="w3-content" style="max-width:600px">
      <h4 class="w3-center"><b>Contact Me</b></h4>
      <p>Do you want me to photograph you? Fill out the form and fill me in with the details :) I love meeting new people!</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-section">
          <label>Name</label>
          <input class="w3-input w3-border" type="text" name="Name" required>
        </div>
        <div class="w3-section">
          <label>Email</label>
          <input class="w3-input w3-border" type="text" name="Email" required>
        </div>
        <div class="w3-section">
          <label>Message</label>
          <input class="w3-input w3-border" type="text" name="Message" required>
        </div>
        <button type="submit" class="w3-button w3-block w3-black w3-margin-bottom">Send Message</button>
      </form>
    </div>
  </div>  
@endsection

@section('sidebar')
  @parent
  <p>Tis is appended to the master sidebar</p>
@endsection

@push('scripts')
    <script="example.js"></script>
@endpush
@php
    $user = 'Devendra Sharma';
    $fruits = ["Apple","Oragnge","Mango","Banana"];
@endphp
<script>
    //var data = @json($fruits);
    var data = {{ Js::from($fruits) }}
    //console.log(userdata);

    data.forEach(function(entry){
        console.log(entry);
    });
</script>

@prepend('style')
  <style>
    body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    .w3-quarter img{margin-bottom: -6px; cursor: pointer}
    .w3-quarter img:hover{opacity: 0.6; transition: 0.3s}
  </style>  
@endprepend