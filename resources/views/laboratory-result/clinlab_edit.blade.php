@extends('layouts.default_2')
<link rel="stylesheet" href="{{ asset('css\labtest.css') }}">

@section('content')
  <main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">

          <div class="patient-profile">
            <div style="margin: 40px" class="prof-box">
              <div>
                <div class="avatar"></div>
              </div>
            </div>
          </div>
                      
          <div class="row my-4">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-body">
                  <div class="text-center"> <!-- Add text-center class to center align the table -->

                    <table class="table datatables" id="dataTable-1">
											<div class="col" style="margin-bottom: 20px;">
												<h2 class="h3 mb-0 page-title" style="font-size: 40px">Laboratory History</h2>
											</div>
											<thead>
												<tr>
													<th class="align-center">#</th>
													<th class="align-center">Code</th>
													<th class="align-center"><strong>Laboratory Test</strong></th>
													<th class="align-center"><strong>Test Date</strong></th>
													<th class="align-center"><strong>Action</strong></th>
												</tr>
											</thead>
											<tbody>
												@if($array_value['client'])
													@if ($array_value['client'][0]->patient_id > 0)
														@foreach ($array_value['client'] as $result)
														<tr>
															<td class="align-center">{{ $result->row_num; }}</td>
															<td class="align-center">{{ $result->test_code; }}</td>
															<td class="align-left">{{ $result->test_category_name; }}</td>
															<td class="align-center">{{ $result->laboratory_date; }}</td>
															<td class="align-center">
																@if ($array_value['client'][0]->test_count > 0)
																	<button type="button" class="btn mb-3 btn-primary view-laboratory-result" id="{{ $result->patient_test_id }},{{ $result->test_category_name }}"> View Result</button>
																	{{-- <button type="button" class="btn mb-3 btn-danger remove-laboratory-result" id="{{ $result->patient_test_id }}"> Delete</button> --}}
																	<td><a href = '/delete/{{ $result->patient_test_id }}' class="btn mb-3 btn-danger">Delete</a></td>
																@endif
															</td>
														</tr>
														@endforeach
														<tr>
															<td colspan="5" class="align-left">A total of {{ count($array_value['client']) }} laboratory result found.</td>
														</tr>
													@endif
												@endif
											</tbody>
										</table>

									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="ViewUrinalysisResultModal" tabindex="-1" role="dialog" aria-labelledby="ViewUrinalysisResultModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="ViewUrinalysisResultModalLabel">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<table class="table">
							<tbody>
								@if($array_value['test_type'])
									@if($array_value['test_type'][0]->test_type_id > 0)
										@foreach ($array_value['test_type'] as $test_type_lst)
											<tr>
												<th style="color:black;font-weight:bold">{{ $test_type_lst->test_type_label; }}</th>
											</tr>
											@if($array_value['test_cat'])
												@if($array_value['test_cat'][0]->test_id > 0)
													@foreach ($array_value['test_cat'] as $test_cat)
														@if($test_cat->test_type_id == $test_type_lst->test_type_id)
															<tr>
																<th scope="row">{{ $test_cat->test_label; }}</th>
																<td>:</td>
																<td><span class="{{ $test_cat->code; }}"></span></td>
															</tr>
														@endif
													@endforeach
												@endif
											@endif
										@endforeach
									@endif
								@endif
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnViewUrinalysisResultModalFormClose">Close</button>
						{{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="ViewFecalysisResultModal" tabindex="-1" role="dialog" aria-labelledby="ViewFecalysisResultModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="ViewFecalysisResultModalLabel">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<table class="table">
							<tbody>
								@if($array_value['fec_test_type'])
									@if($array_value['fec_test_type'][0]->test_type_id > 0)
										@foreach ($array_value['fec_test_type'] as $test_type_lst)
											<tr>
												<th style="color:black;font-weight:bold">{{ $test_type_lst->test_type_label; }}</th>
											</tr>
											@if($array_value['fec_test_cat'])
												@if($array_value['fec_test_cat'][0]->test_id > 0)
													@foreach ($array_value['fec_test_cat'] as $test_cat)
														@if($test_cat->test_type_id == $test_type_lst->test_type_id)
															<tr>
																<th scope="row">{{ $test_cat->test_label; }}</th>
																<td>:</td>
																<td><span class="{{ $test_cat->code; }}"></span></td>
															</tr>
														@endif
													@endforeach
												@endif
											@endif
										@endforeach
									@endif
								@endif
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnViewFecalysisResultModalFormClose">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="ViewHematologyResultModal" tabindex="-1" role="dialog" aria-labelledby="ViewHematologyResultModal" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="ViewHematologyResultModal">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<table class="table">
							<tbody>
								@if($array_value['hem_test_type'])
									@if($array_value['hem_test_type'][0]->test_type_id > 0)
										@foreach ($array_value['hem_test_type'] as $test_type_lst)
											<tr>
												<th style="color:black;font-weight:bold">{{ $test_type_lst->test_type_label; }}</th>
											</tr>
											@if($array_value['hem_test_cat'])
												@if($array_value['hem_test_cat'][0]->test_id > 0)
													@foreach ($array_value['hem_test_cat'] as $test_cat)
														@if($test_cat->test_type_id == $test_type_lst->test_type_id)
															<tr>
																<th scope="row">{{ $test_cat->test_label; }}</th>
																<td>:</td>
																<td><span class="{{ $test_cat->code; }}"></span></td>
															</tr>
														@endif
													@endforeach
												@endif
											@endif
										@endforeach
									@endif
								@endif
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnViewHematologyResultModalFormClose">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="ViewChemistryResultModal" tabindex="-1" role="dialog" aria-labelledby="ViewChemistryResultModal" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="ViewChemistryResultModal">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<table class="table">
							<tbody>
								@if($array_value['chem_test_type'])
									@if($array_value['chem_test_type'][0]->test_type_id > 0)
										@foreach ($array_value['chem_test_type'] as $test_type_lst)
											<tr>
												<th style="color:black;font-weight:bold">{{ $test_type_lst->test_type_label; }}</th>
											</tr>
											@if($array_value['chem_test_cat'])
												@if($array_value['chem_test_cat'][0]->test_id > 0)
													@foreach ($array_value['chem_test_cat'] as $test_cat)
														@if($test_cat->test_type_id == $test_type_lst->test_type_id)
															<tr>
																<th scope="row">{{ $test_cat->test_label; }}</th>
																<td>:</td>
																<td><span class="{{ $test_cat->code; }}"></span></td>
															</tr>
														@endif
													@endforeach
												@endif
											@endif
										@endforeach
									@endif
								@endif
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnViewChemistryResultModalFormClose">Close</button>
					</div>
				</div>
			</div>
		</div>
														
    </main>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script>
			$('.view-laboratory-result').click(function(){
				var unparsed_value = $(this).attr('id').split(',');
				var patient_test_id = unparsed_value[0];
				var test = unparsed_value[1];
				if(test == 'URINALYSIS'){
					$('#ViewUrinalysisResultModal').modal('show');
					$('#ViewUrinalysisResultModal').find('.modal-title').text('URINALYSIS SAMPLE RESULT');

					$.ajax({
						type: 'get',
						url: '/json_get_patient_test_by_id_sel',
						data: { patient_test_id: patient_test_id },
						success: function (data) {
							var json = $.parseJSON(data);
							$(json).each(function(i,val){
								$('#ViewUrinalysisResultModal').find('.' + val.code).text(val.test_result_value);
							});

						},
						error: function(jqXHR, textStatus, errorThrown){
							alert('Error: ' + textStatus + ' - ' + errorThrown);
						}
					});

				}
				else if(test == 'HEMATOLOGY'){
					$('#ViewHematologyResultModal').modal('show');
					$('#ViewHematologyResultModal').find('.modal-title').text('HEMATOLOGY SAMPLE RESULT');

					$.ajax({
						type: 'get',
						url: '/json_get_patient_test_by_id_sel',
						data: { patient_test_id: patient_test_id },
						success: function (data) {
							var json = $.parseJSON(data);
							$(json).each(function(i,val){
								$('#ViewHematologyResultModal').find('.' + val.code).text(val.test_result_value);
							});

						},
						error: function(jqXHR, textStatus, errorThrown){
							alert('Error: ' + textStatus + ' - ' + errorThrown);
						}
					});

				}
				else if(test == 'CLINICAL CHEMISTRY'){
					$('#ViewChemistryResultModal').modal('show');
					$('#ViewChemistryResultModal').find('.modal-title').text('CLINICAL CHEMISTRY SAMPLE RESULT');

					$.ajax({
						type: 'get',
						url: '/json_get_patient_test_by_id_sel',
						data: { patient_test_id: patient_test_id },
						success: function (data) {
							var json = $.parseJSON(data);
							$(json).each(function(i,val){
								$('#ViewChemistryResultModal').find('.' + val.code).text(val.test_result_value);
							});

						},
						error: function(jqXHR, textStatus, errorThrown){
							alert('Error: ' + textStatus + ' - ' + errorThrown);
						}
					});

				}
				else if(test == 'FECALYSIS'){

					$('#ViewFecalysisResultModal').modal('show');
					$('#ViewFecalysisResultModal').find('.modal-title').text('FECALYSIS SAMPLE RESULT');

					$.ajax({
						type: 'get',
						url: '/json_get_patient_test_by_id_sel',
						data: { patient_test_id: patient_test_id },
						success: function (data) {

							console.log(data);

							var json = $.parseJSON(data);
							$(json).each(function(i,val){
								$('#ViewFecalysisResultModal').find('.' + val.code).text(val.test_result_value);
							});

						},
						error: function(jqXHR, textStatus, errorThrown){
							alert('Error: ' + textStatus + ' - ' + errorThrown);
						}
					});

				}
			});

			$('.remove-laboratory-result').click(function(){
				var patient_test_id = $(this).attr('id');
				console.log(patient_test_id);

				$.ajax({
						type: 'get',
						url: '/remove_patient_test_by_id',
						data: { patient_test_id: patient_test_id },
						success: function (data) {
							var json = $.parseJSON(data);
							$(json).each(function(i,val){
								$('#ViewUrinalysisResultModal').find('.' + val.code).text(val.test_result_value);
							});

						},
						error: function(jqXHR, textStatus, errorThrown){
							alert('Error: ' + textStatus + ' - ' + errorThrown);
						}
					});
			});

			document.getElementById('yourBox').onchange = function() {
				document.getElementById('yourText').disabled = !this.checked;
			};
		</script>
  </body>
@endsection



