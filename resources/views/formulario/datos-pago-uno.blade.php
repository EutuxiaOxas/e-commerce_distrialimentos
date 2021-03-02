<section id="formulario4" class="formularios__sections show hide">

  <!-- datos de usuario-->                                
  <section class="py-1">
    <!-- Number-->
    <div class="container">
      <div class="row p-1">
        <div class="col-2 pt-1 pr-0 col-md-1 col-lg-1">
          <button class="formularios__btnNumber bg-primary">
            <p class="text-white small">4</p>
          </button>
        </div>
        <div class="col-10 d-flex align-items-center pl-0 col-md-11 col-lg-11">
          <p class="font-weight-bold texto-small">Datos de pago</p>
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
                <div class="fomularioMetodoPago__selectbBankCard payment_type" data-id="{{$bank->id}}" data-titular="{{$bank->titular}}" data-account="{{$bank->number_account}}">
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
            <input type="hidden" value="{{$direcciones[0]->id ?? ''}}" name="address_id" id="finalizarCompraDireccionId">
            <button type="submit" class="btn btn-primary btn-sm btn-block formularios__btn-right" id="btn_finish" @if (!$direcciones->isNotEmpty()) disabled @endif>Finalizar Compra</button>
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

      function toggleChooseMethodToPaymentForm(){
        const selectPaymentForm = document.getElementById('selectPaymentMethodSection');
        const paymentForm = document.getElementById('formPaymentToFinish');
        
        
        selectPaymentForm.classList.toggle('hideForm');
        formPaymentToFinish.classList.toggle('hideForm');
      }


      const metodoPago = document.querySelectorAll('.payment_type');

      if(metodoPago) {
        metodoPago.forEach(metodo => {
          metodo.addEventListener('click', (e) => {
            let container = e.target
            
            if(e.target.tagName !== 'DIV') {
              container = e.target.parentNode.parentNode;
            }

            const idPyamentMethod = container.dataset.id;
            const titularPaymentMethod = container.dataset.titular;
            const accountPaymentMethod = container.dataset.account;

            toggleChooseMethodToPaymentForm()
          })
        })
      }
    }

    paymentMethodForm();
</script>