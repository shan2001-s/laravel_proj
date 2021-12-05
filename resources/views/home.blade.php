@extends('layouts.master')
@section('content')
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Blade Lessons</h3>
                <h3>Email is {{ $data['email']}}</h3>
                <p> I live in{{ $data['email']}}</p>
                <p> I'm {{ $username}}</p>
            </div>
          
           <!-- <div class="col-md-6">
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <td>NO</td>
                            <td>Name</td>
                            <td>Type</td>
                            <td>Price</td>
                        </tr>
                        <tbody>
                           
                            @forelse($products as $product)
                            <tr @if($loop->even) class='bg-info' @elseif ($loop->last) class='bg-info' @else class='bg-danger' @endif>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$product['name']}}</td>
                                <td>{{$product['type']}}</td>
                                <td>{{$product['price']}}</td>
                            </tr>
                            @empty
                            NO Data
                            @endforelse
                           
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>-->

        <div class="row">
        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

        @forelse($products as $product)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('img/doctors/doctor_1.jpg')}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$loop->iteration}}</p>
              <span class="text-sm text-grey">{{$product['name']}}</span>
            </div>
          </div>
        </div>
        @empty
         NO Data
     @endforelse
       
        
    </div>
  </div>
        </div>

    </div>
</section>
@endsection