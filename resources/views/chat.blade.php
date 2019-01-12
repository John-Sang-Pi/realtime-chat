<!DOCTYPE html>
<html>
<head>
	<title>ChatRoom</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
	.list-group {
		overflow-y: scroll;
		height: 450px;
	}

	[v-cloak] {
    	display: none !important;
	}
</style>
<body>
	<div class="container">
		<div class="row" id="app" v-cloak>
			<div class="col-md-5 offset-md-3">
				<li class="list-group-item active">Chat Room <span style="float:right" class="badge badge-pill badge-success">Online  @{{ numberOfUsers }}</span></li>
				<div class="badge badge-pill badge-primary">@{{ typing }}</div>
				<ul class="list-group list-group-flush" v-chat-scroll>
  					<message v-for="value,index in chat.message" 
  					:key="value.index" 
  					:color="chat.color[index]"
  					:user="chat.user[index]"
  					:time="chat.time[index]">
  						@{{ value }}
  					</message>
  				</ul>
			<input type="text" class="form-control" v-model="message" v-on:keyup.enter="send" placeholder="Type Your Message Here...">
			<br>
				  <a href="" class="btn btn-warning btn-sm" @click.prevent='deleteSession'>Delete Chats</a>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>