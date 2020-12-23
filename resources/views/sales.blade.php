<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sold Products</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/products-main.css">
<!--===============================================================================================-->
</head>
<body>
    @inject('sales', 'App\Http\Controllers\SalesController')
    @extends('layouts.app')
    @section('content')
	<div class="limiter">
		<div class=""  style="margin:50px">
            <h1 style="color:teal">Sold Products</h1>

			<div class="wrap-table100">
                <a href="/addsales"  style=" margin-left:95%" class="rounded-circle">
                    <button class=" btn btn-primary" style="font-size:20px">+</button></a>
            <br> <br>
                	<div class="table100 ver1 m-b-110">
					<div class="table100-head">

						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Product Name</th>
									<th class="cell100 column2">Volume</th>
									<th class="cell100 column3">Packet</th>
                                    <th class="cell100 column4">Price</th>
									<th class="cell100 column5">Date</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
                                @foreach ($sales->getSales() as $sale)
								<tr class="row100 body">
                                        <td class="cell100 column1"> {{$sale->name}} </td>
                                        <td class="cell100 column2"> {{$sale->volume}} Liter </td>
                                        <td class="cell100 column3"> {{$sale->packet}} packet  </td>
                                        <td class="cell100 column4"> {{$sale->total}} Birr </td>
                                        <td class="cell100 column5"> {{$sale->created_at->format('Y-M-d')}} </td>

								</tr>
                                @endforeach
							</tbody>
						</table>
					</div>
				</div>


                @endsection
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});


	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
