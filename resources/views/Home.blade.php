@extends('layout.layout')

@section('section')
<section class="home-welcome">

    <div class="overlay">
        <h1>YEAR II COLLECTION</h1>
    </div>

</section>
<section class="featured-products col">
    <h2 class="featured-products-title">featured products </h2>

    <div class="card-container wrap">
        <div class="card col">
            <img src="images/SampleShirt2.png" alt="Shirt Image 1">
            <div class="card-content">
                <h2>Stylish Shirt 1</h2>
                <p>A comfortable and fashionable shirt for any occasion. Made with high-quality fabric to ensure a perfect fit.</p>
            </div>
        </div>

        <div class="card col">
            <img src="images/SampleShirt2.png" alt="Shirt Image 2">
            <div class="card-content">
                <h2>Stylish Shirt 2</h2>
                <p>A comfortable and fashionable shirt for any occasion. Made with high-quality fabric to ensure a perfect fit.</p>

            </div>
        </div>

        <div class="card col">
            <img src="images/SampleShirt2.png" alt="Shirt Image 1">
            <div class="card-content">
                <h2>Stylish Shirt 3</h2>
                <p>A comfortable and fashionable shirt for any occasion. Made with high-quality fabric to ensure a perfect fit.</p>
            </div>
        </div>
    </div>
</section>
@endsection