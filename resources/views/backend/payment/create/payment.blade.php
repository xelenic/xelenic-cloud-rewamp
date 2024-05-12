<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Rate
            </div>
            <div class="card-body">
                <h5 style="font-size: 13px;background: #e7e7e7;padding: 10px;border-radius: 4px;">1 Xelenic Credit = 1 USD</h5>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Current Credit Balance (Xelenic Credit)
            </div>
            <div class="card-body">
                <h2>{{number_format(getCreditBalance(), 2)}}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Maxium Payment Amount
            </div>
            <div class="card-body">
                <h2>100.00</h2>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Payment Confirmation</div>
                    <div class="card-body">
                        <form action="{{route('payment.create')}}" method="post">
                            {{csrf_field()}}
                            <div style="background-color: #ebebeb; padding: 10px;margin-bottom: 20px;">Create a currency converter HTML page, you can use HTML for the structure, CSS for styling, and JavaScript for the conversion logic. Here's a basic example to get you started</div>
                            <div class="form-group">
                                <label>Amount (USD)</label>
                                <input id="p_price_input" type="number" name="amount" value="0.00" class="form-control" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Top up Credit Balance</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <small>Purchase Credit (USD)</small>
                                <h1 id="p_priced">0.00</h1>
                            </div>
                            <div class="col-md-6">
                                <small>Purchase Credit (Xelenic Credit)</small>
                                <h1 id="pc_price">0.00</h1>
                            </div>

                        </div>

                        <div class="card" style="border-style: solid">
                            <div style="background: url('{{url('home_page/img/banners/package_ads.png')}}');height: 160px;background-size: contain;background-repeat: no-repeat;background-position: center;"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    var p_price_input = document.getElementById('p_price_input');
    var p_price = document.getElementById('p_price');
    var pc_price = document.getElementById('pc_price');
    var p_priced = document.getElementById('p_priced');
    var presentage = 0;
    var inputvalue = 0;

    p_price_input.addEventListener('input', function () {
        inputvalue = p_price_input.value;
        // 10% discount

        // p_price.textContent = inputvalue.toFixed(2);
        presentage = (p_price_input.value / 100) * 10;

       pc_price.textContent = (p_price_input.value - presentage).toFixed(2);
        p_priced.textContent = inputvalue;

    });
</script>
