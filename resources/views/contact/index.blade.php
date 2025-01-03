<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>

<body>
    <h2>Assalamu Alaikum, We are always ready to hear from you!</h2>

    <p>Please contact us at</p>
    <ul>
    @foreach ($all_emails as $country => $email)
        <li><a href="mailto:{{ $email }}">{{ $country }}</a></li>
    @endforeach
    </ul>

    <p>We are available in:</p>
    <ul>
        @for ($i = 0; $i < count($available_countries); $i++)
         <li>{{ $available_countries[$i] }}</li>
        @endfor

       

    </ul>

    @if (Str::lower($country) == 'bangladesh')
        <p>You can direct call to: +8801723112233</p>
    @else
        <p>Your current location is: {{ Str::upper($country) }}</p>
        <p>Sorry! We have not contact number for your location! Email us.</p>
    @endif
</body>
</html>