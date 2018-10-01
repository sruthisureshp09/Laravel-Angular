<!DOCTYPE html>

<html>

<head>

	<title>ListingHub</title>

</head>

<body>

	<h1>Booking Mail from ListingHub.com</h1>
	<h2>Booking Details</h2>
	<p><b>Name :</b> {{ $mailcontent->firstname}} {{$mailcontent->lastname}} </p>
	<p><b>Email :</b> {{$mailcontent->email}} </p>
	<p><b>Phone :</b> {{$mailcontent->phone1}} <br>{{$mailcontent->phone2}} </p>
	<p><b>Address :</b> {{$mailcontent->add1}}  <br>
	{{$mailcontent->add2}} {{$mailcontent->city}}, {{$mailcontent->state}}, {{$mailcontent->country}}, {{$mailcontent->zip}}  </p>
	<p><b>Booking Date :</b> {{$mailcontent->sdate}} - {{$mailcontent->edate}} </p>
</body>


</html>