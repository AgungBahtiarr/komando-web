<!DOCTYPE html>
<html lang="en" data-theme="bumblebee">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div class="min-h-screen bg-base-100 flex items-center">
        <div class="card mx-auto w-full max-w-md shadow-xl border-2">
            <div class="card-body">
                <h1 class="text-center font-bold text-2xl">Komando</h1>
                <h2 class="card-title text-center mx-auto">Login</h2>

                @if ($errors->any())
                    <div class="alert alert-error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">NIP / NRP</span>
                        </label>
                        <input type="text" id="login" name="login" value="{{ old('login') }}" placeholder="nip/nrp" class="input input-bordered" minlength="6" maxlength="18"
                            required />
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" name="password" placeholder="password" class="input input-bordered"
                            required />
                        <label class="label">
                            <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
                        </label>
                    </div>

                    <div class="form-control mt-6">
                        <button class="btn btn-primary">Login</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>
