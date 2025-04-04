@extends('layouts.masterlayout')
@section('title')
    About
@endsection

@section('content') 
{{-- @verbatim
<div id="app">{{ message }}</div>
@endverbatim --}}
  <!-- About section -->
  <div class="w3-container w3-dark-grey w3-center w3-text-light-grey w3-padding-32" id="about">
    <h4><b>About Me</b></h4>
    <img src="/w3images/avatar_hat.jpg" alt="Me" class="w3-image w3-padding-32" width="600" height="650">
    <div class="w3-content w3-justify" style="max-width:600px">
      <h4>My Name</h4>
      <p>Some text about me. I love taking photos of PEOPLE. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
      <p>mail: example@example.com</p>
      <p>tel: 5353 35531</p>
      <hr class="w3-opacity">
      <h4 class="w3-padding-16">Technical Skills</h4>
      <p class="w3-wide">Photography</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-grey" style="width:95%">95%</div>
      </div>
      <p class="w3-wide">Web Design</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-grey" style="width:85%">85%</div>
      </div>
      <p class="w3-wide">Photoshop</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-grey" style="width:80%">80%</div>
      </div>
      <p><button class="w3-button w3-light-grey w3-padding-large w3-margin-top w3-margin-bottom w3-hover-black">Download Resume</button></p>
      <hr class="w3-opacity">

      <h4 class="w3-padding-16">How much I charge</h4>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <ul class="w3-ul w3-white w3-center">
            <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
            <li class="w3-padding-16">Web Design</li>
            <li class="w3-padding-16">Photography</li>
            <li class="w3-padding-16">5GB Storage</li>
            <li class="w3-padding-16">Mail Support</li>
            <li class="w3-padding-16">
              <h2>$ 10</h2>
              <span class="w3-opacity">per month</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
              <button class="w3-button w3-white w3-padding-large">Sign Up</button>
            </li>
          </ul>
        </div>
        
        <div class="w3-half">
          <ul class="w3-ul w3-white w3-center">
            <li class="w3-black w3-xlarge w3-padding-32">Pro</li>
            <li class="w3-padding-16">Web Design</li>
            <li class="w3-padding-16">Photography</li>
            <li class="w3-padding-16">50GB Storage</li>
            <li class="w3-padding-16">Endless Support</li>
            <li class="w3-padding-16">
              <h2>$ 25</h2>
              <span class="w3-opacity">per month</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
              <button class="w3-button w3-white w3-padding-large">Sign Up</button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection

@prepend('style')
  <style>
    body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    .w3-quarter img{margin-bottom: -6px; cursor: pointer}
    .w3-quarter img:hover{opacity: 0.6; transition: 0.3s}
  </style>  
@endprepend

@push('script')
{{-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<script>
  const { createApp, ref } = Vue

  createApp({
    setup() {
      const message = ref('Hello vue!')
      return {
        message
      }
    }
  }).mount('#app')
</script> --}}
@endpush