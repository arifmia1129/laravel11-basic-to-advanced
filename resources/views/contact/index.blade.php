<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>

@php
    $country = 'India';
@endphp

<body>
    <h2>Assalamu Alaikum, We are always ready to hear from you!</h2>

    <p>Please contact us at <a href="mailto:contact@example.com">contact@example.com</a></p>

    @if ($country == 'Bangladesh')
        <p>You can direct call to: +8801723112233</p>
    @else
        <p>Your current location is: {{ $country }}</p>
        <p>Sorry! We have not contact number for your location! Email us.</p>
    @endif
</body>
</html>