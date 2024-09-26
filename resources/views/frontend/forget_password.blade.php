@extends ('frontend.layout.app')

@section('title')

Forget password 

@endsection

@section ('content')

<div class="container">
    
<h1>Welcome To Forget Password Page</h1>

<form id="forgotpasswordForm" onsubmit="return validateForm()">
    <div class ="input-group">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" required>
    </div>

    <button type="submit" class="btn">submit</button>

    <div id="error-message" class="error-message"></div>

</form>

</div>

@endsection