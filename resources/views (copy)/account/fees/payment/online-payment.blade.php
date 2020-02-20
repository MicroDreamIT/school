@php($manageSettingStatus = collect(array_pluck($paymentGatewayStatus,'status','identity')))
@php($manageSetting = array_pluck($paymentGatewayStatus,'config','identity'))
{{--Stripe--}}
@if($manageSettingStatus['Stripe'] == 'active')
    @php($stripe = json_decode($manageSetting['Stripe'],true))
    @include('account.fees.payment.stripe')
@endif

@if($manageSettingStatus['Instamojo'] == 'active')
    @php($stripe = json_decode($manageSetting['Instamojo'],true))
    @include('account.fees.payment.instamojo')
@endif

@if($manageSettingStatus['PayUMoney'] == 'active')
    @php($stripe = json_decode($manageSetting['PayUMoney'],true))
    @include('account.fees.payment.payumoney.payumoney')
@endif

{{--@include('account.fees.payment.stripe')
@include('account.fees.payment.rozorpay.rozorpay')--}}
{{--
@include('account.fees.payment.pesapal.pesapal')
@include('account.fees.payment.khalti')--}}
