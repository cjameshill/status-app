<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100|Lato:400|Lato:800" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div id="app">
         <div class="tasksBox">
                         
                          <app-tasks :list="tasks"></app-tasks>
                </div>
        </div>
             
             <template id="tasks-template">
               <h1>Status 
                    <span class="highlight isCompleted" v-show="remaining">@{{remaining}}</span>
                </h1>
                   <form class="addTask">
                        <input class="inputTask" id="newTask" name="newTask" type="text" width="100%">
                        <button type="submit" class="addTaskButton">+</button>
                     </form>
              
               <ul v-show="list.length">      
                    <div class="clearCompleted" @click="clearCompleted"><span class="taskTitle">Clear Completed</span></div>
                   
                        
                      <li :class="{ 'completed' : task.completed }"
                       v-for="task in list"
                       @click="task.completed = ! task.completed"
                    >
                        <p class="taskTitle">@{{ task.body }}</p>
                        <div class="close" @click="deleteTask(task)">X</div>
                    </li>
                </ul>
                
                <h2 v-else>No More Tasks</h2>
             </template>
        
        
                <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.15/vue.js"></script>
                <script src="js/main.js"></script>
    </body>
</html>
