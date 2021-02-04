@extends('layouts.master')

@section('title','HOME')

@section('content')



{{--
     <img src="{{asset('img/Bannercertificados-01_0.jpg')}}" style="width:100%">
     <img src="{{asset('img/BannerfinalPT-01.jpg')}}" style="width:100%"> 
--}}


<style>

    /* Slideshow container */
    .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
    }

    /* Next & previous buttons */
    .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: rgb(0, 0, 0);
    
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
    right: 0;
    border-radius: 3px 0 0 3px;
    /* color: rgb(255, 255, 255); */
    }

    /* On hover, add a grey background color */
    .prev:hover, .next:hover {
    background-color: #9c9b9b;
    color: black;
    }


</style>




<div class="slideshow-container">
  <div class="mySlides1">
    <img src="{{asset('img/BannerA.jpg')}}" style="width:100%">
    
  </div>

  <div class="mySlides1">
    <img src="{{asset('img/BannerB.jpg')}}" style="width:100%"> 
   
  </div>

  <div class="mySlides1">
    <img src="{{asset('img/BannerC.jpg')}}" style="width:100%">

  </div>

  <div class="mySlides1">
    <img src="{{asset('img/BannerD.jpg')}}" style="width:100%">

  </div>

  <div class="mySlides1">
    <img src="{{asset('img/BannerE.jpg')}}" style="width:100%">

  </div>
  <div class="mySlides1">
    <img src="{{asset('img/BannerF.jpg')}}" style="width:100%">

  </div>

  <div class="mySlides1">
    <img src="{{asset('img/BannerG.jpg')}}" style="width:100%">

  </div>

  <div class="mySlides1">
    <img src="{{asset('img/BannerH.jpg')}}" style="width:100%">

  </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>


<script>
var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>


   




@stop
