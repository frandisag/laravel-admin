<div class="box-footer">

    {{ csrf_field() }}

    <div class="col-md-{{$width['label']}}">
    </div>

    <div class="col-md-{{$width['field']}}">

        @if(in_array('submit', $buttons))
            <div class="btn-group pull-right">
                <button type="submit" class="btn btn-primary">{{ trans('admin.submit') }}</button>
            </div>

            @if(in_array('continue_editing', $checkboxes))
            <label class="pull-right" style="margin: 5px 10px 0 0;">
                <input type="checkbox" class="after-submit" name="after-save" value="1"> {{ trans('admin.continue_editing') }}
            </label>
            @endif

            @if(in_array('view', $checkboxes))
            <label class="pull-right" style="margin: 5px 10px 0 0;">
                <input type="checkbox" class="after-submit" name="after-save" value="2"> {{ trans('admin.view') }}
            </label>
            @endif

            @if(in_array('notification', $checkboxes))
            <label class="pull-right" style="margin: 5px 10px 0 0;">
                <input type="checkbox" class="notif" name="notification" value="true" checked="true"> Notification
            </label>
            @endif

            @if(in_array('continue', $checkboxes))
            <label class="pull-right" style="margin: 5px 10px 0 0;">
                <input type="checkbox" class="notif" name="continue" value="true"> Continue
            </label>
            @endif

            @if(in_array('repeat', $checkboxes))
            <label class="pull-right" style="margin: 5px 10px 0 0;">
                <input type="checkbox" class="notif" name="repeat" value="true"> Repeat Order
            </label>
            @endif
        @endif

        @if(in_array('reset', $buttons))
        <div class="btn-group pull-left">
            <button type="reset" class="btn btn-warning">{{ trans('admin.reset') }}</button>
        </div>
        @endif
    </div>
</div>
