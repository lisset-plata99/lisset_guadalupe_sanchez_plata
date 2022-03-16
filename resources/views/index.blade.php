<!DOCTYPE html>
<html>
<head>
   <title>Index</title>
</head>
<body>

   <!-- codigos Dropdown -->
   codigos : <select id='sel_depart' name='sel_depart'>
      <option value='0'>-- Selecciona un codigo postal </option>

      <!-- Read codigoss -->
      @foreach($codigos['data'] as $codigos)
        <option value='{{ $codigos->codigo }}'>{{ $codigos->codigo }}</option>
      @endforeach
   </select>
   <br>
   <br>
   
   <!-- codigos Employees Dropdown -->
   Tipo asenta : <select id='sel_emp' name='sel_emp'>
     <option value='0'>-- Selecciona un tipo_asenta --</option>
   </select>

   <!-- Script -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script type='text/javascript'>
   $(document).ready(function(){

      // codigos Change
      $('#sel_depart').change(function(){

         // codigos id
         var id = $(this).val();

         // Empty the dropdown
         $('#sel_emp').find('option').not(':first').remove();

         // AJAX request 
         $.ajax({
           url: 'obtenerTipoAsenta/'+id,
           type: 'get',
           dataType: 'json',
           success: function(response){

             var len = 0;
             if(response['data'] != null){
                len = response['data'].length;
             }

             if(len > 0){
                // Read data and create <option >
                for(var i=0; i<len; i++){

                   var id = response['data'][i].id;
                   var name = response['data'][i].tipo_asenta;

                   var option = "<option value='"+id+"'>"+name+"</option>";

                   $("#sel_emp").append(option); 
                }
             }

           }
         });
      });
   });
   </script>
</body>
</html>