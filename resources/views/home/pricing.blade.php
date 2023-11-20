@extends('home.layouts._site')

@section('styles')
    <style>
        .pricing-plan {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }

        .plan {

            flex: 1;
            padding:50px 20px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            background: linear-gradient(to bottom, #ffffff, #f0f0f0);
        }

        .plan:hover {
            transform: scale(1.05);
        }

        .plan h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .plan p {
            color: #777;
        }

        .price {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .features {
            list-style: none;
            padding: 0;
            text-align: center;
        }

        .features li {
            margin-bottom: 10px;
        }
    </style>
@endsection
@section('content')
    <section class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home.index') }}">Home</a></li>
                        <li class="active">Pricing</li>
                    </ol>
                    <h1 class="page-title">Pricing</h1>
                    <p class="page-subtitle">Choose what you need</p>
                    <div class="line thin"></div>
                    <div class="page-description">
                        <section>
                            <div class="pricing-plan">
                                @foreach ($ad_slots as $ad_slot)
                                    <div class="plan">
                                        <h3>{{ $ad_slot->name }}</h3>
                                        <p>{{ $ad_slot->duration }}days</p>
                                        <div class="price">{{ $ad_slot->price }}$</div>
                                        <ul class="features">
                                            <li>{{ $ad_slot->description }}</li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
