@extends('home.layouts._site')

@section('content')

<section class="page">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
      <ol class="breadcrumb">
          <li><a href="{{ route('home.index') }}">Home</a></li>
        <li class="active">About Us</li>
      </ol>
                <h1 class="page-title">About Us</h1>
                <p class="page-subtitle">We will tell you who we are</p>
                <div class="line thin"></div>
                <div class="page-description">

                    <section>
                        <h2>Our Mission</h2>
                        <p>At Ads Magazine, our mission is to connect businesses and individuals with their target audience through effective and engaging advertising. We believe in the power of advertising to create opportunities and foster growth for both advertisers and consumers.</p>
                    </section>

                    <section>
                        <h2>What We Offer</h2>
                        <p>Ads Magazine provides a platform for companies and individuals to showcase their products, services, and messages to a wide audience. Whether you're a small local business or a large corporation, our platform is designed to help you reach potential customers effectively.</p>
                    </section>

                    <section>
                        <h2>Why Choose Ads Magazine?</h2>
                        <p>1. <strong>Visibility:</strong> Your ads will be prominently featured on our platform, ensuring maximum visibility.</p>
                        <p>2. <strong>Targeted Reach:</strong> Reach your specific target audience based on demographics, interests, and more.</p>
                        <p>3. <strong>Easy to Use:</strong> Our user-friendly platform allows advertisers to create and manage ads effortlessly.</p>
                        <p>4. <strong>Affordable Options:</strong> We offer a range of advertising slots to fit various budgets and needs.</p>
                    </section>

                    <section>
                        <h2>Meet the Team</h2>
                        <p>Ads Magazine is made possible by a dedicated team of professionals passionate about connecting businesses and individuals with their audience. Our team works tirelessly to ensure the success of your advertising campaigns.</p>
                    </section>

                    <section>
                        <h2>Contact Us</h2>
                        <p>Have questions or want to get started with advertising on Ads Magazine? We're here to help! Contact our support team at <a href="mailto:support@adsmagazine.com">support@adsmagazine.com</a>.</p>
                    </section>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
