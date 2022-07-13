<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <style>
    body{
	background-color: #ffffff;

}
.container{
	width: 600px;
	background-color: #fff;
	padding-top: 100px;
    padding-bottom: 100px;

}
.card{
	background-color: #fff;
	width: 300px;
	border-radius: 15px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.name{
	font-size: 15px;
	color: #403f3f;
	font-weight: bold;
}
.cross{
	font-size: 11px;
	color: #b0aeb7;
}
.pin{
	font-size: 14px;
	color: #b0aeb7;
}
.first{
	border-radius: 8px;
	border: 1.5px solid #78b9ff;
	color: #000;
	background-color: #eaf4ff;
}
.second{
	border-radius: 8px;
	border: 1px solid #acacb0;
	color: #000;
	background-color: #fff;
}
.dot{

}
.head{
	color: #137ff3;
	font-size: 12px;
}
.dollar{
	font-size: 18px;
	color: #097bf7;
}
.amount{
	color: #007bff;
	font-weight: bold;
	font-size: 18px;

}
.form-control{
	font-size: 18px;
	font-weight: bold;
	width: 60px;
	height: 28px;

}
.back{
	color: #aba4a4;
	font-size: 15px;
	line-height: 73px;
	font-weight: 400;
}
.button{
	width: 150px;
	height: 60px;
	border-radius: 8px;
	font-size: 17px;		
}
  </style>
  <body>
    <script src="https://www.paypal.com/sdk/js?client-id=ASk0MJWO0YMkrCRmajwNa77qzgpZ7DU8D1QqTieelSSAviyvhZS_8sJ3A-0b2l1xpLihA5Q7xQpOY64e"></script>
    <div class="container d-flex justify-content-center mt-5">
        <div class="card">
            
    
    
            <div>
                <div class="d-flex pt-3 pl-3">
                <div><img src="https://www.paypalobjects.com/webstatic/icon/pp258.png" width="60" height="100%" /></div>
                <div class="mt-3 pl-2"><span class="name">Martina Thomas</span><div><span class="cross">&#10005&#10005&#10005&#10005</span><span class="pin ml-2">8880</span></div></div>
                </div>
    
    
                <div class="py-2  px-3">
                    <div class="first pl-2 d-flex py-2">
                    <div class="form-check">
                    <input type="radio" name="optradio" class="form-check-input mt-3 dot" checked>
                    </div>
                    <div class="border-left pl-2"><span class="head">Total amount due</span><div><span class="dollar">$</span><span class="amount">300</span></div></div>
    
                     </div>
                </div>
    
    
                	
    
    
                    <div class="d-flex justify-content-between px-3 pt-4 pb-3">
                        <div><span class="back" style="cursor:pointer">Go back</span></div>
                        {{-- <button type="button"  class="btn btn-primary button">Pay amount</button> --}}
                        <div id="paypal-button-container"></div>
                    </div>
    
    
    
            </div>
        </div>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="{{asset('assets/dashboard_assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script>
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '77.44' // Can also reference a variable or function
              }
            }]
          });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            // console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            // alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');

          console.log('a');


            $.ajax({
                type:"post",
      url:"{{route('paymet.store')}}",
      cache: false,
      dataType: "json",
      processData: false,
      contentType: false, 
      success: (data)=>{
        console.log(data);
        Swal.fire({
              title: "gracia por tu compra"+'{{auth()->user()->nombre}}!',
              icon: 'success',
              confirmButtonText: 'continuar',
            }).then((result)=>{
  if(result.isConfirmed){
    window.location.href="/dashboard"
  }
})
      } 
                })
            
          });
        }
      }).render('#paypal-button-container');
    
    </script>  
</body>
</html>