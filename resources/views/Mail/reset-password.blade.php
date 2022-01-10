

@component('mail::message')
    # Reset Password

    Reset or change your password.

    @component('mail::button', ['url' => 'http://127.0.0.1:8000/api/auth/change-password?token='.$token])
        Change Password
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent