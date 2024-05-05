<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Make Payment</div>

                <div class="card-body">
                    <form action="{{ route('payment.create') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="amount">Amount (USD)</label>
                            <input type="number" id="amount" name="amount" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Pay Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
