@extends('layouts.header')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="frame col-md-8 col-sm-5">
            <div class="center row">
                <div class="profile col-md-10 justify-content-center">
                    <div class="image">
                        <img id="profileImage" src="http://100dayscss.com/codepen/jessica-potter.jpg">
                    </div>

                    <div class="infoContainer row align-items-center justify-content-center clearfix">
                        <div class="info">
                            <h3 class="name">{{ $user->name }}</h3>
                            <input type="text" class="newData newName"/>

                            <div class="description">{{ $user->description }}</div>
                            <input type="textarea" class="newData newDescription"/>
                            <input type="file" class="newData newImage"/>
                        </div>
                        <span id="editBtn" class="fas fa-edit" onclick="editProfile(this)"></span>
                    </div>
                </div>

                <div class="stats d-flex flex-column col-md-2">
                    <div class="box box1">
                        <span class="value">523</span>
                        <span class="parameter">Following</span>
                    </div>
                    <div class="box box2">
                        <span class="value">1387</span>
                        <span class="parameter">Followers</span>
                    </div>
                    <div class="box box3">
                        <span class="value">146</span>
                        <span class="parameter">Likes</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <ul>

            <li class="li"><a href="#" class="lista" id="0">Canción 1</a></li>
            <div id="respuesta-0" style="display:none">
                <iframe width="500" height="281" src="https://www.youtube.com/embed/OtWWkW7nEI8" frameborder="0"
                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>

            <li class="li"><a href="#" class="lista" id="1">Canción 2</a></li>
            <div id="respuesta-1" style="display:none">
                <iframe width="500" height="281" src="https://www.youtube.com/embed/OtWWkW7nEI8" frameborder="0"
                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>

            <li class="li"><a href="#" class="lista" id="2">Canción 3</a></li>
            <div id="respuesta-2" style="display:none">
                <iframe width="500" height="281" src="https://www.youtube.com/embed/F1Vgu237AbU?list=RDvz9QbgXDHVA"
                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>

            <li class="li"><a href="#" class="lista" id="3">Canción 4</a></li>
            <div id="respuesta-3" style="display:none">
                <iframe width="500" height="281" src="https://www.youtube.com/embed/LBr7kECsjcQ?list=RDvz9QbgXDHVA"
                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>

        </ul>
        <input id="search" type="text" onkeyup="execute()">
        <button onclick="authenticate().then(loadClient)">authorize and load</button>


    </div>
@endsection