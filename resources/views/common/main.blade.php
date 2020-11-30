<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="{{asset('favicon.png')}}">

        @yield('title')
        
        
         <!--Jquery-->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
          
         <!-- css -->
         <link rel="stylesheet" href="{{asset('css/vendor.css')}}" />
         <link rel="stylesheet" href="{{asset('css/style.css')}}" />
         <!--Floating WhatsApp css-->
        <link rel="stylesheet" href="{{asset('css/floating-wpp.css')}}" />

        <script src="{{asset('js/vendor/floating_whatsapp/jquery-3.3.1.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('js/vendor/floating_whatsapp/floating-wpp.min.css')}}">
        <script src="{{asset('js/vendor/floating_whatsapp/floating-wpp.min.js')}}"></script>

      <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
        }
      </style>
</head>
<body>
    @yield('content')

    
    {{-- footer --}}
    @include('common.footer')
    
    <!--Div where the WhatsApp will be rendered-->
    <div id="WAButton" style="border-radius: 50%; z-index:100"></div>
  

    <script type="text/javascript">  
     $(function() {
      $('#WAButton').floatingWhatsApp({
        phone: '584244010776', //WhatsApp Business phone number International format-
        //Get it with Toky at https://toky.co/en/features/whatsapp.
        headerTitle: 'Atención al Cliente', //Popup Title
        popupMessage: 'Hola, ¿Como podemos ayudarte?', //Popup Message
        showPopup: true, //Enables popup display
        buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
        headerColor: '#02518D', //Custom header color
        // backgroundColor: '#02518D', //Custom background button color
        position: "right"    
      });
    });
    </script>  
 

    <!-- scripts --> 
     
     <script src="{{asset('js/vendor.js')}}"></script>
     <script src="{{asset('js/app.js')}}"></script>

    

</body>
</html>