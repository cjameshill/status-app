<!DOCTYPE html>
<html>
    <head>
        <title>What are you working on?</title>
        	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link href="https://fonts.googleapis.com/css?family=Lato:200|Lato:400|Lato:800" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div id="app">
         <div class="tasksBox">
                         <input class="searchTask" id="searchTask" name="searchTask" type="text" width="100%" v-model="searchQuery">
                          <app-tasks :filter-key="searchQuery" @new-task="handelNewTask"></app-tasks>
                </div>
        </div>
             
             <template id="tasks-template">
               <h1>Status 
                    <span class="highlight isCompleted" v-show="remaining">@{{remaining}}</span>
                </h1>
                        <input class="inputTask" id="newTask" name="newTask" type="text" width="100%" v-model="task" @keyup.enter="addTask">
                             

               <ul v-show="list.length">      
                    <div class="clearCompleted" @click="clearCompleted"><span class="taskTitle">Clear Completed</span></div>
                   
                        
                      <li :class="{ 'completed' : task.completed }"
                       v-for="task in list | filterBy filterKey"
                       @click="task.completed = ! task.completed"
                    >
                        <p class="taskTitle">@{{ task.title }}</p>
                        <div class="close" @click="deleteTask(task)">X</div>
                    </li>
                </ul>
                
                <h2 v-else>No More Tasks</h2>
             </template>
        
                <script src="http://code.jquery.com/jquery.js"></script>
                <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.15/vue.js"></script>
                <script src="js/tasks.js"></script>
    </body>
</html>
