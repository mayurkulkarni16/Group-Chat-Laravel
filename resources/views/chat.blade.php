@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-md-4 col-md-4">
                <li class="list-group-item active">Chat Room</li>
                <div class="badge badge-pill badge-primary">@{{ typing }}</div>
                <ul class="list-group" style="height: 250px; overflow-y: scroll" v-chat-scroll="{smooth: true, notSmoothOnInit: true}">
                    <chat-component v-for="value,index in chat.message" :color="chat.color[index]" :key="value.index" :user="chat.user[index]" :time="chat.time[index]"> @{{ value }} </chat-component>
                </ul>
                <input type="text" class="form-control" placeholder="Enter Message" v-model="message" @keyup.enter="send">
            </div>
        </div>
    </div>
@endsection
