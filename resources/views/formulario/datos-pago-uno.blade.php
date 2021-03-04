<section id="formulario4" class="formularios__sections show">
  <input type="hidden" value="{{$dolarPrice->value ?? ''}}" id="dolarPricePaymentForm">
  <!-- datos de usuario-->                                
  <section class="py-1">
    <!-- Number-->
    <div class="container">
      <div class="row p-1" style="flex-wrap: inherit;">
          <div class="formularios__numberWidth pt-1 pr-0 d-block d-md-none">
            <button id=btn_clr1 class="formularios__btnNumber bg-blue">
              <p class="text-white small">1</p>
            </button>
          </div>
          <div class="formularios__numberWidth pt-1 pr-0 d-md-none">
            <button id=btn_clr2 class="formularios__btnNumber bg-blue">
              <p class="text-white small">2</p>
            </button>
          </div>
          <div class="formularios__numberWidth pt-1 pr-0 d-md-none ">
            <button id=btn_clr3 class="formularios__btnNumber bg-blue">
              <p class="text-white small">3</p>
            </button>
          </div>
          <div class="formularios__numberWidth pt-1 pr-0 col-md-1">
            <button  class="formularios__btnNumber bg-primary">
              <p class="text-white small">4</p>
            </button>
          </div>
        <div class="col-8 d-flex align-items-center pl-3 col-md-11">
          <p class="font-weight-bold m-0 texto-small text-black">Datos de pago</p>
        </div>
      </div>
    </div>
    <!-- fin Number-->
      <!--  datos de usuario-->
    <div class="container mt-1 px-3">
      <div class="border shadow" id="formUserInfoContainer">
        <div class="info-container p-3">
            <div class="" id="selectPaymentMethodSection">
              @foreach($banks as $bank)
                <div class="fomularioMetodoPago__selectbBankCard payment_type" data-id="{{$bank->id ?? ''}}" data-bank="{{$bank->title ?? ''}}" data-titular="{{$bank->titular ?? ''}}" data-description="{{$bank->description ?? ''}}" data-account="{{$bank->number_account ?? ''}}">
                    <div class="fomularioMetodoPago__selectbBankCardIcon ">
                      @if($bank->title == 'Zelle')
                        <img src="{{asset('images/bank_zelle.png')}}" class="fomularioMetodoPago__selectbBankCardIcon-inactive" alt="Icono banco">
                      @elseif($bank->title == 'Efectivo')
                        <img src="{{asset('images/bank_dolar.png')}}" class="fomularioMetodoPago__selectbBankCardIcon-inactive" alt="Icono banco">
                      @else
                        <img src="{{asset('images/bank_icon_inactive.png')}}" class="fomularioMetodoPago__selectbBankCardIcon-inactive" alt="Icono banco">
                        <img src="{{asset('images/bank_icon_active.png')}}" class="fomularioMetodoPago__selectbBankCardIcon-active" alt="Icono banco">
                      @endif
                    </div>
                    <div class="fomularioMetodoPago__selectbBankCardBody">
                      <h3 class="fomularioMetodoPago__selectbBankCardBody-title">{{$bank->title ?? ''}}</h3>
                      <p class="fomularioMetodoPago__selectbBankCardBody-description">{{$bank->description ?? ''}}</p>
                    </div>
                </div>
              @endforeach
              <div class="fomularioMetodoPago__metodoAlert">
                <p class="fomularioMetodoPago__metodoAlert-text">Seleccion un método de pago.</p>
              </div>
            </div>
            @include('formulario.datos-pago-dos')
        </div>
      </div>
    </div>
    <!-- /datos de usuario-->
  </section>
    
  <!-- Buttoms-->
  <section class="my-0 pt-3">
    <div class="container">
      <div class="row">
        <div class="col-5 pr-0">
          <button type="button" class="btn btn-sm btn-block formularios__btn-left" disabled><span></span></button>
        </div>
        <div class="col-7 pl-0">
          <form action="{{route('order.store')}}" id="formFinalizarCompra">
            <input type="hidden" value="" name="bank_id" id="finalizarCompraBankId">
            <input type="hidden" value="{{$orden->id ?? ''}}" name="orden_id" id="finalizarCompraOrdenId">
            <button type="submit" class="btn btn-primary btn-sm btn-block formularios__btn-right" id="btn_finish" disabled>Finalizar Compra</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- /Buttoms-->
                    
</section>

<!-- Fin Modal datos de usuario -->

<script>
    function paymentMethodForm() {

      function addDataToPaymentForm({
        bankId,
        titular,
        descripcion,
        cuenta,
        metodo
      }){
        
        //HEADER FORM PAYMENT
        const formPaymentBankTitle = document.getElementById('paymentForm__title');
        const formPaymentBankDescription = document.getElementById('paymentForm__description');
        const formPaymentTotalAmount= document.getElementById('paymentForm__totalAmount');

        //Alert info
        const formPaymentAlertContainer = document.getElementById('formPayment__alertInformationContainer');

        //FORMULARIO
        const formPaymentFormContainer = document.getElementById('formPaymentFormContainer');

        //ORDEN ID
        const formPaymentOrdenId = document.getElementById('finalizarCompraOrdenId');

        // --------- ADDING DATA --------

        let templateAlert;
        let templateFormulario;

        let totalAmount = 0;
        let totalBolivares = 0;

          //HEADER DATA
        formPaymentBankTitle.textContent = metodo
        formPaymentBankDescription.textContent = descripcion


        
        if(metodo.toLowerCase() == 'efectivo') {
            
          templateAlert = `
            <div id="formPayment__alertInformationContainer">
              <p class="formPayment__alertInformation-paymentData"><span>Pago en efectivo</span></p>
            </div>
          `

          templateFormulario = `
            <input type="hidden" name="bank_id" value="${bankId}"/>
            <input type="hidden" name="order_id" value="${formPaymentOrdenId.value}"/>
            <div class="login__inputContainer">
              <input type="number" class="login__inputContainer-input" id="paymentEfectivo" required name="monto" placeholder="Monto a pagar" autocomplete="off">
            </div>
          `
          axios.get(`/obtener/pago/${formPaymentOrdenId.value}`)
          .then(res => {
            verifyTotalAmount(res.data, 'efectivo')
          })
          .catch(err => {
            console.log(err)
          })  

        }else if(metodo.toLowerCase() == 'zelle') {

          templateAlert = `

            <div id="formPayment__alertInformationContainer">
              <div class="formPayment__alertInformation-actionContainer">
                <p class="formPayment__alertInformation-paymentData">Transferir a: </p>
              </div>

              <div>
                <p class="formPayment__alertInformation-paymentData"><span>Correo zelle:</span> ${cuenta}</p>
                <p class="formPayment__alertInformation-paymentData"><span>Titular:</span> ${titular} </p>
              </div>
            </div>
          `

          templateFormulario = `
            <input type="hidden" name="bank_id" value="${bankId}"/>
            <input type="hidden" name="order_id" value="${formPaymentOrdenId.value}"/>
            <div class="login__inputContainer">
              <input type="text" class="login__inputContainer-input" id="paymentTitular" required name="titular_cuenta" placeholder="Titular de cuenta" autocomplete="off">
            </div>

            <div class="login__inputContainer">
              <input type="text" class="login__inputContainer-input" required name="documento_identidad_titular" placeholder="Documento identidad titular" autocomplete="off">
            </div>

            <div class="login__inputContainer">
              <input type="text" class="login__inputContainer-input" required name="referencia" placeholder="Referencia" autocomplete="off">
            </div>

            <div class="login__inputContainer">
              <input type="number" class="login__inputContainer-input" min="1" required name="monto" placeholder="Monto pagado" autocomplete="off">
            </div>
          `

          axios.get(`/obtener/pago/${formPaymentOrdenId.value}`)
          .then(res => {
            verifyTotalAmount(res.data, 'zelle')
          })
          .catch(err => {
            console.log(err)
          })  


        } else {
          templateAlert = `
            <div id="formPayment__alertInformationContainer">
              <div class="formPayment__alertInformation-actionContainer">
                <p class="formPayment__alertInformation-paymentData">Transferir a: </p>
              </div>

              <div>
                <p class="formPayment__alertInformation-paymentData"><span>Cuenta:</span> ${cuenta}</p>
                <p class="formPayment__alertInformation-paymentData"><span>Titular:</span> ${titular} </p>
              </div>
            </div>
          `

          templateFormulario = `

            <input type="hidden" name="bank_id" value="${bankId}"/>
            <input type="hidden" name="order_id" value="${formPaymentOrdenId.value}"/>
            <div class="login__inputContainer">
              <input type="text" class="login__inputContainer-input" required id="paymentTitular" name="titular_cuenta" placeholder="Titular de cuenta" autocomplete="off">
            </div>

            <div class="login__inputContainer">
              <input type="text" class="login__inputContainer-input" required name="documento_identidad_titular" placeholder="Documento identidad titular" autocomplete="off">
            </div>

            <div class="login__inputContainer">
              <input type="text" class="login__inputContainer-input" required name="referencia" placeholder="Referencia" autocomplete="off">
            </div>

            <div class="login__inputContainer">
              <input type="number" class="login__inputContainer-input" min="1" required name="monto" placeholder="Monto pagado" autocomplete="off">
            </div>
          `
          axios.get(`/obtener/pago/${formPaymentOrdenId.value}`)
          .then(res => {
            verifyTotalAmount(res.data, 'banco')
          })
          .catch(err => {
            console.log(err)
          })        
        }
        formPaymentAlertContainer.innerHTML = templateAlert;

        formPaymentFormContainer.innerHTML = templateFormulario;
      }

      function toggleChooseMethodToPaymentForm(){
        const selectPaymentForm = document.getElementById('selectPaymentMethodSection');
        const paymentForm = document.getElementById('formPaymentToFinish');
        
        
        selectPaymentForm.classList.toggle('hideForm');
        formPaymentToFinish.classList.toggle('hideForm');
      }

      function pagoRealizado(ordenId) {

        axios.get(`/obtener/pago/${ordenId}`)
          .then(res => {
            verifyTotalAmount(res.data, 'verificar')
          })
          .catch(err => {
            console.log(err)
          })

      }

      function verifyTotalAmount(data, type){
          //Total amount and dolar value nad button finish
          const formPaymentTotalAmount= document.getElementById('paymentForm__totalAmount');
          const dolarValue = document.getElementById('dolarPricePaymentForm');
          const buttonFinalizarOrden = document.getElementById('btn_finish');

          //form container
          const formPaymentFormContainer = document.getElementById('formPaymentFormContainer');
          
          // data api

          const total_pago = data.total_pago;
          const pagos = data.pagos;

          if(pagos.length) {
            let totalCuenta = total_pago;

            for (let i = 0; i < pagos.length; i++) {

              const pago = pagos[i];
            
              const bancoReceptor = pago.banco_receptor;
              
              if(bancoReceptor.toLowerCase() == 'zelle' || bancoReceptor.toLowerCase() == 'efectivo') {
                totalCuenta = totalCuenta - pago.monto;
                console.log(totalCuenta)
              }else {
                const bolivarToDolar = pago.monto / dolarValue.value
                totalCuenta = totalCuenta - bolivarToDolar
              }

            }

            if(type === 'verificar'){


              if(totalCuenta === 0) {
                formPaymentTotalAmount.textContent = totalCuenta
                buttonFinalizarOrden.removeAttribute('disabled');
                formPaymentFormContainer.innerHTML = '<h3>Cuenta completada cón éxito, puede finalizar</h3>'
                return;
              }else{ 
                toggleChooseMethodToPaymentForm();
              }


            }else {

              if(type.toLowerCase() == 'banco') {
              formPaymentTotalAmount.textContent = `${new Intl.NumberFormat('es-ES').format(parseInt(totalCuenta * dolarValue.value))} Bs`;
              }else {
                formPaymentTotalAmount.textContent = `${totalCuenta.toFixed(2)} $`;
              }
              
            }

          }else {
            if(type.toLowerCase() == 'banco') {
              formPaymentTotalAmount.textContent = `${new Intl.NumberFormat('es-ES').format(parseInt(total_pago * dolarValue.value))} Bs`;
            }else {
              formPaymentTotalAmount.textContent = `${total_pago} $`;
            }
          }
      }

      const metodoPago = document.querySelectorAll('.payment_type');
      const fomrularioDePago = document.getElementById('formularioPayment');

      if(metodoPago) {
        metodoPago.forEach(metodo => {
          metodo.addEventListener('click', (e) => {
            let container = e.target
            
            if(e.target.tagName !== 'DIV') {
              container = e.target.parentNode.parentNode;
            }

            const idPyamentMethod = container.dataset.id;
            const titularPaymentMethod = container.dataset.titular;
            const descripcionPaymentMethod = container.dataset.description;
            const accountPaymentMethod = container.dataset.account;
            const bankPaymentMethod = container.dataset.bank;

            const bankFinalizarId = document.getElementById('finalizarCompraBankId');
            bankFinalizarId.value = idPyamentMethod;


            addDataToPaymentForm({
              bankId: idPyamentMethod,
              titular: titularPaymentMethod,
              descripcion: descripcionPaymentMethod,
              cuenta: accountPaymentMethod,
              metodo: bankPaymentMethod
            })
            toggleChooseMethodToPaymentForm()
          })
        })
      }

      fomrularioDePago.addEventListener('submit', (e) => {
        e.preventDefault();
        const titularInput = document.getElementById('paymentTitular')
        const efectivoInput = document.getElementById('paymentEfectivo')

        if(efectivoInput) {
          const [, bankId, ordenId ,monto] = e.target;
          
          axios.post('/pago', {
            id_banco_receptor: parseInt(bankId.value),
            monto: monto.value,
            orden_id: ordenId.value
          })
          .then(res => {
            pagoRealizado(ordenId.value)
          })
          .catch(err => {
            console.log(err)
            pagoRealizado(ordenId.value)
          })

        }

        if(titularInput) { 
          const [, bankId, ordenId, titular, documentoIdentidad, referencia, monto] = e.target;

          axios.post('/pago', {
            id_banco_receptor: bankId.value,
            titular_cuenta: titular.value,
            documento_identidad_titular: documentoIdentidad.value,
            referencia: referencia.value,
            monto: monto.value,
            orden_id: ordenId.value
          })
          .then(res => {
            pagoRealizado(ordenId.value)
          })
          .catch(err => {
            console.log(err)
            pagoRealizado(ordenId.value)
          })
        }


        return;

      })

    }

    paymentMethodForm();
</script>