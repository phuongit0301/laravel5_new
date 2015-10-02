@section('css')
	<!-- iCheck -->
    <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">
@endsection

@extends('layouts.master')

@section('body')
	
    @section('content')
      
      @yield('auth')

    @endsection

    @section('script')
      <script>
        $(function () {
          $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
          });
        });
      </script>
    @endsection
	
@endsection