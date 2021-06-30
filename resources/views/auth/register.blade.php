@extends('layouts.app')

@section('content')
<div class="page-content">
		<div class="form-v6-content">
			<div class="form-left">
				<img width="480px" src="{{ asset('images/bg-login.jpg') }}" alt="form">
			</div>
			<form class="form-detail" method="POST" action="{{ route('register') }}">
                @csrf
				<h2>Bro Mobil - Daftar</h2>
				<div class="form-row">
					<input type="text" name="name" id="name" class="input-text form-control @error('name') is-invalid @enderror" placeholder="Nama Anda" value="{{ old('name') }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				<div class="form-row">
					<input type="text" name="email" id="email" class="input-text form-control @error('email') is-invalid @enderror" placeholder="Email Anda" value="{{ old('email') }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
				<div class="form-row">
					<input type="password" name="password" id="password" class="input-text form-control @error('password') is-invalid @enderror" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
				<div class="form-row">
					<input type="password" name="password_confirmation" id="comfirm-password" class="input-text" placeholder="Konfirmasi Password" >
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Daftar Sekarang">
				</div>
                <a href="{{ route('login') }}">Sudah Punya akun?</a>
			</form>
		</div>
	</div>

<style>
    body {
	margin:  0;
}
.page-content {
	width: 100%;
	margin:  0 auto;
	background-image: -moz-linear-gradient( 136deg, rgb(0,0,70) 0%, rgb(28,181,224) 100%);
    background-image: -webkit-linear-gradient( 136deg, rgb(0,0,70) 0%, rgb(28,181,224) 100%);
    background-image: -ms-linear-gradient( 136deg, rgb(0,0,70) 0%, rgb(28,181,224) 100%);
	display: flex;
	display: -webkit-flex;
	justify-content: center;
	-o-justify-content: center;
	-ms-justify-content: center;
	-moz-justify-content: center;
	-webkit-justify-content: center;
	align-items: center;
	-o-align-items: center;
	-ms-align-items: center;
	-moz-align-items: center;
	-webkit-align-items: center;
}
.form-v6-content  {
	background: #fff;
	width: 968px;
	border-radius: 8px;
	-o-border-radius: 8px;
	-ms-border-radius: 8px;
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	margin: 180px 0;
	font-family: 'Nunito', sans-serif;
	color: #fff;
	font-weight: 700;
	position: relative;
	display: flex;
	display: -webkit-flex;
}
.form-v6-content .form-left {
	margin-bottom: -6px;
}
.form-v6-content .form-left img {
	border-top-left-radius: 8px;
	border-bottom-left-radius: 8px;
}
.form-v6-content .form-detail {
    padding: 30px 40px;
	position: relative;
	width: 100%;
}
.form-v6-content .form-detail h2 {
	color: #333;
	font-size: 35px;
	text-align: center;
	position: relative;
	padding: 6px 0 0;
	margin-bottom: 47px;
}
.form-v6-content .form-row {
    width: 100%;
}
.form-v6-content .form-detail .form-row-last {
	text-align: center;
}
.form-v6-content .form-detail .input-text {
	margin-bottom: 35px;
}
.form-v6-content .form-detail input {
	width: 92%;
    padding: 0px 15px 10px 15px;
    border: 2px solid transparent;
    border-bottom: 2px solid #e5e5e5;
    appearance: unset;
    -moz-appearance: unset;
    -webkit-appearance: unset;
    -o-appearance: unset;
    -ms-appearance: unset;
    outline: none;
    -moz-outline: none;
    -webkit-outline: none;
    -o-outline: none;
    -ms-outline: none;
    font-family: 'Nunito', sans-serif;
    font-size: 16px;
    font-weight: 700;
    color: #333;
}
.form-v6-content .form-detail .form-row input:focus {
	border-bottom: 2px solid #fe892a;
}
.form-v6-content .form-detail .register {
	background: #0b1cd9;
	border-radius: 6px;
	-o-border-radius: 6px;
	-ms-border-radius: 6px;
	-moz-border-radius: 6px;
	-webkit-border-radius: 6px;
	width: 160px;
	box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
	-o-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
	-ms-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
	-moz-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
	-webkit-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
	border: none;
	margin: 11px 0 50px 0px;
	cursor: pointer;
	font-family: 'Nunito', sans-serif;
	color: #fff;
	font-weight: 700;
	font-size: 18px;
}
.form-v6-content .form-detail .register:hover {
	background: #050b52;
}
.form-v6-content .form-detail .form-row-last input {
	padding: 13px;
}
input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #666;
  font-size: 16px;
}
input::-moz-placeholder { /* Firefox 19+ */
  color: #666;
  font-size: 16px;
}
input:-ms-input-placeholder { /* IE 10+ */
  color: #666;
  font-size: 16px;
}
input:-moz-placeholder { /* Firefox 18- */
  color: #666;
  font-size: 16px;
}

/* Responsive */
@media screen and (max-width: 991px) {
	.form-v6-content {
		margin: 180px 20px;
		flex-direction:  column;
		-o-flex-direction:  column;
		-ms-flex-direction:  column;
		-moz-flex-direction:  column;
		-webkit-flex-direction:  column;
	}
	.form-v6-content .form-left {
		width: 100%;
	}
	.form-v6-content .form-left img {
		width: 100%;
		border-bottom-left-radius: 0px;
	    border-top-right-radius: 8px;
	}
	.form-v6-content .form-detail {
		padding: 30px 20px 30px 20px;
	    width: auto;
	}
	.form-v6-content .form-detail .form-row input {
		width: 96%;
	}
	.form-v6-content .form-detail .register {
		margin-bottom: 80px;
	}
}
@media screen and (max-width: 767px) {
	.form-v6-content .form-detail .form-row input {
		width: 94%;
	}
}

@media screen and (max-width: 575px) {
	.form-v6-content .form-detail .form-row input {
	    width: 89%;
	}
}
</style>
@endsection
