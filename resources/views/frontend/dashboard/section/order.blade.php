<section id="orders" class="tab-content-profile">
    <h2>Lịch Sử Đơn Hàng</h2>
    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Date</th>
                <th>Status</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>#{{ $order->invoice_id }}</td>
                    <td>{{ $order->created_at->format('d/m/Y') }}</td>
                    <td>{{ $order->order_status }}</td>
                    <td>{{ currencyPosition($order->grandtotal) }}</td>
                    <td>
                        <a href="#" class="detail-custom-btn btn btn-primary">Chi tiết</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

<div class="modal fade" id="customOrderDetailModal" tabindex="-1" aria-labelledby="customOrderDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content custom-modal-content">
            <div class="modal-header custom-modal-header">
                <h5 class="modal-title custom-modal-title" id="customOrderDetailModalLabel">Thông Tin Đơn Hàng</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body custom-modal-body">
                <div id="orderDetailContent">
                    <!-- Order details will be dynamically inserted here -->
                </div>
            </div>
            <div class="modal-footer custom-modal-footer">
                <button type="button" class="btn btn-secondary" style="font-size:14px;" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
