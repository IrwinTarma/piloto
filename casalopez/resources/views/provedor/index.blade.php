@extends('layouts.app')

@section('content')

	 <!--this was made my Agil Asadi. You are free to delete this comment line and use it as you wish-->   

<div class="row col-md-8 col-md-offset-2 registeration">
    
<div class="registerInner">
        <div class="col-md-12 signUp">
            <h3 class="headerSign">Sign Up</h3>
            <form action="" method="post">


                <div class="form-group">
                    <input class="form-control" type="text" name="name" id="name" placeholder="NAME">
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" name="surname" id="surname" placeholder="SURNAME">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="email" id="email" placeholder="YOUR EMAIL">
                </div>

                <div class="form-group ">
                    <input class="form-control" type="password" name="password" id="password" value="" placeholder="PASSWORD">
                </div>
                <div class="form-group">
                    <label for="birthday" class="darktext">Birthday</label>
                    <input class="form-control" type="date" name="birthday" id="birthday" value="">
                </div>

                <button type="submit" class=" signbuttons btn btn-primary">Sign Up</button>

            </form>
        </div>
             
</div>
        
</div>

@endsection