paypal.Button.render({

           env: 'sandbox', // Or 'sandbox',

           commit: true, // Show a 'Pay Now' button

           style: {
               color: 'gold',
               size: 'small'
           },
           client: {
              sandbox: 'AVg2hAEzHFXanYRm5WZHBQglCs2-IJvzwEM3SwT_7x5Oxi_WLO-X6_kFygmaMQsyuPFtStd6M0XdSXbZ'
            },

           payment: function(data, actions) {
             return actions.payment.create({
               payment: {
                 transactions: [
                   {
                  amount: { total: '800.00', currency: 'MXN' }
                    }
                  ]
                }
              });
           },

           onAuthorize: function(data, actions) {
             return actions.payment.execute().then(function() {
                  window.alert('Pago Completado');


              });
           },

          //  onCancel: function(data, actions) {
          //      /*
          //       * Buyer cancelled the payment
          //       */
          //  },
           //
          //  onError: function(err) {
          //      /*
          //       * An error occurred during the transaction
          //       */
          //  }

       }, '#paypal-button');
