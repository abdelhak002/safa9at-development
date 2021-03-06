@extends('layouts.app')


@section('content')


<style>
.picture_container {
  position: relative;
  width: 200px;
}

.upload-button {
	color: #76f6f4;
    display: block;
    float: left;
}

.profile-pic {
    max-width: 200px;
    max-height: 200px;
    display: block;
}

.file-upload {
	position: absolute;
	opacity: 0;
}

.image {
  display: block;
  height: 200px;
  width: 200px;
  border-radius: 50%;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 200px;
  width: 200px;
  opacity: 0;
  transition: .5s ease;
  background-color: #008cbacc;
  border-radius: 50%;
}


.picture_container:hover .overlay {
  opacity: 1 !important;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>

<div class="container">

	<div class="row">
      <!-- left column -->
      <div class="col-md-4">
        <form action="{{ action('ProfileController@update_pic') }}" method="POST" id="update_pic" enctype="multipart/form-data">
        	@csrf
          <div class="picture_container mx-auto">
			  <img  src="{{ asset('storage/'.$user->avatar) }}" alt="Avatar" class="image">
			  <div class="overlay">
			    <div class="text">
			    <div class="upload-button"><i class="fas fa-camera"></i> {{ __('profile.editProfile') }}</div>
			<input class="file-upload" type="file" accept="image/*" name="avatar" />
			    </div>
			  </div>
			</div>
        </form>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-6 personal-info {{ $tdir }}">
        
        <form class="form-horizontal mt-4 {{ $tdir }}" role="form" method="POST" action="{{ url('profile/'. Auth::id() ) }}" >
          @method('PUT')
          @csrf
          <div class="form-group">
            <label class="col control-label">{{__('profile.fullName')}}</label>
            <div class="col">
              <input name="name" class="form-control" type="text" value="{{ $user->name }}">
            </div>
          </div>
          <div class="form-group">
            <label class="col control-label">{{__('profile.birthday')}}</label>
            <div class="col">
              <input name="birthday" class="form-control" type="date" value="{{ $user->birthday }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col control-label">{{__('profile.phone')}}</label>
            <div class="col">
                <div class="form-row">
                  <select class="form-control col-4" name="phone_country">
                    @if(empty($user->phone_country))
                    <option value="--" selected disabled>--</option>
                    @else
                    <option value="{{ $user->phone_country }}" selected disabled>{{ $user->phone_country }}</option>
                    @endif
                    <option value="213" inputmode="numeric" pattern="[-+]?[0-9]*[.,]?[0-9]+">(+213 DZ)</option>
                    <option value="212">(+212 MA)</option>
                  </select>

                  <input name="phone" class="form-control col-8" type="text" value="{{ $user->phone }}">
                </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col control-label">{{__('profile.address')}}</label>
            <div class="col">
              <input name="address" class="form-control" type="text" value="{{ $user->address }}">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col control-label"></label>
            <div class="col">
              <input type="submit" class="btn btn-primary" value="{{ __('profile.editProfile') }}">
              <span></span>
              <input type="reset" class="btn btn-default" value="{{ __('profile.cancel') }}">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>



<script>
$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.image').attr('src', e.target.result);
                $('.overlay').css('opacity', '0');

            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
		//$.post('{{ action('ProfileController@update_pic') }}', $('#update_pic').serialize());
		$(this).closest("form").submit();

    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});
</script>

@endsection