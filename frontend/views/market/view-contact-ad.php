<?php
/* @var $this yii\web\View */

?>
<h3>Kontakt annoncør</h3>
<div class="row">
    <form class="form-horizontal col-sm-11">
        <div class="form-group">
            <label class="col-sm-3 control-label" for="Email">Din e-mail</label>
            <div class="col-sm-9">
                <input type="email" id="Email" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="message">Din besked:</label>
            <div class="col-sm-9">
                <textarea class="form-control" rows="3" cols="25" class="message"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-10">
                <button class="btn btn-primary" type="submit">Send besked</button>
            </div>
        </div>
    </form>
</div>