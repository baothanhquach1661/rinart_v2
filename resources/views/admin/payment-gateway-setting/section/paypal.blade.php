<div class="tab-pane text-muted active" id="paypal-setting-vertical" role="tabpanel">
    <form action="{{ route('admin.payment-gateway-setting.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="form-group mb-3">
            <label for="">Paypal Status</label>
            <select name="paypal_status" id="" class="js-example-basic-single">
                <option @selected(@$paymentGateWaySetting['paypal_status'] === 'active') value="active">Active</option>
                <option @selected(@$paymentGateWaySetting['paypal_status'] === 'inactive') value="inactive">Inactive</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="">Paypal Account Mode</label>
            <select name="paypal_account_mode" id="" class="js-example-basic-single">
                <option @selected(@$paymentGateWaySetting['paypal_account_mode']=== 'sandbox') value="sandbox">Sandbox (Admin)</option>
                <option @selected(@$paymentGateWaySetting['paypal_account_mode'] === 'live') value="live">Live</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="">Paypal Country</label>
            <select name="paypal_country" id="" class="js-example-basic-single">
                <option value="">Select</option>
                @foreach (config('country_list') as $key => $country)
                    <option @selected(@$paymentGateWaySetting['paypal_country'] === $key) value="{{ $key }}">{{ $country }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="">Paypal Currency</label>
            <select name="paypal_currency" id="" class="js-example-basic-single">
                <option @selected(@$paymentGateWaySetting['paypal_currency'] === 'USD') value="USD">USD</option>
                <option @selected(@$paymentGateWaySetting['paypal_currency'] === 'VND') value="VND">VND</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="">Currency Rate (Per USD)</label>
            <input name="paypal_currency_rate" type="text" class="form-control" value="{{ @$paymentGateWaySetting['paypal_currency_rate'] }}">
        </div>

        <div class="form-group mb-3">
            <label for="">Paypal Client Id</label>
            <input name="paypal_api_key" type="text" class="form-control" value="{{ @$paymentGateWaySetting['paypal_api_key'] }}">
        </div>

        <div class="form-group mb-3">
            <label for="">Paypal Secret Key</label>
            <input name="paypal_secret_key" type="text" class="form-control" value="{{ @$paymentGateWaySetting['paypal_secret_key'] }}">
        </div>

        <div class="form-group mb-3">
            <label for="">Paypal App Id</label>
            <input name="paypal_app_id" type="text" class="form-control" value="{{ @$paymentGateWaySetting['paypal_app_id'] }}">
        </div>

        <div class="form-group mb-3">
            <label class="form-label">Paypal Logo</label>
            <input type="file" class="form-control" name="paypal_logo" id="image_input">
            <img id="image" src="{{ asset(@$paymentGateWaySetting['paypal_logo']) }}" alt="paypal-logo" style="height: 200px; max-width: 100%;">
            <div id="image_preview" class="mt-3">
                <img id="image" alt="Image Preview" style="height: 200px; max-width: 100%; display: none;">
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-2">SAVE</button>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('image_input').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.getElementById('image');
                    img.src = e.target.result;
                    img.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                const img = document.getElementById('image');
                img.src = '';
                img.style.display = 'none';
            }
        });
    });
</script>
