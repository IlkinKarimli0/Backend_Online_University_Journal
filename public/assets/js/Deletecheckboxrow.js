function deleteRow(tableID)  {
 $(document).ready(function(){
        $('.deleteBtn').click(function(){
           $('input:checked').each(function(){
               $(this).parent('tr').remove();
           });
        });
    });
}