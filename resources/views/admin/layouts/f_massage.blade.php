@if(Session::has('flash_massage'))

    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            text: 'هذه الرساله سوف تختفي بعد 3 ثواني',
            title: '{{Session::get('flash_massage')}} ',
            showConfirmButton: false,
            timer: 2000
        })
    </script>

@endif
