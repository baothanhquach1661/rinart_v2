<div class="tab-pane text-muted" id="pusher-vertical" role="tabpanel">
    <form action="{{ route('admin.pusher-setting.update') }}" method="POST">
        @csrf
        @method("PUT")
        <div class="form-group mb-3">
            <label for="">App Id</label>
            <input name="pusher_app_id" type="text" class="form-control"
                value="{{ config('settings.pusher_app_id') }}">
        </div>
        <div class="form-group mb-3">
            <label for="">Key</label>
            <input name="pusher_key" type="text" class="form-control"
                value="{{ config('settings.pusher_key') }}">
        </div>
        <div class="form-group mb-3">
            <label for="">Secret</label>
            <input name="pusher_secret" type="text" class="form-control"
                value="{{ config('settings.pusher_secret') }}">
        </div>
        <div class="form-group mb-3">
            <label for="">Cluster</label>
            <input name="pusher_cluster" type="text" class="form-control"
                value="{{ config('settings.pusher_cluster') }}">
        </div>

        <button type="submit" class="btn btn-primary mt-2">SAVE</button>
    </form>
</div>
