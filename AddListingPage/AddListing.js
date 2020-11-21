let newtodo = document.getElementsByClassName('navbuttons');
let submitbutton = document.getElementById('submitbutton');
let todos = document.getElementById('todos');



function createNewToDo (event){
    let newOuterBlock = document.createElement('div');
    newOuterBlock.classList.add('todo');
    let newDeleteBlock = document.createElement('div');
    newDeleteBlock.classList.add('deleteToDo');
    newDeleteBlock.style.color="red";
    newDeleteBlock.style.float= "right";
    let newTextBlock = document.createElement('div');
    newTextBlock.classList.add('todoText');
    let newTimestampBlock = document.createElement('div');
    newTimestampBlock.classList.add('todoTimestamp');
    newOuterBlock.appendChild(newDeleteBlock);
    newOuterBlock.appendChild(newTextBlock);
    newOuterBlock.appendChild(newTimestampBlock);
    let newDeleteText = document.createTextNode('Delete This Entry');
    
    let newText = document.createTextNode(newtodo.value);
    let date = new Date();
    let NewTimestamp = document.createTextNode(date.toString());
    newDeleteBlock.appendChild(newDeleteText);
    newTextBlock.appendChild(newText);
    newTimestampBlock.appendChild(NewTimestamp);
    todos.appendChild(newOuterBlock);
    newtodo.value = '';
    submitbutton.disabled=false;
    newDeleteBlock.onclick = deleteToDo;
}
function deleteToDo (event){
    let removed = this.parentNode;
    let gone = removed.parentNode;
    gone.removeChild(removed);
}

submitbutton.onclick = createNewToDo;