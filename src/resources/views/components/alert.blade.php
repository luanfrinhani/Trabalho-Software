<div id="alert-message" class="alert alert-{{$type}} alert-bold fade show" role="alert">
    <div class="alert-icon">
        @if($type == "danger")
            <i class="fa fa-exclamation-circle"></i>
        @elseif($type == "warning")
            <i class="fa fa-exclamation-circle"></i>
        @elseif($type == "info")
            <i class="fa fa-info-circle"></i>
        @else
            <i class="fa fa-check-circle"></i>
        @endif
    </div>
    <div class="alert-text">
        {{ $message }}
    </div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="la la-close"></i></span>
        </button>
    </div>
</div>

<script>
    @if($type == "success" || $type == "warning")
    setInterval(function () {
        $("#alert-message").fadeOut(function(){$("#alert-message").remove();});
    }, 5000);
    @endif
</script>
