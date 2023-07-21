<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=”robots” content=”noindex”>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | CAR</title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/coreui.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/flick/jquery-ui.css" />
    <link rel="stylesheet" href="{{ asset('assets/admin/css/import.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
</head>
<body>

<div id="wrapper" class="pt-md-5">

    <div class="content">

        <div class="card mx-auto col-lg-6 col-md-8 mt-md-3">
            <div class="card-body pt-5">
                <div class="mb-3 text-center">
                    <img src="{{ asset('assets/admin/img/logo.png') }}" class="mx-auto">
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.login_request') }}" method="post" id="login_form">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control form-control-lg" placeholder="Email" />
                    </div>
                    <div class="form-group" style="position: relative;">
                        <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password" />
                        <span style="position:absolute;top:50%;right: 10px;transform: translateY(-50%);cursor: pointer" class="toggle-pass fa fa-eye-slash"></span>
                    </div>
                    <button class="btn btn-warning btn-block btn-lg" type="submit"><i class="fas fa-sign-in-alt"></i> Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    $(function() {
        $('.toggle-pass').on('click', function() {
            $(this).toggleClass('fa-eye fa-eye-slash');
            let input = $(this).prev('input');
            if (input.attr('type') === 'text') {
                input.attr('type','password');
            } else {
                input.attr('type','text');
            }
        });
    });
</script>
</body>
</html>
