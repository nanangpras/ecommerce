@extends('admin.layouts.layout-dashboard')
@section('content')


<!-- Page-header end -->

<div class="page-info">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Apps</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    {{-- <div class="page-options">
        <a href="#" class="btn btn-secondary">Settings</a>
        <a href="#" class="btn btn-primary">Upgrade</a>
    </div> --}}
</div>
<div class="main-wrapper">
    <h6>Detail Transaksi</h6>
    <p>Silahkan lakukan pembayaran</p>
    <button type="button" id="pay-button" class="btn btn-success">Bayar</button>
</div>
<form action="{{route('post.callback')}}" id="submit_form" method="POST">
    @csrf
    <input type="hidden" name="json" id="json_callback">
</form>




@endsection
@push('after-scripts')
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
</script>
<script>
    const payButton = document.querySelector('#pay-button');
    payButton.addEventListener('click', function(e) {
        e.preventDefault();
        snap.pay('{{ $detail->payment_token }}', {
            // Optional
            onSuccess: function(result) {
                /* You may add your own js here, this is just example */
                // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                console.log(result)
                send_response_to_form(result);
            },
            // Optional
            onPending: function(result) {
                /* You may add your own js here, this is just example */
                // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                console.log(result)
                send_response_to_form(result);
            },
            // Optional
            onError: function(result) {
                /* You may add your own js here, this is just example */
                // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                console.log(result)
                send_response_to_form(result);
            }
        });
    });
    function send_response_to_form (result) {
        document.getElementById('json_callback').value = JSON.stringify(result);
        $('#submit_form').submit();
     }
</script>
@endpush

