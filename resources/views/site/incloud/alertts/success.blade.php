@if(Session::has('success'))
<div id="modal4" class="modal fade" role="dialog">
    <div class="log-in-pop" style="width: 45%">
        <div class="log-in-pop-left">
            <img src="images/alert/success.png" alt="" width="80%">

        </div>
        <div class="log-in-pop-right">
            <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
            </a>
            <h4> {{Session::get('success')}}</h4>
        </div>
    </div>
</div>
@endif
