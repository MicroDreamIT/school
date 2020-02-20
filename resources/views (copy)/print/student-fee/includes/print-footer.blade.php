
@if(isset($generalSetting->print_footer))
    <div class="text-center">
        <div class="space-6"></div>
        <div class="hr hr-2"></div>
        {!! $generalSetting->print_footer !!}
    </div>
@endif