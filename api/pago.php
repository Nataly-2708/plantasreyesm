<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> PayPal Checkout Integration | Server Demo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/pago_boton.css">
</head>

<body>
    <div class="col-4 align-middle" id="botonPago">
        <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>
    </div>
    

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=AUuKxdTSC8x--Xy4GF9QQPiBHU1CPVSDhL8WeNTgUOWZChIj9aEzGvHLQMjafU9EOmghcMALk_dKKbo3&currency=MXN"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({
                style:{
                    color: 'blue',
                    shape: 'pill',
                    lable: 'pay'
                },
                CreateOrder: function(date, actions){
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: 1000
                            }
                        }]
                    })
                }, 
                onApprove: function(date, action){
                    actions.order.capture().then(function (detalles){
                        console.log(detalles)
                    });
                },

                onCancel: function(data){
                    alert("Pago cancelado");
                    console.log(data);
                }


            // // Call your server to set up the transaction
            // createOrder: function(data, actions) {
            //     return fetch('/demo/checkout/api/paypal/order/create/', {
            //         method: 'post'
            //     }).then(function(res) {
            //         return res.json();
            //     }).then(function(orderData) {
            //         return orderData.id;
            //     });
            // },

            // // Call your server to finalize the transaction
            // onApprove: function(data, actions) {
            //     return fetch('/demo/checkout/api/paypal/order/' + data.orderID + '/capture/', {
            //         method: 'post'
            //     }).then(function(res) {
            //         return res.json();
            //     }).then(function(orderData) {
            //         // Three cases to handle:
            //         //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
            //         //   (2) Other non-recoverable errors -> Show a failure message
            //         //   (3) Successful transaction -> Show confirmation or thank you

            //         // This example reads a v2/checkout/orders capture response, propagated from the server
            //         // You could use a different API or structure for your 'orderData'
            //         var errorDetail = Array.isArray(orderData.details) && orderData.details[0];

            //         if (errorDetail && errorDetail.issue === 'INSTRUMENT_DECLINED') {
            //             return actions.restart(); // Recoverable state, per:
            //             // https://developer.paypal.com/docs/checkout/integration-features/funding-failure/
            //         }

            //         if (errorDetail) {
            //             var msg = 'Sorry, your transaction could not be processed.';
            //             if (errorDetail.description) msg += '\n\n' + errorDetail.description;
            //             if (orderData.debug_id) msg += ' (' + orderData.debug_id + ')';
            //             return alert(msg); // Show a failure message (try to avoid alerts in production environments)
            //         }

            //         // Successful capture! For demo purposes:
            //         console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            //         var transaction = orderData.purchase_units[0].payments.captures[0];
            //         alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

            //         // Replace the above to show a success message within this page, e.g.
            //         // const element = document.getElementById('paypal-button-container');
            //         // element.innerHTML = '';
            //         // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            //         // Or go to another URL:  actions.redirect('thank_you.php');
            //     });
            // }

        }).render('#paypal-button-container');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="/js/UserStatus.js"></script>
</body>

</html>
    