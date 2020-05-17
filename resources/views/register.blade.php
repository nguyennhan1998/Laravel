@extends("layout")
@section("title","register")
@section("css","register")
@section("content")
    <div style="text-align: center; margin-top:35px;font-size: 60px;"><i class="fas fa-user"></i></div>
    <div class="content1">
        <div class="register">
            <form action="#" method="post">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder=" Email" style="font-family:Arial, FontAwesome" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder=" First name" style="font-family:Arial, FontAwesome" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder=" Last name" style="font-family:Arial, FontAwesome" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder=" Password" style="font-family:Arial, FontAwesome" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder=" Password" style="font-family:Arial, FontAwesome" required>
                </div>
                <button type="submit" class="btn btn-warning">log in</button>
                <p>forgot your password? <a href="#">click here</a></p>
            </form>


        </div>
    </div>
@endsection
