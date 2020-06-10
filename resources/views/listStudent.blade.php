<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V04</title>
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
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">STT</th>
									<th class="cell100 column2">Họ tên</th>
									<th class="cell100 column3">Điểm Toán</th>
									<th class="cell100 column4">Điểm Lý</th>
                  <th class="cell100 column5">Điểm Hóa</th>
                  <th class="cell100 column6">Xóa</th>
									<th class="cell100 column6">Sửa</th>

								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
                <?php $stt=0 ?>
                @foreach ($student as $item)
                <?php $stt++ ?>
                <tr class="row100 body">
									<td class="cell100 column1">{{ $stt }}</td>
									<td class="cell100 column2">{{ $item->hoten }}</td>
									<td class="cell100 column3">{{ $item->toan }}</td>
									<td class="cell100 column4">{{ $item->ly }}</td>
                  <td class="cell100 column5">{{ $item->hoa }}</td>
                  <td class="cell100 column6">
                    {!! Form::open(['route'=>['student.destroy',$item->id],'method'=>'DELETE','id'=>'delete']) !!}
                    <button  type="submit">Xóa</button>
                    {!! Form::close() !!}
                  </td>
									<td class="cell100 column6">
                    {!! Form::open(['route'=>['student.edit',$item->id],'method'=>'GET']) !!}
                    <button type="submit">Sửa</button>
                    {!! Form::close() !!}
                  </td>

								</tr>
                @endforeach							
							</tbody>
						</table>
					</div>
				</div>
				
				
			</div>
		</div>
	</div>


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
		$('#delete').submit(function (e) { 
      e.preventDefault();
      const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel!',
      reverseButtons: true
    }).then((result) => {
      if (result.value) {
        swalWithBootstrapButtons.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
        $('#delete').unbind('submit').submit();
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          'Cancelled',
          'Your imaginary file is safe',
          'error'
        )
      }
    })
		
	});	
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</body>
</html>