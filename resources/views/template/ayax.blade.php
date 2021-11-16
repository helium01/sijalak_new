<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $.ajax({
        type:'get',
        url:"{{route('api')}}",
        success:function(hasil){
            $("select[name=nama]").html(hasil);
        }
    })
});
</script>
<script>
$(document).ready(function(){
  $.ajax({
    type:'get',
    url:"{{route('idapi')}}",
    success:function(hasil){
      $("select[name=id_provinsi]").html(hasil);
    }
  })
});
</script>
<script>
  $(document).ready(function () {
    $(document).on('change','#gambar', function(){
      let gambar=$('#gambar').val()
      $('.a').text(gambar)
    });
    $(document).on('change','#video', function(){
      let gambar=$('#video').val()
      $('.b').text(gambar)
    });
  });
</script>
