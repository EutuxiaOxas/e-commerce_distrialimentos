<div class="hideForm" id="formPaymentToFinish">
  <div class="formPayment__headerMain">
    <div class="formPayment__headerLeft">
      <h5 class="formPayment__headerMain-title" id="paymentForm__title">Zelle</h5>
      <p class="formPayment__headerMain-description" id="paymentForm__description">Transferencia en Dolares</p>
    </div>
    <div class="formPayment__headerRight">
      <h5 class="formPayment__headerMain-title price" id="paymentForm__totalAmount">20000.00 $</h5>
      <p class="formPayment__headerMain-description price" id="paymentForm__amountDescription">Monto a transferir</p>
    </div>
  </div>

  <div class="alert formPayment__alertInformation" role="alert">
      <div id="formPayment__alertInformationContainer">
        <div class="formPayment__alertInformation-actionContainer">
          <p class="formPayment__alertInformation-paymentData">Transferir a: </p>
        </div>

        <div>
          <p class="formPayment__alertInformation-paymentData"><span>Correo zelle:</span> admin@admin.com</p>
          <p class="formPayment__alertInformation-paymentData"><span>Titular:</span> Administrador </p>
        </div>
      </div>
  </div>

  <div class="formPayment__paymentInfomation">
    <form action="">
      @csrf
      <div class="login__inputContainer">
        <input type="text" class="login__inputContainer-input" name="titular_cuenta" placeholder="Titular de cuenta" autocomplete="off">
      </div>

      <div class="login__inputContainer">
        <input type="text" class="login__inputContainer-input" name="documento_identidad_titular" placeholder="Documento identidad titular" autocomplete="off">
      </div>

      <div class="login__inputContainer">
        <input type="text" class="login__inputContainer-input" name="referencia" placeholder="Referencia" autocomplete="off">
      </div>

      <div class="login__inputContainer">
        <input type="number" class="login__inputContainer-input" name="monto" placeholder="Monto pagado" autocomplete="off">
      </div>
    </form>
    <div class="fomularioMetodoPago__metodoAlert">
      <p class="fomularioMetodoPago__metodoAlert-text">Inserte datos del pago</p>
    </div>
  </div>

</div>