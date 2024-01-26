@extends('layout.layout')

@section('section')

<div class="cpContent">
  <div class="imgUsericon"></div>
  <img
    loading="lazy"
    src="https://cdn.builder.io/api/v1/image/assets/TEMP/9ac2d1d7b21b06a4488532a93d6f5c9601fdf2992eed351fe2d7c09c5a69dcdf?"
    class="img"
  />
  <div class="cpHeader">
    Welcome 
    <div class=cpName>
    </div>
    <span style="font-weight: 400" class="cpUName">@username!</span>
    </div>
  <div class="cpDeets">Recipient’s Details</div>
  <!-- <div class="cpEmail">juankalros@gmail.com</div> -->
  <input type= "text" name="userEmail" placeholder="juankalros@gmail.com"></input>

  <div class="wrapperAdd">
        <!-- <div class="cpAddDeets">Uhome 1156 Sampaloc Manila</div> -->
        <input type= "text" placeholder="367 DSAA Caniogan">
        <a href="#" class="editButton" id="editButton">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/9f50214fe1a467bc20bb6b17d1799264e8b5483a3416d569318c17fc1c4b2fd6?"
        class="img-3">    
        </a>
        </input>

            <!-- <div class="cpNum">
                <div class="cpNumDeets">0987645621</div>
                <img
                loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/9f50214fe1a467bc20bb6b17d1799264e8b5483a3416d569318c17fc1c4b2fd6?"
                class="img-3"
                />
            </div> -->
        <input type= "text" placeholder="367 DSAA Caniogan">
        <a href="#" class="editButton" id="editButton">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/9f50214fe1a467bc20bb6b17d1799264e8b5483a3416d569318c17fc1c4b2fd6?"
        class="img-3">    
        </a>
        </input>
        <div class="cpChangePass">Change Password</div>
</div>
@endsection