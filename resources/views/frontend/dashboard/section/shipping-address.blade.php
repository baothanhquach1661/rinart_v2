<section id="shipping-address" class="tab-content-profile">
    <form method="POST" action="{{ route('user-shipping-address.update') }}">
        @csrf
        <h3 class="address-title">Thông Tin Liên Hệ</h3>
        <label for="name">Họ Tên</label>
        <input type="text" id="name" name="full_name"
            value="{{ @$user_shipping_address->user_id != 0 ? $user_shipping_address->full_name : auth()->user()->name }}">

        <label for="email">Email</label>
        <input type="email" id="email" name="email"
            value="{{ @$user_shipping_address->user_id != 0 ? $user_shipping_address->email : auth()->user()->email }}">

        <label for="phone">Số Điện Thoại</label>
        <input type="tel" id="phone" name="phone"
            value="{{ @$user_shipping_address->user_id != 0 ? $user_shipping_address->phone : auth()->user()->phone }}">

        <h3 class="address-title">Thông Tin Giao Hàng</h3>
        <label for="name">Khu Vực</label>
        <select name="delivery_area" id="">
            @foreach ($delivery_areas as $area)
                <option @selected(@$user_shipping_address->delivery_area_id == $area->id) value="{{ $area->id }}">
                    {{ $area->area_name }}
                </option>
            @endforeach
        </select>

        <label for="phone">Chi Tiết Địa Chỉ</label>
        <textarea name="address">{{ @$user_shipping_address->address }}</textarea>

        <button type="submit">SAVE</button>
    </form>
</section>
