@extends('layouts.app')

@section('content')


<!-- contact section starts  -->
<section class="contact">

    <h1 class="heading"> GET IN TOUCH WITH US </h1>

    <div class="row">

       <form action="{{route('action.contact')}}" method="POST">
         @csrf
          <h3>SEND US A MESSAGE</h3>
          <input type="text" name="name" id="name"  placeholder="Enter Your FullName" class="box">
          <input type="email" name="email" id="email"  placeholder="Enter Your Email" class="box">
          <input type="number" name="number" id="number"  placeholder="Enter Your Phone Number" class="box">
          <textarea name="message" class="box" id="message"  placeholder="Enter Your message" id="" cols="30" rows="10"></textarea>
          <input type="submit" value="send message" class="btn">
       </form>

    </div> <br>

    <div class="icons-container">

       <div class="icons">
          <i class="fas fa-clock"></i>
          <h3>OPENING HOURS :</h3>
          <p>07:00AM - 08:30PM</p>
       </div>

       <div class="icons">
          <i class="fas fa-phone"></i>
          <h3>pHONE:</h3>
          <p>+880-000-000000</p>
          <p>+880-000-000000</p>
       </div>

       <div class="icons">
          <i class="fas fa-envelope"></i>
          <h3>EMAIL : </h3>
          <p>jagaranitv@hotmail.com</p>
          <p>jagaranitv@rocketmail.com</p>
       </div>

       <div class="icons">
          <i class="fas fa-map"></i>
          <h3>ADDRESS :</h3>
          <p>KAJIPARA, DHAKA, BANGLADESH - 1216</p>
       </div>

    </div>

 </section>

 <!-- contact section ends -->


@endsection
