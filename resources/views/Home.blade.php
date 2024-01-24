@extends('layout.layout')

@section('section')
<style>
    .welcomeimage img {
    width: 100%;
    height: auto;
    object-fit: cover;
}
   .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
        width: calc(33.33% - 20px); /* 33.33% width for each card with a 20px gap */
        height: 60%;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-bottom: 20px;
        margin-top: 5%;
        transition: transform .2s;
    }
            .card:hover {
            -ms-transform: scale(1.1); /* IE 9 */
            -webkit-transform: scale(1.1); /* Safari 3-8 */
            transform: scale(1.1); 
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

    .card img {
        width: 100%;
    
        object-fit: cover;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

        .card-content {
            padding: none;
            text-align  : center;
        }

        .card h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .card p {
            color: #555;
            line-height: 1.4;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #2980b9;
        }
</style>
<div class="welcomeimage" >
        <img  src="images/NSO.png" alt="Your Image Description">
  </div>

  <br> <br>
  <div class="card-container">
    <div class="card">
        <img src="images/SampleShirt2.png" alt="Shirt Image 1">
        <div class="card-content">
            <h2>Stylish Shirt 1</h2>
            <p>A comfortable and fashionable shirt for any occasion. Made with high-quality fabric to ensure a perfect fit.</p>
        </div>
    </div>

    <div class="card">
        <img src="images/SampleShirt2.png" alt="Shirt Image 2">
        <div class="card-content">
            <h2>Stylish Shirt 2</h2>
            <p>A comfortable and fashionable shirt for any occasion. Made with high-quality fabric to ensure a perfect fit.</p>
           
        </div>
    </div>

    <div class="card">
        <img src="images/SampleShirt2.png" alt="Shirt Image 1">
        <div class="card-content">
            <h2>Stylish Shirt 3</h2>
            <p>A comfortable and fashionable shirt for any occasion. Made with high-quality fabric to ensure a perfect fit.</p>
        </div>
    </div>
</div>
@endsection