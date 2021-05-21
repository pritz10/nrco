// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();

  $('#dataTable').Tabledit({
    url: 'action.php',
    columns: {
        identifier: [0, 'Id'],
        editable: [[2, 'Title']]
        
        
    },
  
});

});

