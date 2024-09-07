<div class="tab-pane text-muted active" id="general-setting-vertical" role="tabpanel">
    <form action="{{ route('admin.general-setting.update') }}" method="POST">
        @csrf
        @method("PUT")
        <div class="form-group mb-3">
            <label for="">Site Name</label>
            <input name="site_name" type="text" class="form-control"
                value="{{ config('settings.site_name') }}">
        </div>
        <div class="form-group mb-3">
            <label for="">Default Currency</label>
            <select name="site_default_currency" id="" class="js-example-basic-single">
                <option @selected(config('settings.site_default_currency') === 'usd') value="usd">USD</option>
                <option @selected(config('settings.site_default_currency') === 'vnd') value="vnd">VND</option>
            </select>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="">Currency Icon</label>
                    <input name="site_currency_icon" type="text" class="form-control"
                        value="{{ config('settings.site_currency_icon') }}" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="">Currency Icon Position</label>

                    <select name="site_currency_position" id="" class="js-example-basic-single">
                        <option @selected(config('settings.site_currency_position') === 'right') value="right">Right</option>
                        <option @selected(config('settings.site_currency_position') === 'left') value="left">Left</option>
                    </select>

                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-2">SAVE</button>
    </form>
</div>
