import './bootstrap';
import '../css/admin.css';
import '../sass/app.scss';

import Swal from 'sweetalert2';

import SlimSelect from 'slim-select'

new SlimSelect({
  select: '#selectElement'
});

new SlimSelect({
  select: '#multiple'
})

/* globals Chart:false */


  $('#add-form').on('submit', function(event){
    event.preventDefault();

    var url = $(this).attr('data-action');

    $.ajax({
        url: url,
        method: 'POST',
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success:function(response)
        {
            if(response)
            {
                Swal.fire(
                    'Created!',
                    'You clicked the button!',
                    'success'
                )
            }
            $('.table').load(location.href+ ' .table');
        },
        error: function(err) {
            let error = err.responseJSON;
            $.each(error.errors, function(index, value){
                $('.errorsMessage').append('<span class="text-danger">'+value+'</span><br>');
            });
        }
    });
});