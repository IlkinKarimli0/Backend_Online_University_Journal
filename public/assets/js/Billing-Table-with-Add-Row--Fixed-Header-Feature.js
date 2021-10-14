$(document).ready(function() {
  $(".add-row").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr><td class='text-center w-3x pt-2'><input type='checkbox' /></td><td><div class='form-group mb-1'><select class='custom-select custom-select-sm tbl-wfx kot-table font-sm'><option value='1' selected>Select an exam...</option><option value='1'>Math Analysis</option><option value='1'>Algebra</option><option value='1'>Computer science</option><option value='1'>French</option><option value='1'>English</option><option value='1'>Physics</option><option value='1'>Chemistry</option></select></div></td><td class='w-10x'><div class='form-group mb-1'><input class='form-control form-control-sm font-sm' type='number' step='1' min='1' /></div></td><td class='w-10x'><div class='form-group mb-1'><input class='form-control form-control-sm font-sm' type='number' step='1' min='1' /></div></td><td class='w-10x'><div class='form-group mb-1'><input class='form-control form-control-sm font-sm' type='number' step='1' min='1' /></div></td><td class='w-10x'><div class='form-group mb-1'><input class='form-control form-control-sm font-sm' type='number' step='1' min='1' /></div></tr>";
      $(".kot-table tbody").append(markup);
  });
  /* Find and remove selected table rows */
        $(document).ready(function(){
        $('.deleteBtn').click(function(){
           $('input:checked').each(function(){
               $(this).parent('tr').remove();
           });
        });
    });
});