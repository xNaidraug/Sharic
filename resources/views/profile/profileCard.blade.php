@extends('layouts.header')

@section('content')
<div class="row justify-content-center">
    <div class="frame col-md-8 col-sm-5">
      <div class="center row">
            <div class="profile col-md-10 justify-content-center">
                <div class="image">
                    <img src="http://100dayscss.com/codepen/jessica-potter.jpg">
                </div>


                <div class="infoContainer row align-items-center justify-content-center clearfix">
                    <div class="info">
                        <div class="name">{{ Auth::user()-> name }}</div>
                        <div class="description">{{ Auth::user()->description }}</div>
                    </div>
                </div>
            </div>
            
            <div class="stats d-flex flex-column col-md-2">
                <div class="box">
                    <span class="value">523</span>
                    <span class="parameter">Following</span>
                </div>
                <div class="box">
                    <span class="value">1387</span>
                    <span class="parameter">Followers</span>
                </div>
                <div class="box">
                    <span class="value">146</span>
                    <span class="parameter">Likes</span>
                </div>
            </div>
      </div>
    </div>
</div>
@endsection