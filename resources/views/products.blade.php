<!DOCTYPE html>
<html lang="en">
<head>
	<title>Products</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
</head>
<body>
    @extends('layouts.app')
    @section('content')
    @inject('product', 'App\Http\Controllers\ProductController')

	<div class="limiter">
		<div class=""  style="margin:50px">
            <h1 style="color:teal">Products</h1>

			<div class="wrap-table100">
                <a href="/addproduct"  style=" margin-left:95%" class="rounded-circle">
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
									<th class="cell100 column4">Quantity</th>
									<th class="cell100 column5">Date</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
                                @foreach ($product->getProducts() as $product)
								<tr class="row100 body">
                                        <td class="cell100 column1"> {{$product->name}} </td>
                                        <td class="cell100 column2"> {{$product->volume}} Liter </td>
                                        <td class="cell100 column3"> {{$product->packet}} packet  </td>
                                        <td class="cell100 column4"> {{$product->quantity}} bottel/packet </td>
                                        <td class="cell100 column5"> {{$product->created_at->format('Y-M-d')}} </td>

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
