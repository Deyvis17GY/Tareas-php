$(document).ready(function(){

  let edit=false;
  fetchTasks();

// Desaparece la caja de busqueda
  $('#task-result').hide();

//Funcion para que busque segun la letra ingresada
    $('#search').keyup(function(e){
      if($('#search').val()){
       let search= $('#search').val();
       $.ajax({
         url:'task-search.php',
         type:'post',
         data:{search},
         success:function(response){
           let tasks = JSON.parse(response);
           let template= '';
           tasks.forEach(task => {
             template += `<li>
                ${task.name}
             </li>`
           });
           $('#container').html(template);
           $('#task-result').show();
         }
       });

  }
  if($('#search').val()===""){
    $('#task-result').hide();
  }

});

//Ingresar Datos y crear nueva tarea
   $('#task-form').submit(function(e) {

     const postDate = {
       name: $('#name').val().toUpperCase(),
       description: $('#description').val(),
       id: $('#task-id').val()
     };
     if ($('#name').val().length > 0 && $('#description').val().length > 0) {
       let url = edit === false ? 'task-add.php' : 'task-edit.php';
       $.post(url, postDate, function(response) {
         console.log(response);
         fetchTasks();
         $('#task-form').trigger('reset');
       });
       $('#Guardar').text('Guardar Tarea');
       e.preventDefault();

     }
     if($('#name').val()=="" || $('#description').val()==""){
       // $('#mensaje').fadeIn(3000,function(){
       //    $('#mensaje').text('Ingrese Datos');
       // });
       $('#mensaje').text("Datos Incompletos").slideDown(1000,function(){
         $('#mensaje').slideUp(1500);
       });
       e.preventDefault();
     }
   });
//FUncion que Actualiza la tabla de Datos
function fetchTasks() {

  $.ajax({
    url: 'task-list.php',
    type: 'GET',
    success: function(response) {
      //$.parseJSON(data);
      let tasks = JSON.parse(response);
      template = '';
      tasks.forEach(task => {

        template += `
         <tr  taskId="${task.id}">
          <td>${task.id}</td>
          <td><a href="#" class="task-item nav-link">${task.name}</a></td>
          <td>${task.description}</td>
          <td>${task.time}</td>
          <td>
            <button class="task-delete btn btn-danger">Eliminar</button>
          </td>
         </tr>`
      });
      $('#tasks').html(template);
    }
  });
}
//Funcion que elimina Datos
$(document).on('click', '.task-delete', function() {
  if (confirm("Desea eliminar")) {
    let element = $(this)[0].parentElement.parentElement;
    let id = $(element).attr('taskId');
    $.post('task-delete.php', {
      id
    }, function(response) {
      console.log(response);
      fetchTasks();
    });
  }

});

//Funcion que edita la tabla con un click al nombre
$(document).on('click','.task-item',function(){
  let element= $(this)[0].parentElement.parentElement;
  let id= $(element).attr('taskId');
  $.post('task-single.php',{id},function(response){
    const task= JSON.parse(response);
    $('#name').val(task.name);
    $('#description').val(task.description);
    $('#task-id').val(task.id);
    edit=true;
    $('#Guardar').text('Editar Tarea');
    console.log(response);
  });

});

});
