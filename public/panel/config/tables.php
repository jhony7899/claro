<?php
echo "<!-- Datatables-->
<link rel='stylesheet' href='//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css'>
<script src='//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js'></script>

<script>
    $(document).ready( function () {
    $('#table_id').DataTable({
         'order': [[ 0, 'asc' ]],
         'language': {
      'url': '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
    },
    scrollX: true
    });
} );
</script>"; 
?>
