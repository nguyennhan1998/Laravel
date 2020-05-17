@extends("layout")
@section("title","login")
@section("css","login")
@section("content")
    <div style="text-align: center; margin-top:35px;font-size: 60px;"><i class="fas fa-user"></i></div>
    <div class="content1">
        <div class="register">
            <form action="#" method="post">
                <div class="form-group">
                    <label for="exampleInputPassword1">Enter username(*)</label>
                    <input type="password" class="form-control" placeholder=" Username" style="font-family:Arial, FontAwesome" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Enter password(*)</label>
                    <input type="password" class="form-control" placeholder=" Password" style="font-family:Arial, FontAwesome" required>
                </div>
                <button type="submit" class="btn btn-warning">log in</button>
                <p>forgot your password? <a href="#">click here</a></p>
            </form>


        </div>
    </div>
@endsection
