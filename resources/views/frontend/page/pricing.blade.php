@extends('frontend.layouts.master')
@section('title')
 Home 
@endsection

@section('content')



    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pricing</h2>
          <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
        </div>

        <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Free Membership <br> $0.20 per lead</h3>
              <div class="icon">
                <i class="bi bi-box"></i>
              </div>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Advanced List Scrubbing</li>
                <li><i class="bi bi-check"></i> 24 – 48 Hour Delivery</li>
                <li><i class="bi bi-check"></i> Up To 8 Phone Numbers</li>
                <li><i class="bi bi-check"></i> Up To 2 Email Addresses</li>
                <li><i class="bi bi-check"></i>  Including LLCs</li>
              </ul>
              <div class="text-center"><a href="{{ route('plant.checkout',$free->plan_id) }}" class="buy-btn">Current Membership</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item featured">
            <h3>Free Membership <br> $0.12 per lead</h3>
              <div class="icon">
                <i class="bi bi-airplane"></i>
              </div>

              <h4><sup>$</sup>9<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Advanced List Scrubbing</li>
                <li><i class="bi bi-check"></i> 24 – 48 Hour Delivery</li>
                <li><i class="bi bi-check"></i> Up To 8 Phone Numbers</li>
                <li><i class="bi bi-check"></i> Up To 2 Email Addresses</li>
                <li><i class="bi bi-check"></i>  Including LLCs</li>
              </ul>
              <div class="text-center"><a href="{{ route('plant.checkout',$Premium->plan_id) }}" class="buy-btn">Upgrade Membership</a></div>
              <br>
              <br>
              <div class="text-center"><a href="{{ route('plant.downgrade',$Premium->plan_id) }}" class="buy-btn">Downgrade </a></div>
              <br>
              @php
                $subscriptions = Laravel\Cashier\Subscription::where('user_id',auth()->user()->id)->first();
              @endphp
             
              <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ route('suscription.cancel') }}" enctype="multipart/form-data">
                @csrf
                    <div class="text-center">
                      <button type="submit" class="buy-btn">Cancel Membership</button>
                    </div> 
              </form>
            
              <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ route('suscription.resume') }}" enctype="multipart/form-data">
                @csrf
                    <div class="text-center">
                      <button type="submit" class="buy-btn">Resume Membership</button>
                    </div> 
              </form>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item">
            <h3>Free Membership <br> $0.08 per lead</h3>
              <div class="icon">
                <i class="bi bi-send"></i>
              </div>
              <h4><sup>$</sup>97<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Advanced List Scrubbing</li>
                <li><i class="bi bi-check"></i> 24 – 48 Hour Delivery</li>
                <li><i class="bi bi-check"></i> Up To 8 Phone Numbers</li>
                <li><i class="bi bi-check"></i> Up To 2 Email Addresses</li>
                <li><i class="bi bi-check"></i>  Including LLCs</li>
              </ul>
              <div class="text-center"><a href="{{ route('plant.checkout',$vip->plan_id) }}" class="buy-btn">Upgrade Membership</a></div>
              <br>
              <div class="text-center"><a href="{{ route('plant.upgrade',$vip->plan_id) }}" class="buy-btn">Upgrade </a></div>
              
            </div>
          </div><!-- End Pricing Item -->

        </div>
      </div>
    </section><!-- End Pricing Section -->


    
@endsection



