<div class="type_16">
	<div class="detail">
		<div class="type_16_make_reservation">
			<div style="" class="vc_row wpb_row vc_row-fluid">
				<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-sm-offset-3">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="wpb_text_column wpb_content_element  text-left">
								<div class="wpb_wrapper">
									<h2 style="text-align: center;">PRICES
										<div id="line"></div>
									</h2>
									<table class="table table-responsive">
										<tbody>
										@if(isset($price))
											@foreach($price as $value)
											<tr>
												<td class="text-left"><strong>{{ $value->price_title }}</strong></td>
												<td class="text-right">${{ $value->price_rate }}</td>
											</tr>
											@endforeach
										@endif
										</tbody>
									</table>
								</div>
							</div>
							<div class="text-center">
								<input type="button" class="btn btn-primary" name="Make Reservation" value="Make Reservation">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>