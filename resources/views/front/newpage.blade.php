<h4>New page</h4>

@foreach($payment_list as $payment)
	<h1>Order number : {{ $payment->order_number }}</h1>
@endforeach

<h1>New line</h1>