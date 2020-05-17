@extends("layout")
@section("title","retrieve")
@section("css","retrieve")
@section("content")
    <div style="text-align: center; margin-top:35px;font-size: 60px;"><i class="fas fa-user"></i></div>
    <div class="content1">
        <div class="register">
            <form action="#" method="post">
                <div class="form-group">
                    <label>Enter email or phone number</label>
                    <input type="password" class="form-control"  required>
                </div>
                <button type="submit" class="btn btn-warning">submit</button>
            </form>


        </div>
    </div>
    @endsection
