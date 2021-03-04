$(document).ready(function(){
$('.jeje').on('click',function(){
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
      })
})
$('.editar').click(function(){
  $('.modal-body').load($(this).attr('href'));
})
$('.save').click(function(){
  $.post($('#formulario').attr('action'),$('#formulario').serialize(),function(data){

  },'json');
  location.reload();
  location.reload(true);
  
})
})