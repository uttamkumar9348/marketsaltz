<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ translate('INVOICE') }}</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="UTF-8">
</head>
<style>
	body {
		font-family: '<?php echo  $font_family ?>';
	}

	.fnt {
		font-size: 50px !important;
	}

	#customers {
		margin-top: 40px;
		font-family: '<?php echo  $font_family ?>';
		border-collapse: '<?php echo  $text_align ?>';
		width: 80%;
	}

	#customers td,
	#customers th {
		border: 1px solid black;
		padding: 10px;
		text-align: '<?php echo  $text_align ?>';
		font-size: 15px;
	}

	#customers tr:nth-child(even) {
		background-color: #f2f2f2;
	}

	#customers th td {
		padding: 12px;
		text-align: '<?php echo  $text_align ?>';
		color: black;
	}
</style>

<body>
	<table align="">
		<tbody>
			<tr>
				<td>
					<table align="" border="0" cellpadding="0" cellspacing="0" width="900" bgcolor="white" style="margin-top: 7px; padding-bottom: 10px;">
						<tbody>
							<tr>
								<td align="" class="fnt">
									<table style="width:100%;">
										@php
										$logo = get_setting('header_logo');
										$shipping_address = json_decode($order->shipping_address);
										$billing_address = json_decode($order->billing_address);
										$ut_id = App\Models\state_code::where('state',$shipping_address->state)->first('ut_code');
										$utb_id = App\Models\state_code::where('state',$billing_address->state)->first('ut_code');
										@endphp
										<tr>
											<td style="background-color: white;border-radius: 20px;">
												<!-- <img src="logo.png" alt="" style="height: 123px;
																margin-top: inherit;
																margin-left: -148px;"> -->
												@if($logo != null)
												<img src="{{ uploaded_asset($logo) }}" alt="" style="height: 55px;margin-top: -40px;">
												@else
												<img src="{{ static_asset('assets/img/logo.png') }}" alt="" style="height: 55px;margin-top: -40px;">
												@endif
											</td>
											<td style="font-size: 25px;text-align:right;"><b>Tax Invoice /Bill of Supply / Cash Memo</b>
												<br>
												(Original for Recipient)
											</td>
										</tr>
									</table>
									<table style="width:100%; border-color: rgb(246, 243, 243);">
										<td align="left">
											<tr>
												<td align="left">
													<h3>
														<b>Sold By:</b>
													</h3>
													<address style="font-size: 20px;margin-top:-50px">
														<p>{{$seller->name}}</p>
														<p>{{$seller->address}},</p>
														<p>{{$seller->city}},</p>
														<p>{{$seller->state}},{{$seller->postal_code}},{{$seller->country}}</p>
													</address>
												</td>
											</tr>
										</td>
										<td>
											<table style="width:100%;border: rgb(255, 255, 255);
														margin-top: 35px;">
												<tr>
													<th align="right" style="font-size: 20px;text-align:right;">Billing Address:</th>
												</tr>
												<tr>
													<td align="right">
														<address style="font-size: 20px;text-align:right;">
															<p>{{ $billing_address->name }},</p>
															<p>{{ $billing_address->address }},</p>
															<p>{{ $billing_address->city}},</p>
															<p>{{ $billing_address->state}},{{ $billing_address->postal_code }},</p>
															<p>{{ $billing_address->country}}</p>
														</address>
													</td>
												</tr>
												<tr>
													<th align="right" style="font-size: 20px;">State/UT Code: <span style="font-weight: 100;">{{$utb_id->ut_code}}</span> </th>
												</tr>
											</table>
										</td>
									</table>
									<table style="width:100%; border-color: rgb(246, 243, 243);" align="">
										<td align="left">
											<tr>
												<th align="left" style="font-size: 20px;">PAN NO: 
													<span style="font-weight: 100;">
														@if ($shop != null)
														{{$user->pan_no}}
														@else
														{{$customer->pan_no}}
														@endif
													</span> 
												</th>
												<td></td>
											</tr>
											<tr>
												<th align="left" style="font-size: 20px;">GST Registration NO: <span style="font-weight: 100;">@if($shop != null){{$shop->gst_id}}@else{{$customer->gst_number}}@endif</span></th>
												<td></td>
											</tr>
											<tr>
												<th align="left" style="font-size: 20px;">Dynamic QR CODE:</th>
												<td></td>
											</tr>
											<tr>
											@php
												$removedXML = '<?xml version="1.0" encoding="UTF-8"?>';
												$order_status = $order->orderDetails->first();
											@endphp
												<th align="left">{!! str_replace($removedXML,"", QrCode::size(100)->generate('Order Id = '.$order->code.',Invoice NO = '.$order->invoice_number.',Delivery Status = '.$order_status->delivery_status.',Payment Status = '.$order_status->payment_status.',Total Amount = '.'Rs'.$order->grand_total)) !!}</th>
												<td></td>
											</tr>
										</td>
										<td>
											<table style="width:100%;border: rgb(255, 255, 255);
                                                        margin-top: -63px;">
												<tr>
													<th align="right" style="font-size: 20px;text-align:right;">Shipping Address:</th>
												</tr>
												<tr>
													<td align="right">
														<address style="font-size: 20px;text-align:right;">
															<p>{{ $shipping_address->name }},</p>
															<p>{{ $shipping_address->address }},</p>
															<!-- <p>{{ $shipping_address->city }},</p> -->
															<p>{{$shipping_address->state}},{{ $shipping_address->postal_code }},</p>
															<p>{{ $shipping_address->country }}</p>
														</address>
													</td>
												</tr>
												<tr>
													<th align="right" style="font-size: 20px;">State/UT Code: <span style="font-weight: 100;">{{$ut_id->ut_code}}</span> </th>
												</tr>
											</table>
										</td>
									</table>
									<table style="width:100%; border-color: rgb(246, 243, 243); margin-top: 30px;" align="">
										<td align="left">
											<tr>
												<th align="left" style="font-size: 20px;">Place of Supply: <span style="font-weight: 100;">{{$shipping_address->address}}</span></th>
												<!-- <th align="left" style="font-size: 20px;">Place of Supply: {{ get_setting('contact_address') }}</th> -->
												<td></td>
											</tr>
											<tr>
												<th align="left" style="font-size: 20px;">Order Number/ID: <span style="font-weight: 100;">{{ $order->code }}</span></th>
												<td></td>
											</tr>
											<tr>
												<th align="left" style="font-size: 20px;">Order Date: <span style="font-weight: 100;">{{ date('d-m-Y', $order->date) }}</span></th>
												<td></td>
											</tr>
										</td>
										<td align="right">
											<table align="right" style="
                                                        border: rgb(255, 255, 255);
                                                        margin-top: -85px; ">
												<tr>
													<th align="right" style="font-size: 20px;">Place of Delivery: <br><span style="font-weight: 100;">{{ $shipping_address->address }},<br> {{ $shipping_address->city }},<br> {{ $shipping_address->postal_code }},<br> {{ $shipping_address->country }}</span></th>
													<td></td>
												</tr>
												<tr>
													<th align="right" style="font-size: 20px;">Invoice NO: <span style="font-weight: 100;">{{$order->invoice_number}}</span></th>
													<td></td>
												</tr>
												<tr>
													<th align="right" style="font-size: 20px;">Invoice Date: <span style="font-weight: 100;">{{ date('d-m-Y', $order->date) }}</span></th>
													<td></td>
												</tr>
											</table>
										</td>
									</table>
									<table id="customers" style="width:100%;">
										<tr>
											<th>Sl no.</th>
											<th>Description</th>
											<th>HSN/SAC/CAS No.</th>
											<th>Unit price</th>
											<th>Qty/weight</th>
											<th>Net Amount</th>
											@if ($seller->state == $shipping_address->state)
											<th>Tax Rate(CGST)</th>
											<th>Tax Rate(SGST)</th>
											@else
											<th>Tax Rate</th>
											<th>Tax Type</th>
											@endif
											<th>Tax Amount</th>
											<th>Total Amount</th>
										</tr>
										</thead>
										<tbody>
											@foreach ($order->orderDetails as $key => $orderDetail)
											@if ($orderDetail->product != null)
											<tr>
												<td style="border:1px solid #000;padding:12px;">{{$key + 1}}</td>
												<td style="border:1px solid #000;padding:12px;">{{ $orderDetail->product->name }} @if($orderDetail->variation != null) ({{ $orderDetail->variation }}) @endif</td>
												@php
												    $cas = App\Models\Product::where('name',$orderDetail->product->name)->first();
												@endphp
												@if($cas->cas_no != null)
												    <td style="border:1px solid #000;padding:12px;">{{$cas->cas_no}}</td>
												@else
												    <td style="border:1px solid #000;padding:12px;">{{$cas->model_no}}</td>
												@endif
												<td style="border:1px solid #000;padding:12px;">{{ single_price($orderDetail->price/$orderDetail->quantity) }}</td>
												<td style="border:1px solid #000;padding:12px;">{{ $orderDetail->quantity }}</td>
												<td style="border:1px solid #000;padding:12px;">{{$orderDetail->price}}</td>
												@if ($seller->state == $shipping_address->state)
												<td style="border:1px solid #000;padding:12px;">{{ single_price($orderDetail->tax/2) }}</td>
												<td style="border:1px solid #000;padding:12px;">{{ single_price($orderDetail->tax/2) }}</td>
												@else
												<td style="border:1px solid #000;padding:12px;">{{ single_price($orderDetail->tax) }}</td>
												<td style="border:1px solid #000;padding:12px;">IGST</td>
												@endif
												<td style="border:1px solid #000;padding:12px;">{{ single_price($order->orderDetails->sum('tax')) }}</td>
												<td style="border:1px solid #000;padding:12px;">{{ single_price($order->grand_total) }}</td>
											</tr>
											@endif
											@endforeach
										</tbody>
										<tr>
											<th colspan="8" style="text-align: left;border:1px solid #000;padding:12px;font-size: 20px;">Total:</th>
											<th style="border:1px solid #000;padding:12px;">{{ single_price($order->orderDetails->sum('tax')) }}</th>
											<th style="border:1px solid #000;padding:12px;">{{ single_price($order->grand_total) }}</th>
										</tr>
										<tr>
											<th colspan="10" style="text-align: left; border:1px solid #000;padding:12px;font-size: 20px;">
											    @php
											        $rupee = explode('.',$order->grand_total);
											        $rupees = $digit->format($rupee[0]);
											        $poisa = $digit->format($rupee[1]);
											    @endphp
												<p>Amount in words: <span style="text-transform:capitalize">{{$rupees}} Rupees And {{$poisa}} Paise only</span></p>
											</th>
										</tr>
										<tr>
											<th colspan="10" style="text-align:right;border:1px solid #000;padding:12px;font-size: 20px;">
												<p>For {{$seller->name}}:</p>
												<!-- <p>Signature:</p> -->
												<p>Authorised Signature:</p>
											</th>
										</tr>
									</table>
									<table>
										<tr>
											<td style="font-size: 20px;text-align:left;">
												<p>Whether the Tax is payable Under Reverse Charge-NO</p>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>