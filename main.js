
var delete_btn = document.getElementById('delete_btn');
var add_btn = document.getElementById('add_btn');
var date = document.getElementById('date');
var circle_check = document.getElementById('circle_check');
var todo_text = document.getElementById('todo_text');
var list = document.getElementById("myList");



//add date
var option = {weekday: "long", month: 'short', day: 'numeric'};
const today = new Date();

date.innerHTML = today.toDateString('en-US', option);

//click listner submit button

add_btn.addEventListener("click", function(){
    var value_input = document.getElementById('add_input').value;
    add(value_input);
});


list.addEventListener('click', function(event){
    var e = event.target;
    var element_attb = e.attributes.job.value;

    if(element_attb == "done"){
        done(e);
    }
    if(element_attb == "delete"){
        remove_list(e);
    }



})

function done(e){
    
    
    if(e.classList.contains('fa-circle')){
        e.classList.remove('fa-circle');
        e.classList.add('fa-check-circle');
    }else{
        e.classList.remove('fa-check-circle');
        e.classList.add('fa-circle'); 
        
    }

e.parentNode.querySelector('.text').classList.toggle('lineThrough');   
    


}

function add(value, isDone, Isdelete){
    var text = `  <li class="list-group-item" >
    <i id="circle_check" class="far fa-circle" job="done"></i>
    <span id="todo_text" class='text'>${value}</span>
    
    <button type="button" id="delete_btn" job="delete" class="btn btn-danger fas fa-trash" style="float:right; position:relative; top:-7px"></button>
    </li>`;
    list.insertAdjacentHTML("beforeend", text);

}


function remove_list(e){
    e.parentNode.parentNode.removeChild(e.parentNode);
}
