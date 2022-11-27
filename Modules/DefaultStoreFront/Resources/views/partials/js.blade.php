<script src="{{ asset('js/app.js') }}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>

{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}

<script type="text/javascript" src="{{asset('store_new/js/bootstrap.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('store_new/js/main.js')}}" ></script>


<script>
    @if(Session::has('success'))
         toastr.success("{{ Session::get('success') }}",{timeOut: 100})
     @endif
 
     @if(Session::has('orange'))
        toastr.info("{{ Session::get('orange') }}",{timeOut: 100})
     @endif
 
     @if(Session::has('danger'))
        toastr.error("{{ Session::get('danger') }}",{timeOut: 100})
     @endif
</script>

@yield('js')
