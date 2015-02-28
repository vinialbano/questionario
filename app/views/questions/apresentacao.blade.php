<div class="container">
    <div class="col-md-8 col-md-offset-2">

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
            <button type="button" class="close modal-close" aria-hidden="true">×</button>
            <h4 class="modal-title">Imagine...</h4>
        </div>
        <div class="panel-body">
            <p>{{{ $texto }}}</p>
        </div>
        <div class="panel-footer">
            <button type="button" class="btn btn-success modal-close"><i class="fa fa-thumbs-up"></i> Entendi</button>
        </div>
    </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready( function(){
    $('.modal-close').on('click', function(e) {
        e.preventDefault();
        parent.$.magnificPopup.close();
    });
});
</script>
