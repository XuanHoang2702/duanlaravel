<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="../css/login.css" />

</head>

<body>

    <div class="signup">
        <div class="message text-center">
            @if (session('message'))
                <h4 class="aler alert-danger pt-3 pb-3">
                    <strong>{{ session('message') }}</strong>
                </h4>
            @endif
        </div>

        <h1 class="signup-heading">Sign up</h1>
        <button class="signup-social">
            <i class="fa fa-google signup-social-icon"></i>
            <span class="signup-social-text">Sign up with Google</span>
        </button>
        <div class="signup-or"><span>Or</span></div>
        <form action="{{ route('register.post') }}" method="POST" enctype="multipart/form-data" class="signup-form"
            autocomplete="on">
            @csrf
            <div class="name">
                <label for="" class="signup-label">Full name</label>
                <input type="text" class="signup-input" name="name" placeholder="Eg: John Doe">
                @if ($errors->has('name'))
                    <span class="text-danger fs-3">
                        {{ $errors->first('name') }}
                    </span>
                @endif
            </div>
            <div class="email">
                <label for="" class="signup-label">Email</label>
                <input type="email" class="signup-input" name="email" placeholder="Eg: johndoe@gmai.com">
                @if ($errors->has('email'))
                    <span class="text-danger fs-3">
                        {{ $errors->first('email') }}
                    </span>
                @endif
            </div>
            <div class="avata">
                <label for="" class="signup-label">Avata</label>
                <input type="file" class="signup-input" name="avatar">
                @if ($errors->has('avatar'))
                    <span class="text-danger fs-3">
                        {{ $errors->first('avatar') }}
                    </span>
                @endif
            </div>
            <div class="password">
                <label for="" class="signup-label">Password</label>
                <input type="password" class="signup-input" name="password" placeholder="Password: ">
                @if ($errors->has('password'))
                    <span class="text-danger fs-3">
                        {{ $errors->first('password') }}
                    </span>
                @endif
            </div>
            <div class="confirm-password">
                <label for="" class="signup-label">Re-enter new password</label>
                <input type="password" class="signup-input" name="password_confirmation"
                    placeholder="Re-enter new password: ">
                @if ($errors->has('password_confirmation'))
                    <span class="text-danger fs-3">
                        {{ $errors->first('password_confirmation') }}
                    </span>
                @endif
            </div>
            <input type="hidden" value="1" name="level">
            <button type="submit " class="signup-submit">Sign up</button>
        </form>
        <p class="signup-already">
            <span>Already have an account ?</span>
            <a href="{{ route('login.show') }}" class="signup-login-link">Login</a>
        </p>
    </div>3
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="shaKKKKKKKKK5584-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
